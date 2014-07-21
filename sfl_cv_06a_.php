<?php
require_once('sfl_security_id_.php');
 require_once('conn/connect.php');
  if (!$_POST)
                  {

    $id_cuenta = $_GET['id_cuenta'];
    $accion = $_GET['accion'];
	$id_cat_posicion= $_GET['id_cat_posicion'];
	$time_expe_pos=$_GET['time_expe_pos'];
	 $id_posicion= $_GET['id_posicion'];
     }
	 else
	 { 
	  $id_cuenta = $_POST['id_cuenta'];
	$id_cat_posicion= $_POST['id_cat_posicion'];
    $posicion= $_POST['posicion'];
	$line = $_POST['line'];
	$canales = $_POST['canales'];
	$especialidad = $_POST['especialidad'];
    $producto=$_POST['producto'];
	$estado=$_POST['estado'];
    $zona_job=$_POST['zona_job'];
    $ciudad_job=$_POST['ciudad_job'];
    $sec_job=$_POST['sec_job'];
	$time_expe_pos=$_POST['time_expe_pos'];
	$id_posicion= $_POST['id_posicion'];
	}


             if ($accion == "borrar" ){
			 $borrar = mysql_query("delete from app_posicion  where  id_cuenta = '$id_cuenta' and  id_cat_posicion ='". $id_cat_posicion ."'")  ;
     	  
			    }
			   else {
			   
			   if ($time_expe_pos !=""){
			  
			 	$up_time = "UPDATE app_posicion SET
			time_expe_pos ='" . $time_expe_pos . "'
			WHERE id_posicion ='" . $id_posicion . "'";
			mysql_query($up_time);}
			   
			      if ($id_cat_posicion !=""){
			     	$insert_ind= "INSERT INTO app_posicion(
   				id_posicion,
                id_cuenta,
                id_cat_posicion
				)values(
				'NULL',
				'$id_cuenta',				
				'$id_cat_posicion')";
				mysql_query($insert_ind);
                 }}
				
header("Location:sfl_cv_06a.php?id_cuenta=" . $id_cuenta . "&accion=" . $accion . "&id_posicion=" . $id_posicion . "");

?>


 