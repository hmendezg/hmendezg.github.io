<?php
	//error_reporting(0);
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'vendor/autoload.php';
	
	if(!isset($_POST["name"]) || !isset($_POST["subj"]) || !isset($_POST["email"]) || !isset($_POST["tel"]) || !isset($_POST["msg"])){
		//echo "fail";
		return;
	}
	
	define("CAPTCHA_SECRET","6LcpCoIUAAAAAH0H72oDJ5ZYAF-l2UF0IfceUF2S");
	
	if(validate_rechapcha($_POST['g-recaptcha-response'])){	
		$subj = "Enablitech Web Page Contact";
		$msg = "Name: " . $_POST["name"] . "<br>\n";
		$msg .= "Subject: " . $_POST["subj"] . "<br>\n";
		$msg .= "Email: " . $_POST["email"] . "<br>\n";
		$msg .= "Tel: " . $_POST["tel"] . "<br>\n";
		$msg .= "Cel: " . $_POST["cel"] . "<br>\n";
		$msg .= "Message: " . $_POST["msg"];
		$msg = wordwrap(strip_tags($msg,'<br>'),70);
		
		$resMsg = "";
		if (SendEmail($subj,$msg)){
			$resMsg = 1;
		}else{
			$resMsg = 0;
		}
		
		session_start();
		$_SESSION["msg"] = $resMsg;
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);		
	}else{
		error_log("Likely spam from " . $_SERVER['REMOTE_ADDR']);
	}
	
	function validate_rechapcha($response){	
		$verifyURL = 'https://www.google.com/recaptcha/api/siteverify';

		$query_data = [
			'secret' => CAPTCHA_SECRET,
			'response' => $response,
			'remoteip' => (isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR'])
		];

		// Collect and build POST data
		$post_data = http_build_query($query_data, '', '&');

		// Send data on the best possible way
		if (function_exists('curl_init') && function_exists('curl_setopt') && function_exists('curl_exec')){
			// Use cURL to get data 10x faster than using file_get_contents or other methods
			$ch = curl_init($verifyURL);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-type: application/x-www-form-urlencoded'));
			$response = curl_exec($ch);
			curl_close($ch);
		}else{
			// If server not have active cURL module, use file_get_contents
			$opts = array('http' =>
				array(
					'method' => 'POST',
					'header' => 'Content-type: application/x-www-form-urlencoded',
					'content' => $post_data
				)
			);
			$context = stream_context_create($opts);
			$response = file_get_contents($verifyURL, false, $context);
		}

		// Verify all reponses and avoid PHP errors
		if($response){
			$result = json_decode($response);
			if($result->success === true){
				return true;
			}else{
				return $result;
			}
		}

		return false;
	}
	
	function SendEmail($subj,$msg){
		$from = "sales@enablitech.com";	
		$to = "hmendezg@hotmail.com";
		$mail = new PHPMailer(true);					// `true` enables exceptions
		$mail->CharSet = 'UTF-8';
		try {
			// Server settings
			// $mail->SMTPDebug = 2;					// Enable verbose debug output
			$mail->isSMTP();							// Set mailer to use SMTP
			$mail->Host = 'smtp.zoho.com';				// SMTP server(s)
			$mail->SMTPAuth = true;                 	// Enable SMTP authentication
			$mail->Username = $from;                	// SMTP username
			$mail->Password = "9DkQbZ1pyATp";         	// SMTP password
			$mail->SMTPSecure = 'tls';              	// Enable TLS encryption
			$mail->Port = 587;                      	// TCP port
			
			// Sender and Recipient(s)
			$mail->setFrom($from, 'Enablitech.com');
			$mail->addAddress($to);						// Add a recipient
			$mail->addAddress('admin@enablitech.com');
			$mail->addAddress('hmendezg@yahoo.com');
			
			// Content
			$mail->isHTML(true);						// Email format
			$mail->Subject = $subj;
			$mail->Body    = $msg;
			
			$mail->send();
			
			return true;
		} catch (Exception $e) {
			//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			return(false);
		}
	}
?>