<?php
     require_once('sfl_security_id_.php');
    $id_vacante = $_POST['id_vacante'];
	$accion = $_POST['accion'];
    $vacante=$_POST['vacante'];
    $descripcion=$_POST['descripcion'];
    $lugar=$_POST['lugar'];
    $salario=$_POST['salario'];
    $fecha=$_POST['fecha'];
	$empresa=$_POST['empresa'];
	$horario=$_POST['horario'];
	$escolaridad=$_POST['escolaridad'];
    $experiencia=$_POST['experiencia'];
    $contacto=$_POST['contacto'];
    $contacto_mail=$_POST['contacto_mail'];
	$status=$_POST['status'];
	
	
   require_once('conn/connect.php');

if ((!$vacante)||(!$descripcion)||(!$lugar)||(!$salario)||(!$fecha)||(!$empresa)||(!$escolaridad)||(!$contacto)||(!$contacto_mail)) {
	$accion = 1;
 	header("Location:sfl_vacante_01.php?accion=" . $accion . "&id_vacante=" . $id_vacante ."&vacante=" . $vacante ."&descripcion=" . $descripcion ."&empresa=" . $empresa ."&lugar=" . $lugar ."&salario=" . $salario ."&fecha=" . $fecha ."");

   } else {  $d_fch = substr($fecha,0,2);
	                	$m_fch = substr($fecha,3,-5);
		               $a_fch = substr($fecha,-4);
		               $fecha= $a_fch ."-". $m_fch ."-". $d_fch;
               		
	   			if (!$id_vacante ) {
		               
						  $insert_vaca= "INSERT INTO vacantes(
							id_vacante,
							vacante,
							empresa,
							  descripcion,
							  lugar,
							  salario,
							  horario,
							  fecha,
							  escolaridad,
							  experiencia,
							  contacto,
							  contacto_mail,
							  status
							)values(
							'NULL',
							'$vacante',
							'$empresa',
							'$descripcion',
							'$lugar',
							'$salario',
							'$horario',
							'$fecha',
							'$escolaridad',
							'$experiencia',
							'$contacto',
							'$contacto_mail',
							'status')";
							mysql_query($insert_vaca);
							$accion = 3;
			                $query_vaca = mysql_query("SELECT * FROM vacantes where id_vacante ='" . $id_vacante . "'");
	   	                     $qry_vaca = mysql_fetch_assoc($query_vaca);				
							$id_vacante = $qry_vaca['id_vacante'];
							 header("Location:sfl_vacante_01.php?accion=" . $accion . "&id_vacante=" . $id_vacante ."");
		       }
			   else {
                  	$up_vaca = "UPDATE vacantes SET
					vacante='" . $vacante . "',
					empresa='" . $empresa . "',
					descripcion ='" . $descripcion . "',
					lugar='" . $lugar . "',
					salario ='" . $salario . "',
					horario ='" . $horario . "',
					fecha ='" . $fecha . "',
					escolaridad ='" . $escolaridad . "',
					experiencia ='" . $experiencia . "',
					contacto ='" . $contacto . "',
					contacto_mail ='" . $contacto_mail . "',
					status ='" . $status . "'
					WHERE id_vacante ='" . $id_vacante . "'";
					mysql_query($up_vaca) or die(mysql_error());
		
					$accion = 2;
					header("Location:sfl_vacante_01.php?accion=" . $accion . "");
					}
	       }
?>
