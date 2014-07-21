<?php

	$accion = $_GET['accion'];

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
    <td><img src="images/sfl_head_int_14.jpg" width="900" height="180" border="0"></td>
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
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
</table>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="223" class="padd_02" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="txt05">Int&eacute;grate a Nuestro Equipo</td>
      </tr>
      <tr>
        <td class="txt05"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
      </tr>
    </table>
    
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td class="menu01"><a href="javascript:history.back(1)" class="txt04">REGRESAR</a></td>
      </tr>
    </table>
    
    </td>
    <td width="677" class="padd_02" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="130%" colspan="3" class="txt06"><strong>Gracias. Su CV fue ingresado a nuestra base de candidatos.</strong></td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="txt03">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="txt03"><strong>Sales Force Leasing Group es una excelente fuente de oportunidades de trabajo</strong>, ya que constantemente estamos conformando equipos de ventas en diferentes proyectos en la industria farmac&eacute;utica.</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="txt03">&nbsp;</td>
      </tr>
      </table>

    <table width="50%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03" align="center">
      <tr>
        <td colspan="2"><span class="txt06"><b>Datos de acceso:</b></span></td>
        </tr>
      <tr>
        <td>Usuario:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Contrase&ntilde;a:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      </table>

    </td>
  </tr>
</table>

<?php
	require_once('sfl_footer.php');
?>

</body>
</html>
