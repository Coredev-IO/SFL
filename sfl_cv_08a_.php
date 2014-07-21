<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
    
	
  if (!$_GET) {
	$id_cuenta= $_POST['id_cuenta'];
	$accion= $_POST['accion'];
		
    $estudios=$_POST['estudios'];
	$id_estudios=$_POST['id_estudios'];
	$status_est=$_POST['status_est'];
	$a_status_est=$_POST['a_status_est'];
    $de_estudios=$_POST['de_estudios'];
	$a_estudios=$_POST['a_estudios'];
	
	$word=$_POST['word'];
	$powerpoint=$_POST['powerpoint'];
	$acces=$_POST['acces'];
	$excel=$_POST['excel'];
	$otras_tec=$_POST['otras_tec'];
	}else{

	$id_estudios=$_GET['id_estudios'];
	$accion=$_GET['accion'];

   	}
						
			 if((!$id_estudios) and ($estudios !=""))
			{ 
				                									
		       $insert_est= "INSERT INTO estudios( 
   				id_estudios,
                id_cuenta,
                estudios, 
				status,
				de,
				a              
                )values(
				'NULL',
				'$id_cuenta',
				'$estudios',
   				'$status_est',
				'$de_estudios',
				'$a_estudios')";
				mysql_query($insert_est);
			
		       $query_est = mysql_query("SELECT * FROM estudios WHERE id_cuenta = '$id_cuenta'");
		       $qry_est = mysql_fetch_assoc($query_est);
               $id_estudios = $qry_ests['id_estudios'];
			   $accion = 1;
			   header("Location:sfl_cv_08a.php?id_cuenta=" . $id_cuenta . "&id_estudios=" . $id_estudios . "&id_estudios=" . $id_estudios . "");
                     }else{
				    
      	 			$up_est = "UPDATE estudios SET
					estudios ='" . $estudios . "',
					status ='" . $status_est . "',
					de ='" . $de_estudios . "',
					a  ='" . $a_estudios . "'
					
					WHERE id_estudios ='" . $id_estudios . "'";
					mysql_query($up_est) or die(mysql_error());
					$accion = 2;
					header("Location:sfl_cv_08a.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta ."");				
            
		    } 
			 			 	       
       ?>
