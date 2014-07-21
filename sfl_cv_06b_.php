<?php
require_once('sfl_security_id_.php');
require_once('conn/connect.php');

  if (!$_POST)
                  {

    $id_cuenta = $_GET['id_cuenta'];
    $accion = $_GET['accion'];
	$id_cat_line= $_GET['id_cat_line'];
	$time_expe_line=$_GET['time_expe_line'];
	 $id_line= $_GET['id_line'];
     }
	 else
	 { 
	  $id_cuenta = $_POST['id_cuenta'];
	$id_cat_line= $_POST['id_cat_line'];
    $line= $_POST['line'];
	$line = $_POST['line'];
	$canales = $_POST['canales'];
	$especialidad = $_POST['especialidad'];
    $producto=$_POST['producto'];
	$estado=$_POST['estado'];
    $zona_job=$_POST['zona_job'];
    $ciudad_job=$_POST['ciudad_job'];
    $sec_job=$_POST['sec_job'];
	$time_expe_line=$_POST['time_expe_line'];
	$id_line= $_POST['id_line'];
	}
  

             if ($accion == "borrar" ){
			 $borrar = mysql_query("delete from app_line  where  id_cuenta = '$id_cuenta' and  id_cat_line ='". $id_cat_line ."'")  ;
     	  
			    }
			   else {
			   
			   if ($time_expe_line !=""){
			  
			 	$up_time = "UPDATE app_line SET
			
				
			time_expe_line ='" . $time_expe_line . "'
			WHERE id_line ='" . $id_line . "'";
			mysql_query($up_time);}
			   
			      if ($id_cat_line !=""){
			     	$insert_ind= "INSERT INTO app_line(
   				id_line,
                id_cuenta,
                id_cat_line
				)values(
				'NULL',
				'$id_cuenta',				
				'$id_cat_line')";
				mysql_query($insert_ind);
                 }}
				
header("Location:sfl_cv_06b.php?id_cuenta=" . $id_cuenta . "&accion=" . $accion . "&id_line=" . $id_line . "");

?>


 