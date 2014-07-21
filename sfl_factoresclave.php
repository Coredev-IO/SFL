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
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt06a">Somos especialistas en fuerzas de ventas de m&aacute;xima productividad y rentabilidad  y en el desarrollo e implementaci&oacute;n de estrategias comerciales contundentes.</td>
        </tr>
        <tr>
          <td height="40" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03">Contamos con las competencias, experiencia, procesos y estructura para realizar un gesti&oacute;n integral de sus proyectos comerciales y alcanzar resultados exitosos para su negocio.</td>
        </tr>
        <tr>
          <td height="40" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03">
            
            <table width="100%" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td class="txt03"><b>I.</b></td>
                <td class="txt03 padd_l">Competencias del Mercado, Actores y Din&aacute;mica basadas en la Experiencia</td>
                </tr>
              <tr>
                <td class="txt03">&nbsp;</td>
                <td class="txt03 padd_02">El personal clave de <strong>Sales Force Leasing Group</strong> ha desarrollado sus competencias en posiciones claves de empresas l&iacute;deres de la industria farmac&eacute;utica en las &aacute;reas de <strong>Marketing y Ventas, Efectividad, Capacitaci&oacute;n y Recursos Huamnos</strong> donde han desarrollado y gestionado estrategias comerciales exitosas para productos &eacute;ticos, de consumo, biol&oacute;gicos y dispositivos m&eacute;dicos.</td>
                </tr>
              <tr>
                <td colspan="2" class="txt03">&nbsp;</td>
              </tr>
              <tr>
                <td class="txt03" valign="top"><b>II.</b></td>
                <td class="txt03 padd_l">Procesos eficientes, metodolog&iacute;as de evaluaci&oacute;n de desempe&ntilde;o,&nbsp; y personal especializado que garantizan la gesti&oacute;n administrativa y operativa de Fuerzas de Ventas con los est&aacute;ndares m&aacute;s altos de la industria.</td>
              </tr>
              <tr>
                <td colspan="2" class="txt03">&nbsp;</td>
              </tr>
              <tr>
                <td class="txt03" valign="top"><b>III.</b></td>
                <td class="txt03 padd_l">M&eacute;todos de capacitaci&oacute;n, desarrollo y entrenamiento de Fuerzas de Ventas &uacute;nicos y de aplicaci&oacute;n inmediata con resultados exitosos comprobados en M&eacute;xico y Latino Am&eacute;rica</td>
              </tr>
              <tr>
                <td colspan="2" class="txt03">&nbsp;</td>
              </tr>
              <tr>
                <td class="txt03" valign="top"><b>IV.</b></td>
                <td class="txt03 padd_l">Historial comprobado de pr&aacute;cticas transparentes y auditables en la administraci&oacute;n de Capital Humano especializado en ventas.</td>
              </tr>
              <tr>
                <td colspan="2" class="txt03">&nbsp;</td>
              </tr>
              <tr>
                <td class="txt03" valign="top"><b>V.</b></td>
                <td class="txt03 padd_l">Nivel excepcional de&nbsp; compromiso y atenci&oacute;n a nuestros Socios Comerciales y Asociados de Proyectos.</td>
              </tr>
              </table>
            
          </td>
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
