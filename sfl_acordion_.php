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

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="css/jquery-1.9.1.js"></script>
<script src="css/jquery-ui.js"></script>

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
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
</table>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="200" class="padd_02" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="txt05">Compa&ntilde;&iacute;a</td>
      </tr>
      <tr>
        <td class="txt05"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
      </tr>
    </table>
    
    <table width="100%" border="0" cellspacing="1" cellpadding="4">
      <tr>
        <td class="bg_01 txt06"><a href="#" class="txt06">Misi&oacute;n | visi&oacute;n<br />
          Principios corporativos</a></td>
      </tr>
      <tr>
        <td class="bg_01 txt06"><a href="#" class="txt06">Socios Comerciales</a></td>
      </tr>
      <tr>
        <td class="bg_01 txt06"><a href="#" class="txt06">Beneficios</a></td>
      </tr>
    </table>
    
    </td>
    <td class="padd_02" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="txt01">
        
<div id="accordion">

    <h3>Misi&oacute;n</h3>
    <div>
        <p>Crear y gestionar <b>Fuerzas de Ventas de Alto Impacto enrquecidas con Soluciones Integrales</b> que garanticen resultados a nuestros Socios Comerciales y contribuyan al logro de sus objetivos de ventas y rentabilidad.</p>
    </div>
    
    <h3>Visi&oacute;n</h3>
    <div>
        <p>Ser parte del futuro como una fuente de empleo y desarrollo profesional del talento comercial; as&iacute; como generador de competencias, pr&aacute;cticas y modelos innovadores que generen un <b>Alto Impacto en Ventas</b>.</p>
    </div>
    
    <h3>Principios Corporativos</h3>
    <div>
        <p>En <b>Sales Force Leasing Group</b>, la forma en que tomamos decisiones y actuamos entre Asociados y con nuestros Socios Comerciales se rige a trav&eacute;s de los siguientes principios:</p>
        <ul>
        <li>Integridad</li>
        <li>Calidad</li>
        <li>Compromiso</li>
        <li>Orientaci&oacute;n y Creaci&oacute;n de Valor a Nuestros Socios Comerciales</li>
        <li>Confidencialidad</li>
        <li>Respeto</li>
        <li>Competitividad</li>
        <li>Adaptabilidad</li>
        </ul>
        <p><b>El cumplimiento de nuestros Principios Corporativos nos convierte en una empresa &uacute;nica.</b></p>
    </div>

</div>
        
        </td>
      </tr>
      <tr>
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
