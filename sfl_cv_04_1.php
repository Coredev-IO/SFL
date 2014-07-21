<?php
  require_once('conn/connect.php');
    $id_cuenta = $_POST['id_cuenta'];
	$accion = $_POST['accion'];
    $rfc= $_POST['rfc'];
    $curp = $_POST['curp'];
    $no_imss = $_POST['no_imss'];
    $no_clinica = $_POST['no_clinica'];

    $id_ref=$_POST['id_ref'];
    $ref_nom=$_POST['ref_nom'];
    $ref_dom=$_POST['ref_dom'];
    $ref_tel=$_POST['ref_tel'];
    $ref_ocu=$_POST['ref_ocu'];
    $time_con=$_POST['time_con'];

if ((!$ref_nombre)||(!$ref_dom)||(!$ref_tel)||(!$ref_ocu)||(!$time_con)) {

	$accion = 1;
 	header("Location:sfl_cv_04.php?accion=" . $accion . "&rfc=" . $rfc . "&curp=" . $curp . "&no_imss=" . $no_imss ."&no_clinica=" . $no_clinica ."&ref_nom=" . $ref_nom ."&ref_dom=" . $ref_dom ."&ref_tel=" . $ref_tel ."&ref_ocu=" . $ref_ocu ."&id_cuenta=" . $id_cuenta ."");
 }
   else {
   				$insert_refe= "INSERT INTO cat_ref_persona(
				id_ref,
				id_cuenta,
                  ref_nom,
                  ref_dom,
                  ref_tel,
                  ref_ocu,
                  time_con
				)values(
				'NULL',
                '$id_cuenta',
				'$ref_nom',
				'$ref_dom',
				'$ref_tel',
				'$ref_ocu',
				'$time_con'
					)";
				mysql_query($insert_refe);

	header("Location:sfl_cv_04.php?id_cuenta=" . $id_cuenta . "");

     }

?>
