<?
session_start();

if(md5($_POST['code1']) != $_SESSION['key']) {
	
		$error = 3;
		header("Location: sfl_contacto.php?error=" . $error . "&c_nombre=" . $c_nombre . "&c_email=" . $c_email . "&c_tel=" . $c_tel . "&cia=" . $cia . "&asunto=" . $asunto . "&mns=" . $mns . "");
	
}else{

	$c_nombre = $_POST['c_nombre'];
	$c_email = $_POST['c_email'];
	$c_tel = $_POST['c_tel'];
	$cia = $_POST['cia'];
	$asunto = $_POST['asunto'];
	$mns = $_POST['mns'];

	if (($c_nombre == "") || ($c_email == "")) {

		$error = 1;
		header("Location: sfl_contacto.php?error=" . $error . "&c_nombre=" . $c_nombre . "&c_email=" . $c_email . "&c_tel=" . $c_tel . "&cia=" . $cia . "&asunto=" . $asunto . "&mns=" . $mns . "");

	}else{
		
			$sender_email2 = "contacto@salesforceleasing.com";
			$sender_name2 = "Sales Force Leasing";
			$reply2 = "contacto@salesforceleasing.com";
	
			$email_usr = $c_email;
			$subject2 = "Contacto - Sales Force Leasing";
	
			$headers.= "From: " . $sender_email2 . "\n";
			$cabeceras .= "From: " . $sender_name2 . " <" . $sender_email2 . ">\n";
			$cabeceras .= "Reply-To: " . $reply2 . "\n";
	
			$cuerpo = "Contacto desde SalesForceLeasing.com\n"; 
			$cuerpo .= "Nombre: " . $c_nombre . "\n"; 
			$cuerpo .= "Email: " . $c_email . "\n"; 
			$cuerpo .= "Telefono: " . $c_tel . "\n"; 
			$cuerpo .= "Empresa: " . $cia . "\n"; 
			$cuerpo .= "Motivo: " . $asunto . "\n"; 
			$cuerpo .= "Comentarios: " . $mns . "\n"; 
	
			$cuerpo2 = "Gracias por contactar con Sales Force Leasing\n"; 
			$cuerpo2 .= $c_nombre . "\n"; 
			$cuerpo2 .= $c_email . "\n"; 
			$cuerpo2 .= " \n"; 
			$cuerpo2 .= "La informacion ha sido enviada, en breve un ejecutivo se pondra en contacto con usted.\n"; 
	
			mail($email_usr,$subject2,$cuerpo2,$cabeceras);  
			mail("contacto@salesforceleasing.com",$subject2,$cuerpo,$cabeceras); 
			mail("aramirez@alsiri.com",$subject2,$cuerpo,$cabeceras); 
	
		$error = 2;
		header("Location: sfl_contacto.php?error=" . $error . "&c_nombre1=" . $c_nombre . "");
	
	}

}

?>