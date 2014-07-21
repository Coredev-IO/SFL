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
    <td><img src="images/sfl_head_int_02.jpg" width="900" height="180" border="0"></td>
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
    <td class="padd_05 txt09a" valign="top">Atracci&oacute;n y Selecci&oacute;n de Talento Comercial</td>
  </tr>
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt06">
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="txt06"><strong>Como su Socio de Atracci&oacute;n  y Selecci&oacute;n de Talento, nuestro objetivo es darle confianza de que el proceso  de atracci&oacute;n y selecci&oacute;n de talento comercial esta&#769; en manos expertas.</strong></td>
                <td width="250" align="right"><img src="images/sfl_ico_03b.jpg" width="200" height="45" border="0" align="right"></td>
              </tr>
            </table>
            
          </td>
        </tr>
        <tr>
          <td height="40" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03"><p>En Sales Force Leasing  Group contamos con reclutadores expertos en la industria farmac&eacute;utica y en las  posiciones clave que se requieren.<br />
            <br />
            Hemos dise&ntilde;ado m&eacute;todos  y procedimientos estandarizados de atracci&oacute;n, evaluaci&oacute;n y&nbsp; selecci&oacute;n de talento que garantizan la  alineaci&oacute;n de nuestros candidatos con las competencias y experiencia requeridas  del puesto a cubrir.<br />
            <br />
          Nuestro equipo, metodolog&iacute;as y perfiles basados en competencias, nos  convierten en un Socio excepcional para las empresas farmac&eacute;uticas y sus  departamentos de personal.</p></td>
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
