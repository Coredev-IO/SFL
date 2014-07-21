<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
  
	$id_cuenta= $_POST['id_cuenta'];
	$accion= $_POST['accion'];
   
	$word=$_POST['word'];
	$powerpoint=$_POST['powerpoint'];
	$acces=$_POST['acces'];
	$excel=$_POST['excel'];
	$otras_tec=$_POST['otras_tec'];
  $query_tec = mysql_query("SELECT * FROM tecnologia WHERE id_cuenta = '$id_cuenta'");
  $exist_tec = mysql_num_rows($query_tec);
   if ($exist_tec < 1) { $accion_up = 6; }

switch ($accion_up)
{ 
    case  6: 					
		
			$insert_tec= "INSERT INTO tecnologia(
   				id_tecnologia,
                id_cuenta,
                 word,
				 powerpoint,
				 acces,
				 excel,
				 otras_tec 
			   )values(
				'NULL',
				'$id_cuenta',
				'$word',
                '$powerpoint',
				'$acces',
				'$excel',
				'$otras_tec')";
				mysql_query($insert_tec);
                require_once('conn/connect.php');
		   break;
		   
	 case  5:	   
		   
		   	$up_tec = "UPDATE tecnologia SET
			word ='" . $word . "',
     		powerpoint ='" . $powerpoint . "',
			acces ='" . $acces ."',
			excel ='" . $excel . "',
			otras_tec ='" . $otras_tec . "'
						
			WHERE id_cuenta ='" . $id_cuenta . "'";
			mysql_query($up_tec) or die(mysql_error());
		   break;   
		   
		    } 
								
	 header("Location:sfl_cv_09.php?id_cuenta=" . $id_cuenta . "");      			 	       
       ?>
