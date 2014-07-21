<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
    $id_cuenta= $_POST['id_cuenta'];
	$accion= $_POST['accion'];
    $area_exp= $_POST['area_exp'];
    $auditoria = $_POST['auditoria'];
    $canales = $_POST['canales'];
    
      
	  if ($area_exp !=""){
	   foreach($area_exp as  $valor)
	   
	{
		     	$insert_area= "INSERT INTO area_experiencia(
   				id_area_exp,
                id_cuenta,
                experiencia
                    )values(
				'NULL',
				'$id_cuenta',
				'$valor')";
				mysql_query($insert_area);
        				}}
           if ($auditoria !=""){
		    foreach($auditoria as  $valor)
			
	{
		     	$insert_audi= "INSERT INTO auditorias(
   				id_auditoria,
                id_cuenta,
                auditoria
                    )values(
				'NULL',
				'$id_cuenta',
				'$valor')";
				mysql_query($insert_audi);
        				}}
						if ($canales !=""){
       foreach($canales as  $valor)
	   
	 {
		     	$insert_can= "INSERT INTO canales_job(
   				id_canales_job,
                id_cuenta,
                canales
                    )values(
				'NULL',
				'$id_cuenta',
				'$valor')";
				mysql_query($insert_can);
        				}}
 	 
			header("Location:sfl_cv_08.php?id_cuenta=" . $id_cuenta . "");
    
?>
