<?php
 require_once('conn/connect.php');
$usr = $_POST['usr'];

$accion = 2;
if (!$usr) { header("Location:sfl_cv_password.php?accion=" . $accion . ""); }

$checkuser = mysql_query("SELECT * FROM cat_cuenta WHERE email='" . $usr . "'");
$acces_exist = mysql_num_rows($checkuser);

if ($acces_exist > 0) {
	
	$cuenta= mysql_fetch_assoc($checkuser);
	
	$id_cuenta = $cuenta['id_cuenta'];
	$email = $cuenta['email'];
	
	$md5 = md5(microtime() * mktime());
	$string = substr($md5,0,5);
	$new_psw = md5($string);
	
	 $sender_email2 = "admin@salesforceleasing.com";
     $sender_name2 = "Sales Force Leasing Group";
	//$reply2 = "registro@cofide.org";
	
	$up_usr_c = "UPDATE cat_cuenta SET
	passw='" . $new_psw . "'
	WHERE id_cuenta='" . $id_cuenta . "'";
	mysql_query($up_usr_c) or die(mysql_error());
	
	$email_usr = $email;
	$subject2 = "Datos de acceso - Sales Force Leasing";
	
	$headers.= "From: " . $sender_email2 . "\n";
	$cabeceras .= "From: " . $sender_name2 . " <" . $sender_email2 . ">\n";
	//$cabeceras .= "Reply-To: " . $reply2 . "\n";
	
	$cuerpo2 .= $nombre . " " . $apellidos . ".\n"; 
	$cuerpo2 .= "Por motivos de seguridad su contrasena anterior fue eliminada, de forma automatica se ha generado una nueva contrasena para ingresar a la Comunidad de Corporativo Fiscal Decada.\n"; 
	$cuerpo2 .= "\n"; 
	$cuerpo2 .= "Usuario: " . $email . "\n";
	$cuerpo2 .= "Contrasena: " . $string . "\n";
	$cuerpo2 .= "\n";
	$cuerpo2 .= "\n";
	$cuerpo2 .= "El texto de este mensaje puede no contener intencionalmente acentos o caracteres especiales.\n";

	mail($email_usr,$subject2,$cuerpo2,$cabeceras);  
	
	$accion = 1;
	header("Location:sfl_cv_password.php?accion=" . $accion . "");
	
}else{
	
	$accion = 2;
	header("Location:sfl_cv_password.php?accion=" . $accion . "");
	
}


?>