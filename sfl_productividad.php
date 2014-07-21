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
    <td><img src="images/sfl_head_int_04.jpg" width="900" height="180" border="0"></td>
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
    <td class="padd_05 txt09a" valign="top">Efectividad de Fuerzas de Ventas</td>
  </tr>
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt06">
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="txt06" valign="middle"><strong>Inteligencia Comercial 
                para una M&aacute;xima Productividad y Rentabilidad</strong></td>
                <td width="250" align="right"><img src="images/sfl_ico_02b.jpg" width="200" height="47" border="0" align="right"></td>
              </tr>
            </table>
            
          </td>
        </tr>
        <tr>
          <td height="40" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03"><p>Nuestra divisi&oacute;n, Sales Force Effectiveness,&nbsp; se encuentra totalmente enfocada en optimizar al m&aacute;ximo la productividad y rentabilidad de Fuerzas de Ventas a traves de:</p>
            <ul>
              <li>Definici&oacute;n de dimensi&oacute;n, estructura, despliegue y ruteo de fuerzas de ventas en base a:
                <ul>
                  <li>Universos M&eacute;dicos Objetivo &ndash; Especialidad y volumen de negocio de la categoria de inter&eacute;s.</li>
                </ul>
              </li>
              <ul>
                <li>Perfilamiento y categorizaci&oacute;n de m&eacute;dicos.</li>
                <li>Targeting/audiencia objetivo.<br />
                  <br />
                </li>
              </ul>
              <li>Optimizaci&oacute;n de Ficheros M&eacute;dicos y planes de trabajo (frecuencia). </li>
          </ul>          Evaluaci&oacute;n de conocimiento del eje promocional y diagn&oacute;stico de comunicaci&oacute;n promocional efectiva en campo a la audiencia objetivo.</td>
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
