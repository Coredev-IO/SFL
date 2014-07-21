<?php

	$error = $_GET['error'];
	$c_nombre = $_GET['c_nombre'];
	$c_email = $_GET['c_email'];
	$c_tel = $_GET['c_tel'];
	$cia = $_GET['cia'];
	$asunto = $_GET['asunto'];
	$mns = $_GET['mns'];

	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php
	require_once('sfl_tit.php');
?>

<link type="text/css" href="css/sfl_style.css" rel="stylesheet" />
<link type="text/css" href="css/menu.css" rel="stylesheet" />
<script type="text/javascript" src="controller.js"></script>
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/menu.js"></script>

<?php
	require_once('sfl_functions.php');
?>

</head>

<body onload="MM_preloadImages('images/sfl_redes_01a.png','images/sfl_redes_02a.png','images/sfl_redes_03a.png','images/sfl_slide_menu_01a.jpg','images/sfl_slide_menu_02a.jpg','images/sfl_slide_menu_03a.jpg','images/sfl_slide_menu_04a.jpg','images/sfl_slide_menu_05a.jpg','images/sfl_slide_menu_06a.jpg','images/sfl_slide_menu_07a.jpg')">

<?php
	require_once('sfl_head.php');
?>

<?php
	require_once('sfl_menu_01.php');
?>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/sfl_head_int_09.jpg" width="900" height="180" border="0"></td>
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
    <td class="padd_05 txt09a" valign="top">Puntos de Venta</td>
  </tr>
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" class="txt06"><strong>En Sales Force Leasing Group contamos con la  metodolog&iacute;a y pr&aacute;cticas m&aacute;s eficaces para el impulso de su negocio y el  blindaje de sus recetas&nbsp; en Punto de  Venta.</strong></td>
        </tr>
        <tr>
          <td height="40" colspan="3" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td width="367" class="txt03" valign="top">Nuestros procesos y  experiencia &uacute;nica en Punto de Venta han sido exportados a&nbsp; 23 pa&iacute;ses de Am&eacute;rica Latina para impulsar las  ventas&nbsp; y posicionar las marcas de  nuestros Socios Comerciales de forma exitosa en farmacias de cadena,  independientes, autoservicios y tiendas departamentales.<br />
            <br />
            Las Fuerzas de Ventas  de Sales Force Leasing Group no s&oacute;lo garantizan la disponibilidad de sus  productos en el anaquel sino que impulsan de manera &eacute;xitosa su desplazamiento.
          </td>
          <td width="40" class="txt03"><img src="images/spacer.gif" width="20" height="1" border="0"></td>
          <td width="300" class="txt03 padd_l border_v_l_01" valign="top">A trav&eacute;s de merchandising y trabajo con el farmac&eacute;utico, nuestros  promotores y representantes de ventas garantizan la colocaci&oacute;n, disponibilidad  y visibilidad de sus productos en punto de venta (SELL IN).<br />
            <br />
          Nuestras demostradoras, enfermeras, y consejeras&nbsp; impulsan de manera exitosa su desplazamiento  (SELL OUT) mediante pr&aacute;cticas efectivas de abordaje y comunicaci&oacute;n de  beneficios al consumidor.</td>
        </tr>
      </table>
      
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
