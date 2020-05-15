<?php
	//error_reporting(0);
	
	$lang = "";
	
	if(isset($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}else{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	
	if($lang == "es"){
		$siteTitle = "Enablitech - TI para la Gobernanza de TI";
		$siteSubtitle = "TI para la plenitud de la Gobernanza de TI";	
		$siteSlogan = "Soluciones avanzadas para un aseguramiento enfocado en el valor empresarial";
		
		$mnuTitle = "Menú";
		$mnuOStart = "Inicio";
		$mnuOProds = "Productos y Servicios";
		$mnuOContact = "Contacto";
		
		$langTitle = "English";
		$tlang = "en";
		
		$prdITSA = "Aplicación<br>IT Semantic Audit";		
		$prdITSA_desc = "Software que facilita la realización de auditorías semánticas en todo tipo de orgaización habilitada por tecnología de información.";
		$prdITSA_desc_more = "Ver más";
		
		$srvITSA = "Auditoría<br>Semántica de TI";		
		$srvITSA_desc = "Servicio de realización de auditorías semánticas al universo de segmentos de tecnología de información en organizaciones de todo tipo.";
		//$srvITSA_desc_more = "Leer más";
		
		$srvImpITSA = "Implantación y<br>Capacitación";		
		$srvImpITSA_desc = "Servicio de implantación de la metodología de auditoría semántica, incluyendo el uso del software IT Semantic Audit.";
		//$srvImpITSA_desc_more = "Leer más";
		
		$frmContactTitle = "Para contactarnos, por favor envíenos la siguiente información:";
		
		$frmlblName = "Nombre";
		$frmName = "Nombre y apellido";
		
		$frmlblSubject = "Asunto";
		$frmSubjOptTitle = "Seleccione una opción";		
		$frmSubjOpt1 = "Solicitud De Propuesta (RFP)";
		$frmSubjOpt2 = "Comentario";
		
		$frmlblPhone = "Teléfono";
		$frmlblMobile = "Móvil";
		$frmlblEmail = "Email";
		$frmphEmail = "id@email.com";
		$frmlblMsg = "Mensaje";
		$frmphMsg = "Mi mensaje";
		$frmlblSubmit = "Enviar";
		
		$msgSent = "Mensaje enviado!";
		$msgFail = "No se pudo enviar el mensaje. Intente más tarde.";
	}else{
		$siteTitle = "Enablitech - IT for the IT Governance";
		$siteSubtitle = "IT for the fullness of IT Governance";	
		$siteSlogan = "Advanced solutions for assurance focused on business value";
		
		$mnuTitle = "Menu";
		$mnuOStart = "Start";
		$mnuOProds = "Products and Services";
		$mnuOContact = "Contact";
		
		$langTitle = "Español";
		$tlang = "es";	
		
		$prdITSA = "IT Semantic Audit<br>Application";		
		$prdITSA_desc = "Software that facilitates the performance of semantic audits in all types of organization enabled by information technology.";
		$prdITSA_desc_more = "See more";
		
		$srvITSA = "IT Semantic Audit<br>Service";		
		$srvITSA_desc = "Service of conducting semantic audits to the universe of information technology segments in organizations of all kinds.";
		//$srvITSA_desc_more = "Read more";
		
		$srvImpITSA = "Implementation and<br>Training";		
		$srvImpITSA_desc = "Implementation service of the semantic audit methodology, including the use of IT Semantic Audit software.";
		//$srvImpITSA_desc_more = "Read more";
		
		$frmContactTitle = "To contact us, please send us the following information:";
		
		$frmlblName = "Name";
		$frmName = "Full name";
		
		$frmlblSubject = "Subject";
		$frmSubjOptTitle = "Select an option";		
		$frmSubjOpt1 = "Request For Proposal (RFP)";
		$frmSubjOpt2 = "Comment";
		
		$frmlblPhone = "Phone";
		$frmlblMobile = "Mobile";
		$frmlblEmail = "Email";
		$frmphEmail = "id@email.com";
		$frmlblMsg = "Message";
		$frmphMsg = "My message";
		$frmlblSubmit = "Send";
		
		$msgSent = "Message successfully sent!";
		$msgFail = "Cannot sent the message. Try later.";
	}
	
	//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>