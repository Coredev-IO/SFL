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
    <td class="padd_05 txt09a" valign="top">Beneficios</td>
  </tr>
  <tr>
    <td class="padd_05" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt03"><p><strong>Nuestros Socios Comerciales se benefician con nuestros servicios de la siguiente manera:</strong></p>
            <ul>
              <li>&Oacute;ptimo Retorno de la inversi&oacute;n en su Fuerza de Ventas.</li>
              <li>Crecimiento de&nbsp; ventas a trav&eacute;s de una mayor penetraci&oacute;n de mercados geogr&aacute;ficos y/o de nuevas &aacute;reas terap&eacute;uticas.</li>
              <li>&Oacute;ptimo despliegue de Fuerzas de Ventas en base a audiencias objetivo.</li>
              <li>Equipos de Ventas especializados por canal y tipo de producto.</li>
              <li>Impulso de sus ventas a trav&eacute;s de canales complementarios y/o alternos</li>
              <li>Manejo estrat&eacute;gico del Headcount de Operaciones Comerciales</li>
              <li>Flexibilidad para responder a cambios en el mercados</li>
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
