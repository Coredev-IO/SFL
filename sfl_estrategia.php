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
    <td><img src="images/sfl_head_int_06.jpg" width="900" height="180" border="0"></td>
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
    <td class="padd_05 txt09a" valign="top">Consultor&iacute;a en Estrategia Comercial y Marketing</td>
  </tr>
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt06">
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="txt06"><strong>Desarrollo de Estrategias Comerciales Contundentes</strong></td>
                <td width="250" rowspan="3" align="right"><img src="images/sfl_ico_04b.jpg" width="200" height="47" border="0" align="right"></td>
              </tr>
              <tr>
                <td class="txt03">&nbsp;</td>
              </tr>
              <tr>
                <td class="txt03">Nuestra experiencia en posiciones comerciales clave y nuestro amplio conocimiento del mercado farmac&eacute;utico nos converte en un aliado muy valioso en la definici&oacute;n de estrategias comerciales Contundentes.</td>
              </tr>
            </table>
            
          </td>
        </tr>
        <tr>
          <td height="40" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03">
          
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="3" class="padd_02">
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="menu02" align="center" valign="middle">&nbsp;</td>
                    <td class="menu02"><strong>REALIZAMOS:</strong></td>
                    </tr>
                  <tr>
                    <td class="menu02" align="center" valign="middle">&nbsp;</td>
                    <td class="menu02">&nbsp;</td>
                    </tr>
                  <tr>
                    <td width="11" class="menu02 padd_t" align="center" valign="top">&bull;</td>
                    <td class="menu02"><p>An&aacute;lisis Situacional y Diagn&oacute;stico considerando:</p>
                      <ul>
                        <li>Mercado actual y potencial</li>
                        <li>Producto</li>
                        <li>Competencia</li>
                        <li>Canales</li>
                        <li>Comunicaci&oacute;n</li>
                      </ul></td>
                    </tr>
                  <tr>
                    <td width="11" class="menu02 padd_t" align="center" valign="top">&bull;</td>
                    <td class="menu02">Establecimiento de Objetivos Prioritarios, Estrat&eacute;gicas y T&aacute;cticas</td>
                    </tr>
                  <tr>
                    <td width="11" class="menu02" align="center" valign="top">&bull;</td>
                    <td class="menu02">Construcci&oacute;n y Desarrollo de Casos de Negocio</td>
                    </tr>
                  <tr>
                    <td width="11" class="menu02" align="center" valign="top">&bull;</td>
                    <td class="menu02"><p>Desarrollo y validaci&oacute;n de:</p>
                      <ul>
                        <li>Segmentaci&oacute;n y Audiencias Objetivo</li>
                        <li>Posicionamiento y Arquitectura de Marca</li>
                        <li>Plataformas de comunicaci&oacute;n
                          <ul>
                            <li>Ejes promocionales basados en beneficios y ventajas competitivas</li>
                            <li>Contenido de materiales promocionales</li>
                            <li>Desarrollo gr&aacute;fico de Materiales promocionales</li>
                            </ul>
                        </li></ul></td>
                    </tr>
                  <tr>
                    <td width="11" class="menu02" align="center" valign="top">&bull;</td>
                    <td class="menu02"><p>Medici&oacute;n de impacto de mensajes clave y materiales promocionales en audiencias objetivo</p>
                      <ul>
                        <li>Grupos de Enfoque</li>
                        <li>Entrevistas a profundidad</li>
                      </ul></td>
                    </tr>
                  </table>
                
                </td>
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
