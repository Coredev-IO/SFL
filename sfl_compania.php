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
          <td width="45%" class="txt01b" valign="top">
            
            <strong>Sales Force Leasing Group</strong> es&nbsp; el Socio Estrat&eacute;gico de la Industria farmac&eacute;utica y del cuidado de&nbsp; la salud en la creaci&oacute;n y gesti&oacute;n&nbsp; de Fuerzas de Ventas de Alto Impacto y Soluciones Integrales que brindan M&aacute;xima Productividad y Rentabilidad.
            
          </td>
          <td><img src="images/spacer.gif" width="30" height="1" border="0"></td>
          <td width="55%" class="txt03 padd_l border_v_l_01" valign="top">
            
            <strong>Somos Especialistas en fuerzas de ventas de m&aacute;xima productividad y rentabilidad&nbsp; y en el desarrollo e implementaci&oacute;n de estrategias comerciales contundentes.<br />
            </strong><br />
            Desde 1995, apoyamos a nuestros Socios Comerciales en la&nbsp; generaci&oacute;n de demanda y venta de sus productos en toda la cadena de valor farmac&eacute;utica.
            
          </td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/spacer.gif" width="1" height="40" border="0"></td>
        </tr>
      </table>
      
      <table width="100%" border="0" cellspacing="1" cellpadding="4" class="txt03">
        <tr>
          <td height="40" class="bg_01 padd_l" valign="middle"><strong>NUESTRO &Eacute;XITO SE BASA EN:</strong></td>
        </tr>
        <tr>
          <td height="120" class="bg_01" valign="middle"><ul>
            <li>Extensa visi&oacute;n de negocio y profunda experiencia en el mercado farmac&eacute;utico.</li>
            <li>Atenci&oacute;n personalizada hacia nuestros Socios Comerciales y Asociados de Proyectos con un profundo sentido de productividad y eficiencia.</li>
            <li>Amplia experiencia en la atracci&oacute;n, selecci&oacute;n y gesti&oacute;n de talento comercial.</li>
            <li>Procesos estandarizados y eficientes que garantizan una &oacute;ptima operatividad.</li>
            <li>Pr&aacute;cticas profesionales de excelencia basadas en la &eacute;tica y la transparencia.</li>
          </ul></td>
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
