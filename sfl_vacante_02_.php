<?php
    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');

    $id_vacante = $_GET['id_vacante'];
	$accion = $_GET['accion'];
    $descripcion= $_GET['descripcion'];
    $lugar = $_GET['lugar'];
    $salario = $_GET['salario'];
    $fecha = $_GET['fecha'];  $id_vacante = $_GET['id_vacante'];
	$accion = $_GET['accion'];
    $descripcion= $_GET['descripcion'];
    $lugar = $_GET['lugar'];
    $salario = $_GET['salario'];
	$horario = $_GET['horario'];
    $fecha = $_GET['fecha'];
    $escolaridad = $_GET['escolaridad'];
	$experiencia = $_GET['experiencia'];
	$contacto = $_GET['contacto'];
	$contacto_mail = $_GET['contacto_mail'];
	
    
	if ($id_vacante != "") {

		$query_vaca_s = mysql_query("SELECT * FROM vacantes WHERE id_vacante = '$id_vacante'");
		$qry_vaca_s = mysql_fetch_assoc($query_vaca_s);
        $id_vacante = $qry_vaca_s['id_vacante'];
	    $vacante = $qry_vaca_s['vacante'];
		$empresa = $qry_vaca_s['empresa'];
        $descripcion = $qry_vaca_s['descripcion'];
		$lugar = $qry_vaca_s['lugar'];
		$salario = $qry_vaca_s['salario'];
		$horario = $qry_vaca_s['horario'];
        $fecha = $qry_vaca_s['fecha'];
		$escolaridad = $qry_vaca_s['escolaridad'];
		$experiencia = $qry_vaca_s['experiencia'];
		$contacto = $qry_vaca_s['contacto'];    
		$contacto_mail = $qry_vaca_s['contacto_mail'];       
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php
	require_once('sfl_tit.php');

?>

<link type="text/css" href="css/sfl_style.css" rel="stylesheet"/>
<link type="text/css" href="css/menu.css" rel="stylesheet"/>
<script type="text/javascript" src="controller.js"></script>
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/menu.js"></script>

<?php
	require_once('sfl_functions.php');
?>

</head>

<body onload="MM_preloadImages('images/sfl_redes_01a.png','images/sfl_redes_02a.png','images/sfl_redes_03a.png','images/sfl_slide_menu_01a.jpg','images/sfl_slide_menu_02a.jpg','images/sfl_slide_menu_03a.jpg','images/sfl_slide_menu_04a.jpg','images/sfl_slide_menu_05a.jpg','images/sfl_slide_menu_06a.jpg','images/sfl_slide_menu_07a.jpg')">

<?php
	require_once('sfl_head_cv.php');
?>

<?php
	require_once('sfl_menu_01.php');
?>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
  <tr>
    <td>

<?php
	require_once('sfl_menu_02.php');
?>
      </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
    <td width="100%" class="padd_02" valign="top">

 <form name="refe" method="post" action="sfl_vacante_01_.php" enctype="multipart/form-data">

 <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">


<?php if ($accion == 1) { ?>

  <tr>
    <td class="txt08"><b>Error.</b> Alg&uacute;n campo oblgatorio se encuentra vac&iacute;o.</td>
  </tr>


<?php } ?>


<?php if ($accion == 2) { ?>

  <tr>
    <td class="txt08"><b>Gracias.</b> La Vacante se modificó.</td>
  </tr>


<?php } ?>

<?php if ($accion == 3) { ?>



  <tr>
    <td class="txt08"><b>Gracias.</b> La vacante se registro con exito. </td>
  </tr>

<?php  } ?>



  <?php
  	$query_vaca = mysql_query("SELECT * FROM vacantes where id_vacante = '$id_vacante'");
	$exist_vaca = mysql_num_rows($query_vaca);

?>
        <!-- query a BD referencia-->
              <table  align="center" width="70%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
           

<?php
	if ($exist_vaca > 0) {
		$qry_vaca = mysql_fetch_assoc($query_vaca);
            $i = 0;
			$x = 0;
			do {
 				?>
                <tr>
                 
                  <td class="txt06a" valign="middle" >Vacante:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['vacante']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Empresa:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['empresa']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Descripcion:</td><tr></tr>
				  <td class="txt06c"  ><?php echo $qry_vaca['descripcion']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Zona a Laborar:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['lugar']; ?></td><tr></tr>
				  <td class="txt06a" valign="middle" >Salario:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['salario']; ?></td><tr></tr>
				  <td class="txt06a" valign="middle" >Horario:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['horario']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Fecha Publicación:</td><tr></tr>
				  <td class="txt06c" ><?php echo $qry_vaca['fecha']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Escolaridad:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['escolaridad']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Experiencia:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['experiencia']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >Contacto:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['contacto']; ?></td><tr></tr>
                  <td class="txt06a" valign="middle" >contacto_mail:</td><tr></tr>
				  <td class="txt06c"><?php echo $qry_vaca['contacto_mail']; ?></td><tr></tr>
               
			      </tr>
                <?php
			$i ++;
			$x ++;
			} while ($qry_vaca = mysql_fetch_assoc($query_vaca));
			  $rows = mysql_num_rows($query_vaca);
			  if($rows > 0) {
				  mysql_data_seek($query_vaca, 0);
				  $qry_vaca = mysql_fetch_assoc($query_vaca);
			  }

	}else{
?>
              <tr></tr>
<?php
	}
?>
       </table>
            <table align="center" width="600" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
             <td align="center">
                 
				  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
			  
             </td>
          </table>
     </td>
      </tr>
     </table>
  </form>

    </td>
  </tr>
  <tr>
    <td class="padd_02" valign="top">&nbsp;</td>
  </tr>
</table>
<?php
	require_once('sfl_footer.php');
?>

</body>
</html>
