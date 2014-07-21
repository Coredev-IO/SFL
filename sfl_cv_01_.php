<?php

 require_once('conn/connect.php');
 require_once('sfl_fch_hra.php');

    $email= $_POST['email'];
    $passw= $_POST['passw'];
	$conf_passw= $_POST['conf_passw'];
	$pas= md5($passw);

if ((!$email)||(!$passw)or $passw <> $conf_passw) {

	$accion = 1;
 	header("Location:sfl_cv_01.php?accion=" . $accion . "&email=" . $email . "");
 }
   else {

		if (!$id_cuenta) {

   	 	    $query_cuenta = mysql_query("SELECT * FROM cat_cuenta WHERE email ='" . $email . "'");
			$exist_cuenta = mysql_num_rows($query_cuenta);

			if ($exist_cuenta > 0) {

				$accion = 2;
				header("Location:sfl_cv_01.php?accion=" . $accion . "&email=" . $email . "");

			}else{

               	$insert_cuenta= "INSERT INTO cat_cuenta(
				id_cuenta,
				status,
                email,
                passw,
				fch_alta,
				tipo_usr
				)values(
				'null',
				'1',
				'$email',
                '$pas',
				'$fch_up4',
				'$tipo_usr'
				)";
				mysql_query($insert_cuenta);

                $query_new_cuenta = mysql_query("SELECT * FROM cat_cuenta WHERE email ='" . $email . "'");
                $qry_new_cuenta = mysql_fetch_assoc($query_new_cuenta);
                $id_cuenta = $qry_new_cuenta['id_cuenta'];
		
			    header("Location:sfl_cv_01a.php?&id_cuenta=" . $id_cuenta . "");

		    	}
           }
         }
         

         
?>


