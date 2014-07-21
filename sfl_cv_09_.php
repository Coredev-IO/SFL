<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
    $id_cuenta = $_POST['id_cuenta'];
	$accion = $_POST['accion'];
    $id_laboral= $_POST['id_laboral'];
	
    $empresa=$_POST['empresa'];
    $tipo=$_POST['tipo'];
    $area=$_POST['area'];
    $giro=$_POST['giro'];
    $puesto=$_POST['puesto'];
    $sueldo=$_POST['sueldo'];
	
	$funciones=$_POST['funciones'];
    $logros=$_POST['logros'];
    $jefe=$_POST['jefe'];
    $puesto_jefe=$_POST['puesto_jefe'];
    $e_mail=$_POST['e_mail'];
   
    $telefono=$_POST['telefono'];
    $fecha_i=$_POST['fecha_i'];
    $fecha_f=$_POST['fecha_f'];
    $actual_job=$_POST['actual_job'];
    $autorizo_ref=$_POST['autorizo_ref'];
	$separacion=$_POST['separacion'];
if ((!$empresa)||(!$tipo)||(!$puesto)) {
	$accion = 1;
 	header("Location:sfl_cv_09.php?accion=" . $accion . "&id_cuenta=" .$id_cuenta."&id_laboral=" .$id_laboral ."&empresa=" . $empresa ."&area=" . $area ."&giro=" . $giro ."&puesto=" . $puesto ."&sueldo=" . $sueldo ."");
   } else {
 			if (!$id_laboral ) {
		$d_fch_in = substr($fecha_i,-2);
		$m_fch_in = substr($fecha_i,5,-3);
		$a_fch_in = substr($fecha_i,0,4);
		$fecha_i= $d_fch_in. "-" . $m_fch_in . "-" . $a_fch_in;
	    $d_fch_fin = substr($fecha_f,-2);
		$m_fch_fin = substr($fecha_f,5,-3);
		$a_fch_fin = substr($fecha_f,0,4);
		$fecha_f= $d_fch_fin . "-" . $m_fch_fin . "-" . $a_fch_fin;
    	  $insert_laboral= "INSERT INTO laboral(
							id_laboral,
							id_cuenta,
							empresa,
							tipo,
							area,
							giro,
							puesto,
							sueldo,
						    funciones,
							logros,
							jefe,
							puesto_jefe,
							e_mail,
							telefono,
							fecha_i,
							fecha_f,
							actual_job,
							autorizo_ref,
							separacion
				  			)values(
							'NULL',
							'$id_cuenta',
							'$empresa',
							'$tipo',
							'$area',
							'$giro',
							'$puesto',
							'$sueldo',
							'$funciones',
							'$logros',
							'$jefe',
							'$puesto_jefe',
							'$e_mail',
							'$telefono',
							'$fecha_i',
							'$fecha_f',
							'$actual_job',
							'$autorizo_ref',
							'$separacion')";
							mysql_query($insert_laboral);
							$accion = 3;
							 header("Location:sfl_cv_09.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta ."id_laboral=" . $id_laboral . "");
		       }
			   else {
      	 			$up_ref = "UPDATE laboral SET
					empresa ='" . $empresa . "',
					tipo ='" . $tipo . "',
					area='" . $area . "',
					giro ='" . $giro . "',
					puesto ='" . $puesto . "',
					sueldo ='" . $sueldo . "',
					funciones ='" . $funciones . "',
					logros='" . $logros . "',
					jefe ='" . $jefe . "',
					puesto_jefe ='" . $puesto_jefe . "',
					e_mail ='" . $e_mail . "',
					telefono ='" . $telefono . "',
					fecha_i='" . $fecha_i . "',
					fecha_f ='" . $fecha_f . "',
					actual_job ='" . $actual_job . "',
                    autorizo_ref ='" . $autorizo_ref . "',
                    separacion ='" . $separacion . "'
     				WHERE id_laboral ='" . $id_laboral . "'";
					mysql_query($up_ref) or die(mysql_error());
		
					$accion = 2;
					header("Location:sfl_cv_09.php?accion=" . $accion . "&id_cuenta=" . $id_cuenta ."");
					}
	       }
?>

