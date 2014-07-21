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
    <td><img src="images/sfl_head_int_13.jpg" width="900" height="180" border="0"></td>
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
    <td class="padd_05 txt09a" valign="top">Nuestra Propuesta Integral</td>
  </tr>
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt03"><p>Pone a su disposici&oacute;n  una amplia gama de Soluciones que maximizan la productividad y rentabilidad de  su Fuerza de Ventas.</p></td>
        </tr>
        <tr>
          <td height="40" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03">
            
            <table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td width="300">
                  
                  <table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><a href="sfl_talento_com.php"><img src="images/sfl_ico_03b.jpg" width="200" height="45" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="menu01" align="center"><a href="sfl_talento_com.php" class="txt04d">ATRACCI&Oacute;N Y SELECCION DE TALENTO COMERCIAL</a></td>
                    </tr>
                  </table>
                  
                </td>
                <td width="100"><img src="images/spacer.gif" width="57" height="1" border="0"></td>
                <td width="300">
                  
                  <table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><a href="sfl_capacitacion.php"><img src="images/sfl_ico_01b.jpg" width="200" height="45" border="0"></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="menu01" align="center"><a href="sfl_capacitacion.php" class="txt04d">CAPACITACI&Oacute;N FORMACI&Oacute;N Y DESARROLLO</a></td>
                    </tr>
                  </table>
                  
                </td>
              </tr>
              <tr>
                <td colspan="3"><img src="images/spacer.gif" width="1" height="50" border="0"></td>
              </tr>
              <tr>
                <td>
                  
                  <table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><a href="sfl_productividad.php"><img src="images/sfl_ico_02b.jpg" width="200" height="47" border="0"></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="menu01" align="center"><a href="sfl_productividad.php" class="txt04d">EFECTIVIDAD DE FUERZAS DE VENTAS</a></td>
                    </tr>
                  </table>
                  
                </td>
                <td>&nbsp;</td>
                <td>
                  
                  <table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><a href="sfl_estrategia.php"><img src="images/sfl_ico_04b.jpg" width="200" height="47" /></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="menu01" align="center"><a href="sfl_estrategia.php" class="txt04d">CONSULTOR&Iacute;A EN ESTRATEGIA COMERCIAL Y MARKETING</a></td>
                    </tr>
                  </table>
                  
                </td>
              </tr>
              <tr>
                <td colspan="3"><img src="images/spacer.gif" width="1" height="50" border="0"></td>
              </tr>
              <tr>
                <td>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td align="center"><a href="sfl_reporte.php" class="decora_01"><img src="images/sfl_ico_05b.jpg" width="132" height="39" border="0">&nbsp;&nbsp;<img src="images/sfl_ico_06b.jpg" width="149" height="42" border="0"></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="menu01" align="center"><a href="sfl_reporte.php" class="txt04d">SISTEMAS DE REPORTE Y DESEMPE&Ntilde;O DE FUERZAS DE VENTAS</a></td>
                    </tr>
                  </table>
                  
                </td>
                <td>&nbsp;</td>
                <td>
                  
                  <table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td><a href="sfl_complementarias.php"><img src="images/sfl_ico_07b.jpg" width="200" height="47" /></a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="menu01" align="center"><a href="sfl_estrategia.php" class="txt04d">SOLUCIONES COMPLEMENTARIAS</a></td>
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
