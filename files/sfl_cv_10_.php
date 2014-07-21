<?php
    require_once('../sfl_security_id_.php');
  require_once('../conn/connect.php');
  require_once('../sfl_fch_hra.php');
	
    $id_cuenta= $_POST['id_cuenta'];
	$id_intereses = $_POST['id_intereses'];
	$id_idiomas = $_POST['id_idiomas'];

	$accion= $_POST['accion'];
    $puesto= $_POST['puesto'];
    $sueldo = $_POST['sueldo'];
    $area_int = $_POST['area_int'];
    $dis_time = $_POST['dis_time'];
	    
	$idioma_1 = $_POST['idioma_1'];
	$idioma_2 = $_POST['idioma_2'];
	$idioma_3 = $_POST['idioma_3'];
	
$archivo_paso = $_FILES['fichero']['tmp_name'];
$peso_paso = $_FILES['fichero']['size'];

if ($archivo_paso !=""){
$path = "http://www.salesforcemi.com";
		
		$archivo = $_FILES['fichero']['tmp_name'];
		$archivo_remoto = "/www/www/files/" . $_FILES['fichero']['name'];
		$servidor_ftp = "salesforceleasing.com";
		
		$id_con = ftp_connect($servidor_ftp);
		$resultado_login = ftp_login($id_con, "salesforce", "qemigyhi");
	
		if (ftp_put($id_con, $archivo_remoto, $archivo, FTP_BINARY)) {
			
			$name_file = $_FILES['fichero']['name'];
			$peso_file = $_FILES['fichero']['size'];
			
		}}
			

 $query_int = mysql_query("SELECT * FROM intereses WHERE id_cuenta = '$id_cuenta'");
  $exist_int = mysql_num_rows($query_int);
   if ($exist_int < 1) { $accion_up = 6; }
	
  
switch ($accion_up)
{ 
    case  6: 					

 if ((!$puesto)||(!$sueldo)||(!$area_int)||(!$area_int)) {

	$accion = 1;
 	header("Location: ../sfl_cv_10.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta . "&puesto=" . $puesto . "&sueldo=" . $sueldo ."&area_int=" . $area_int ."&disp_time=" . $disp_time ."");
 }
   else {
     	  	  
		  if(!$id_intereses) 
			{
			$insert_int= "INSERT INTO intereses (
   				id_interes,
                id_cuenta,
                puesto,
                sueldo,
                area_int,
                dis_time
               )values(
				'NULL',
				'$id_cuenta',
				'$puesto',
				'$sueldo',
                '$area_int',
                '$dis_time')";
				
				mysql_query($insert_int);
				}
			   
			  if(!$id_idiomas) 
			{
			$insert_id= "INSERT INTO idiomas(
   				id_idiomas,
                id_cuenta,
                idioma_1,
                idioma_2,
                idioma_3                
                )values(
				'NULL',
				'$id_cuenta',
				'$idioma_1',
                '$idioma_2',
                '$idioma_3')";
				mysql_query($insert_id);
               }   
  if($archivo !="") 
			{
			$insert_fc= "INSERT INTO cv_fichero(
   				id_fichero,
                fichero,
				id_cuenta                
                )values(
				'NULL',
                '$archivo_remoto',
				'$id_cuenta)";
				mysql_query($insert_fc);
               }   
					
	          }
	break;
	
   case 5:
   if ((!$puesto)||(!$sueldo)||(!$area_int)||(!$area_int)) {

	$accion = 1;
 	header("Location: ../sfl_cv_10.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta . "&puesto=" . $puesto . "&sueldo=" . $sueldo ."&area_int=" . $area_int ."&disp_time=" . $disp_time ."");
     }
   
   	$up_int = "UPDATE intereses SET
			puesto ='" . $puesto . "',
     		sueldo ='" . $sueldo . "',
			area_int ='" . $area_int ."',
			dis_time='" . $dis_time . "'
						
			WHERE id_cuenta ='" . $id_cuenta . "'";
			mysql_query($up_int) or die(mysql_error());

	$up_idio = "UPDATE idiomas SET
			idioma_1 ='" . $idioma_1 . "',
     		idioma_2 ='" . $idioma_2 . "',
			idioma_3 ='" . $idioma_3 ."'
			
						
			WHERE id_cuenta ='" . $id_cuenta . "'";
			mysql_query($up_idio) or die(mysql_error());
			
			if($archivo !="") 
			{
			$insert_fc= "INSERT INTO cv_fichero(
   				id_fichero,
                fichero,
				id_cuenta                
                )values(
				'NULL',
                '$archivo_remoto',
				'$id_cuenta')";
				mysql_query($insert_fc);
               }   		
			
		   break;   
   }	
				header("Location: ../sfl_id_acceso_x.php");
?>
