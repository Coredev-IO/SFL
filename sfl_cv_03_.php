<?php
require_once('conn/connect.php');
require_once('sfl_security_id_.php');
    $id_cuenta= $_POST['id_cuenta'];
  	$accion = $_POST['accion'];
   
    $tel_particular = $_POST['tel_particular'];
    $tel_movil = $_POST['tel_movil'];
    $tel_oficina = $_POST['tel_oficina'];
    $tel_reca = $_POST['tel_reca'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $rfc = $_POST['rfc'];
    $curp = $_POST['curp'];
    $no_imss = $_POST['no_imss'];
    $no_clinica = $_POST['no_clinica'];

   	$up_aspirante = "UPDATE cat_aspirante SET
			tel_particular ='" . $tel_particular . "',
			tel_movil ='" . $tel_movil . "',
			tel_oficina ='" . $tel_oficina . "',
	    	tel_rec ='" . $tel_reca . "',
     	    twitter ='" . $twitter . "',
			facebook ='" . $facebook . "',
	    	linkedin ='" . $linkedin . "',
			rfc ='" . $rfc . "',
			curp ='" . $curp . "',
			no_imss ='" . $no_imss . "',
			no_clinica ='" . $no_clinica . "'
         	WHERE id_cuenta ='" . $id_cuenta . "'";
			mysql_query($up_aspirante) or die(mysql_error());
           	header("Location:sfl_cv_04.php?id_cuenta=" . $id_cuenta . "&accion=" . $accion . "");
 
?>
