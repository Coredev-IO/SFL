<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	$id_cuenta= $_POST['id_cuenta'];
	$accion= $_POST['accion'];

	$primaria= $_POST['primaria'];
    $secu = $_POST['secu'];
    $prepa = $_POST['prepa'];
    $lic = $_POST['lic'];
    $maestria=$_POST['maestria'];
    $doc=$_POST['doc'];
    
	$status_pri=$_POST['status_pri'];
    $status_secu=$_POST['status_secu'];
    $status_prepa=$_POST['status_prepa'];
    $status_lic=$_POST['status_lic'];
    $status_maestria=$_POST['status_maestria'];
	$status_doc=$_POST['status_doc'];
	   
    $de_pri=$_POST['de_pri'];
    $a_pri=$_POST['a_pri'];
    $de_secu=$_POST['de_secu'];
    $a_secu=$_POST['a_secu'];
	$de_prepa=$_POST['de_prepa'];
    $a_prepa=$_POST['a_prepa'];
	$de_lic=$_POST['de_lic'];
    $a_lic=$_POST['a_lic'];
	$de_maestria=$_POST['de_maestria'];
    $a_maestria=$_POST['a_maestria'];
	$de_doc=$_POST['de_doc'];
    $a_doc=$_POST['a_doc'];
	
	
	

  $query_academia = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta'");
  $exist_academia = mysql_num_rows($query_academia);
  if ($exist_academia < 1) { $accion_up = 6; }
				
switch ($accion_up)
{ 
    case  6:   		
			$insert_pri= "INSERT INTO academia(
   				id_academia,
                id_cuenta,
                nivel,
                instituto,
                status,
                fecha_i,
                fecha_f               
                )values(
				'NULL',
				'$id_cuenta',
				'primaria',
                '$primaria',
                '$status_pri',
				'$de_pri',
                '$a_pri')";
				mysql_query($insert_pri);
                require_once('conn/connect.php');
		    
		
			$insert_secu= "INSERT INTO academia(
   				id_academia,
                id_cuenta,
                nivel,
                instituto,
                status,
                fecha_i,
                fecha_f               
                )values(
				'NULL',
				'$id_cuenta',
				'Secundaria',
                '$secu',
                '$status_secu',
				'$de_secu',
                '$a_secu')";
				mysql_query($insert_secu);
                require_once('conn/connect.php');
		
			$insert_prepa= "INSERT INTO academia(
   				id_academia,
                id_cuenta,
                nivel,
                instituto,
                status,
                fecha_i,
                fecha_f               
                )values(
				'NULL',
				'$id_cuenta',
				'Preparatoria',
                '$prepa',
                '$status_prepa',
				'$de_prepa',
                '$a_prepa')";
				mysql_query($insert_prepa);
                require_once('conn/connect.php');
             
	
			$insert_lic= "INSERT INTO academia(
   				id_academia,
                id_cuenta,
                nivel,
                instituto,
                status,
                fecha_i,
                fecha_f               
                )values(
				'NULL',
				'$id_cuenta',
				'licenciatura',
                '$lic',
                '$status_lic',
				'$de_lic',
                '$a_lic')";
				mysql_query($insert_lic);
                require_once('conn/connect.php');		   
		
			$insert_maestria= "INSERT INTO academia(
   				id_academia,
                id_cuenta,
                nivel,
                instituto,
                status,
                fecha_i,
                fecha_f               
                )values(
				'NULL',
				'$id_cuenta',
				'maestria',
                '$maestria',
                '$status_maestria',
				'$de_maestria',
                '$a_maestria')";
				mysql_query($insert_maestria);             
		
		      	$insert_doc= "INSERT INTO academia(
   				id_academia,
                id_cuenta,
                nivel,
                instituto,
                status,
                fecha_i,
                fecha_f               
                )values(
				'NULL',
				'$id_cuenta',
				'Doctorado',
                '$doc',
                '$status_doc',
				'$de_doc',
                '$a_doc')";
				mysql_query($insert_doc);
                require_once('conn/connect.php');
           		
			
	        header("Location:sfl_cv_08a.php?id_cuenta=" . $id_cuenta . "");      			 	       
            break;
 case  5:      
           if($primaria !=""){ 	
			$up_pri = "UPDATE academia SET
			instituto ='" . $primaria . "',
			status ='" . $status_pri . "',
			fecha_i='" . $de_pri ."',
			fecha_f='" . $a_pri . "'
			WHERE id_cuenta ='" . $id_cuenta . "' and nivel = 'primaria'";
			mysql_query($up_pri);
           
			}
			
			 if($secu !=""){ 	
			$up_secu = "UPDATE academia SET
			instituto ='" . $secu . "',
			status ='" . $status_secu . "',
			fecha_i='" . $de_secu ."',
			fecha_f='" . $a_secu . "'
			WHERE id_cuenta ='" . $id_cuenta . "' and nivel = 'secundaria'";
			mysql_query($up_secu);
			}
			
			 if($prepa !=""){ 	
			$up_prepa = "UPDATE academia SET
			instituto ='" . $prepa . "',
			status ='" . $status_prepa . "',
			fecha_i='" . $de_prepa ."',
			fecha_f='" . $a_prepa . "'
			WHERE id_cuenta ='" . $id_cuenta . "' and nivel = 'preparatoria'";
			mysql_query($up_prepa);
         
			}
	          if($lic !=""){	
			$up_lic = "UPDATE academia SET
			instituto ='" . $lic . "',
			status ='" . $status_lic . "',
			fecha_i='" . $de_lic ."',
			fecha_f='" . $a_lic. "'
			WHERE id_cuenta ='" . $id_cuenta . "' and nivel = 'licenciatura'";
			mysql_query($up_lic);
          
			}
           
			  if($maestria !=""){  	
			$up_maestria = "UPDATE academia SET
			instituto ='" . $maestria . "',
			status ='" . $status_maestria . "',
			fecha_i='" . $de_maestria ."',
			fecha_f='" . $a_maestria . "'
			WHERE id_cuenta ='" . $id_cuenta . "' and nivel = 'maestria'";
			mysql_query($up_maestria);
          
			}
	         if($doc !=""){ 	
			$up_doc = "UPDATE academia SET
			instituto ='" . $doc . "',
			status ='" . $status_doc . "',
			fecha_i='" . $de_doc ."',
			fecha_f='" . $a_doc . "'
			WHERE id_cuenta ='" . $id_cuenta . "' and nivel = 'doctorado'";
			mysql_query($up_doc);
           
			}
					
			break;

	   
   }	header("Location:sfl_cv_08a.php?id_cuenta=" . $id_cuenta . "");

   
       ?>
