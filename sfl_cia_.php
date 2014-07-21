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


<!-- <link rel="stylesheet" href="css/jquery-ui.css"> --!>
<!-- <script src="css/jquery-1.9.1.js"></script> --!>
<!-- <script src="css/jquery-ui.js"></script> -->

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
    <td><img src="images/sfl_head_int_01.jpg" width="900" height="180" border="0"></td>
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
    <td class="padd_05 txt09a" valign="top">Compa&ntilde;&iacute;a</td>
  </tr>
  <tr>
    <td class="padd_05" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt06a">Misi&oacute;n</td>
          <td><img src="images/spacer.gif" width="50" height="1" border="0"></td>
          <td class="txt06a">Visi&oacute;n</td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="0" height="10" border="0"></td>
        </tr>
        <tr>
          <td class="txt03">Crear y gestionar <b>Fuerzas de Ventas de Alto Impacto enrquecidas con Soluciones Integrales</b> que garanticen resultados a nuestros Socios Comerciales y contribuyan al logro de sus objetivos de ventas y rentabilidad.</td>
          <td>&nbsp;</td>
          <td class="txt03">Ser parte del futuro como una fuente de empleo y desarrollo profesional del talento comercial; as&iacute; como generador de competencias, pr&aacute;cticas y modelos innovadores que generen un <b>Alto Impacto en Ventas</b>.</td>
        </tr>
        <tr>
          <td height="50" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" class="txt06a">Principios Corporativos</td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="0" height="10" border="0"></td>
        </tr>
        <tr>
          <td colspan="3" class="txt03">En <b>Sales Force Leasing Group</b>, la forma en que tomamos decisiones y actuamos entre Asociados y con nuestros Socios Comerciales se rige a trav&eacute;s de los siguientes principios:</td>
        </tr>
        <tr>
          <td height="30" colspan="3" align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="center" valign="middle"><img src="images/sfl_principios_.png" width="660" height="362" border="0"></td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td class="padd_05" valign="top">&nbsp;</td>
  </tr>
</table>

<?php
	require_once('sfl_footer.php');
?>

</body>
</html>
