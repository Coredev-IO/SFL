<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
    $id_cuenta = $_GET['id_cuenta'];
    $accion = $_GET['accion'];
	$id_cat_industria= $_GET['id_cat_industria'];
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
	
  
             if ($accion == "borrar" ){
			 $borrar = mysql_query("delete from app_industria  where  id_cuenta = '$id_cuenta' and  id_cat_industria ='". $id_cat_industria ."'")  ;
     	  			    }
			   else {
			   
		     	$insert_ind= "INSERT INTO app_industria(
   				id_industria,
                id_cuenta,
                id_cat_industria
				)values(
				'NULL',
				'$id_cuenta',				
				'$id_cat_industria')";
				mysql_query($insert_ind);
                 }

header("Location:sfl_cv_06.php?id_cuenta=" . $id_cuenta . "&accion=" . $accion . "");



?>


 