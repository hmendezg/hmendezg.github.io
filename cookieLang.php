<?php
	$lang = "";
	
	/*
	$l = $_POST['lang'];
	echo "<script type='text/javascript'>alert('$l');</script>";
	*/
	
	if(isset($_POST['lang'])){	
		$lang = $_POST['lang'];
	}else{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	
	setcookie('lang',$lang);

	header('Location: ' . $_SERVER['HTTP_REFERER']);	
?>