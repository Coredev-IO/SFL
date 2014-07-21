<?php
    require_once('conn/connect.php');
    require_once('sfl_security_id_.php');
    $id_cuenta=$_POST['id_cuenta'];
	$accion= $_POST['accion'];
    $lug_nac= $_POST['lug_nac'];
    $genero = $_POST['genero'];
    $edo_civil = $_POST['edo_civil'];
    $auto_prop = $_POST['auto_prop'];
    $auto_esta=$_POST['auto_esta'];
    $mane_carre=$_POST['mane_carre'];
    $dispo_viaj=$_POST['dispo_viaj'];
    $dispo_res=$_POST['dispo_res'];

	
switch ($accion_up)
{ 
    case  6: 
if ((!$genero)||(!$edo_civil)) {
	$accion = 1;
 	header("Location:sfl_cv_05.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta . "&lug_nac=" . $lug_nac . "&genero=" . $genero . "&edo_civil=" . $edo_civil ."&auto_prop=" . $auto_prop ."&auto_esta=" . $auto_esta ."&mane_carre=" . $mane_carre ."&dispo_viaj=" . $dispo_viaj ."&dispo_res=" . $dispo_res ."");
 }
   else {
     		$insert_perf= "INSERT INTO perf_exp(
   				id_per_exp,
                id_cuenta,
                lug_nac,
                genero,
                edo_civil,
                auto_prop,
                auto_esta,
                mane_carre,
                dispo_viaj,
                dispo_res
                )values(
				'NULL',
				'$id_cuenta',
				'$lug_nac',
                '$genero',
                '$edo_civil',
				'$auto_prop',
                '$auto_esta',
                '$mane_carre',
				'$dispo_viaj',
                '$dispo_res' )";
				mysql_query($insert_perf);
            	$accion = 3;
				header("Location:sfl_cv_06.php?id_cuenta=" . $id_cuenta . "");
     }    break;  
	  case  5:     
	  	$up_per = "UPDATE perf_exp SET
			id_cuenta ='" . $id_cuenta . "',
     		lug_nac ='" . $lug_nac . "',
			genero ='" . $genero ."',
			edo_civil ='" . $edo_civil . "',
			auto_prop ='" . $auto_prop . "',
			auto_esta ='" . $auto_esta . "',
			 mane_carre ='" . $mane_carre ."',
			dispo_viaj ='" . $dispo_viaj . "',
			dispo_res ='" . $dispo_res . "'
			
			WHERE id_cuenta ='" . $id_cuenta . "'";
			mysql_query($up_per) or die(mysql_error());
           	header("Location:sfl_cv_06.php?id_cuenta=" . $id_cuenta . "");
	  
}

?>
