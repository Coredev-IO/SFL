<?php
    require_once('sfl_security_id_.php');
	
    $id_cuenta = $_POST['id_cuenta'];
	$accion = $_POST['accion'];

    $id_ref=$_POST['id_ref'];
    $ref_nom=$_POST['ref_nom'];
    $ref_dom=$_POST['ref_dom'];
    $ref_tel=$_POST['ref_tel'];
    $ref_ocu=$_POST['ref_ocu'];
    $time_con=$_POST['time_con'];

  require_once('conn/connect.php');

if ((!$ref_nom)||(!$ref_tel)||(!$time_con)) {
	$accion = 1;
 	header("Location:sfl_cv_04.php?accion=" . $accion . "&ref_nom=" . $ref_nom ."&id_cuenta=" . $id_cuenta ."&ref_tel=" . $ref_tel ."&ref_dom=" . $ref_dom ."&ref_ocu=" . $ref_ocu ."&time_con=" . $time_con ."&id_ref=" . $id_ref ."");

   } else {

 			if (!$id_ref ) {
		                  $insert_ref= "INSERT INTO cat_ref_persona(
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
							mysql_query($insert_ref);
							$accion = 3;
			                $query_refer = mysql_query("SELECT * FROM cat_ref_persona where id_cuenta ='" . $id_cuenta . "'");
	   	                     $qry_refer = mysql_fetch_assoc($query_refer);				
							$id_ref = $qry_refer['id_ref'];
							 header("Location:sfl_cv_04.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta ."");
		       }
			   else {
              
      	 			$up_ref = "UPDATE cat_ref_persona SET
					ref_nom ='" . $ref_nom . "',
					ref_dom ='" . $ref_dom . "',
					ref_tel='" . $ref_tel . "',
					ref_ocu ='" . $ref_ocu . "',
					time_con ='" . $time_con . "'

					WHERE id_ref ='" . $id_ref . "'";
					mysql_query($up_ref) or die(mysql_error());
		
					$accion = 2;
					header("Location:sfl_cv_04.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta ."");
					}
	       }
?>
