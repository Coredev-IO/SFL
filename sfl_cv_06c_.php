<?php
require_once('sfl_security_id_.php');
 require_once('conn/connect.php');  
	  if (!$_GET)
                  {
	
	$id_cuenta = $_POST['id_cuenta'];
    $accion = $_POST['accion'];
	$id_cat_industria= $_POST['id_cat_industria'];
    $posicion= $_POST['posicion'];
	$line = $_POST['line'];
	$canales = $_POST['canales'];
	$especialidad = $_POST['especialidad'];
    $producto=$_POST['producto'];
	$estado=$_POST['estado'];
    $zona_job=$_POST['zona_job'];
    $ciudad_job=$_POST['ciudad_job'];
    $sec_job=$_POST['sec_job'];
    $time_exp_line=$_POST['time_exp_line'];
	$time_expe_pos=$_POST['time_expe_pos'];
	}
	else{  
	    $id_cuenta = $_GET['id_cuenta'];
     	$accion = $_GET['accion'];
		$id_cat_canales = $_GET['id_cat_canales'];
		$id_cat_especialidad = $_GET['id_cat_especialidad'];
		$id_cat_producto = $_GET['id_cat_producto'];
	    $estado = $_GET['estado'];
		$id_cat_zona = $_GET['id_cat_zona'];
		$id_cat_ciudades = $_GET['id_cat_ciudades'];		
	  }
	 
if ($accion == "borrar " ){
			 if ($id_cat_canales){
			 $borrar_canales = mysql_query("delete from app_canales  where  id_cuenta = '$id_cuenta' and  id_cat_canales ='". $id_cat_canales ."'")  ;
            }if ($id_cat_especialidad){
		     $borrar_especialidad = mysql_query("delete from app_especialidad  where  id_cuenta = '$id_cuenta' and  id_cat_especialidad ='". $id_cat_especialidad ."'")  ;
             }
			 
			  if ($id_cat_producto){
			 $borrar_producto = mysql_query("delete from app_producto  where  id_cuenta = '$id_cuenta' and  id_cat_producto ='". $id_cat_producto ."'")  ;
              }if ($estado){
		     $borrar_estado = mysql_query("delete from app_edo_job  where  id_cuenta = '$id_cuenta' and  id_estado ='". $estado ."'")  ;
             }

			  	  if ($id_cat_zona){
			 $borrar_producto = mysql_query("delete from app_zona_job  where  id_cuenta = '$id_cuenta' and  id_cat_zona ='". $id_cat_zona ."'")  ;
                 }if ($id_cat_ciudades){
		     $borrar_ciudades = mysql_query("delete from app_ciudades_job where  id_cuenta = '$id_cuenta' and  id_cat_ciudades ='". $id_cat_ciudades."'")  ;
             }

			 		  
	         header("Location:sfl_cv_06c.php?id_cuenta=" . $id_cuenta . "&accion=" . $accion . "");	  
	 
	        }  
					
 else {
   			 
			if($canales !="")
            	{
		     	$insert_can= "INSERT INTO app_canales(
   				id_canales,
                id_cuenta,
                id_cat_canales
                    )values(
				'NULL',
				'$id_cuenta',
				'$canales')";
				mysql_query($insert_can);
       				}
	        if($especialidad !="")
	            {
		     
				$insert_esp= "INSERT INTO app_especialidad(
   				id_especialidad,
                id_cuenta,
                id_cat_especialidad
                    )values(
				'NULL',
				'$id_cuenta',
				'$especialidad')";
				mysql_query($insert_esp);
        
				}
           	  if($producto !="")
	           {
		     	$insert_prod= "INSERT INTO app_producto(
   				id_producto,
                id_cuenta,
                id_cat_producto
                    )values(
				'NULL',
				'$id_cuenta',
				'$producto')";
				mysql_query($insert_prod);
       				}
						
	           if($estado !=""){        
		     	$insert_edo= "INSERT INTO app_edo_job(id_edo_job,id_cuenta,id_estado)values('NULL','$id_cuenta','$estado')";
				mysql_query($insert_edo);
        				}
		     if($zona_job !="")
              	{      
		     	$insert_zona= "INSERT INTO app_zona_job(
   				id_zona,
                id_cuenta,
                id_cat_zona
                    )values(
				'NULL',
				'$id_cuenta',
				'$zona_job')";
				mysql_query($insert_zona);
        				}
	         if($ciudad_job !="")
            	{      
		     	$insert_ciu= "INSERT INTO app_ciudades_job(
   				id_ciudades,
                id_cuenta,
                id_cat_ciudades
                    )values(
				'NULL',
				'$id_cuenta',
				'$ciudad_job')";
				mysql_query($insert_ciu);
        				}

									
	           if($sec_job !="")
	            {
		     	$insert_sec= "INSERT INTO app_sec_job(
   				id_sec_job,
                id_cuenta,
                sec_job
                    )values(
				'NULL',
				'$id_cuenta',
				'$sec_job')";
				mysql_query($insert_sec);
        				}				
}					 
				
 header("Location:sfl_cv_06c.php?id_cuenta=" . $id_cuenta . "&accion=" . $accion . "");



?>


 