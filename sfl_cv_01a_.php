<?php

require_once('conn/connect.php');
   $id_cuenta = $_POST['id_cuenta'];
    $transfer_datos = $_POST['transfer_datos'];
    $privacidad= $_POST['privacidad'];

if ((!$transfer_datos)||(!$privacidad)) {
	$accion = 1;
 	header("Location:sfl_cv_01a.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta . "");
 }
   else { 
              if((!$transfer_datos)||(!$privacidad)){
			  $accion = 2;
			 	header("Location:sfl_cv_01a.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta . "");
				}
			  else {
			  
              	$insert_aviso= "INSERT INTO aviso(
				id_aviso,
				id_cuenta,
                transfer_datos,
                privacidad
				)values(
				'null',
				'$id_cuenta',
				'$transfer_datos',
                '$privacidad'
				)";
				mysql_query($insert_aviso);
				
			    $query_new_cuenta = mysql_query("SELECT * FROM cat_cuenta WHERE id_cuenta ='" . $id_cuenta . "'");
                $qry_new_cuenta = mysql_fetch_assoc($query_new_cuenta);
                $id_cuenta = $qry_new_cuenta['id_cuenta'];
				$usr = $qry_new_cuenta['email'];
				$psw = $qry_new_cuenta['passw'];
				
          	    header("Location:sfl_id-acceso_01.php?usr=" . $usr . "&psw=". $psw ."");
                }	
           }
               
?>


