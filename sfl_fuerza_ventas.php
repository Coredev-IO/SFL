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
    <td class="padd_05 txt09a" valign="top">Fuerza de Ventas de Alto Impacto</td>
  </tr>
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="txt03"><span class="txt06a">Nuestras Fuerzas de Ventas de Alto Impacto se enfocan en la&nbsp; generaci&oacute;n de demanda y venta a trav&eacute;s de toda la cadena de valor farmac&eacute;utica.</span><br />
            <br />
            Impulsamos la venta y el posicionamiento de sus marcas desde los mayoristas y distribuidores, hasta consultorios, hospitales y puntos de venta en el sector P&uacute;blico y Privado de M&eacute;xico.
          </td>
        </tr>
        <tr>
          <td height="40">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt06a">Tenemos un amplio enfoque y experiencia en la promoci&oacute;n y venta de:</td>
        </tr>
        <tr>
          <td class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt03">
            
            <table width="100%" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td width="30%" valign="top">
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="3" class="padd_02 border_v_l_01">
                        
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td colspan="2" valign="middle" class="menu02"><strong>PRODUCTOS</strong></td>
                          </tr>
                          <tr>
                            <td class="menu02" align="center" valign="middle">&nbsp;</td>
                            <td class="menu02">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Farmac&eacute;uticos de prescripci&oacute;n (Rx)</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Libre acceso (OTC)</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Mixtos (OTX)</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Biol&oacute;gicos</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Dispositivos m&eacute;dicos</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Gen&eacute;ricos y gen&eacute;ricos de marca</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Nutricionales</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Alimentos funcionales</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Para el Cuidado e higiene personal</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Dermocosm&eacute;tica</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Perfumer&iacute;a y belleza</td>
                          </tr>
                        </table>
                        
                      </td>
                    </tr>
                  </table>
                  
                </td>
                <td><img src="images/spacer.gif" width="20" height="1" border="0"></td>
                <td width="30%" valign="top">
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="3" class="padd_02 border_v_l_01">
                        
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td colspan="2" valign="middle" class="menu02"><strong>A TRAV&Eacute;S DE:</strong></td>
                          </tr>
                          <tr>
                            <td class="menu02" align="center" valign="middle">&nbsp;</td>
                            <td class="menu02">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Representantes Y Gerentes de Visita&nbsp; M&eacute;dica</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Representantes de Ventas</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Promotores y Demostradoras en Punto de Venta</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Consejeras de Salud y Belleza</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Enfermeras</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">KAMs del sector p&uacute;blico y privado</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Representantes de Telemarketing</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">MSL&acute;s (Medical Science Liasons)</td>
                          </tr>
                        </table>
                        
                      </td>
                    </tr>
                  </table>
                  
                </td>
                <td><img src="images/spacer.gif" width="20" height="1" border="0"></td>
                <td width="30%" valign="top">
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="3" class="padd_02 border_v_l_01">
                        
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td colspan="3" valign="middle" class="menu02"><strong>EN:</strong></td>
                          </tr>
                          <tr>
                            <td class="menu02" align="center" valign="middle">&nbsp;</td>
                            <td class="menu02">&nbsp;</td>
                            <td class="menu02">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Consultorios y Hospitales</td>
                            <td class="menu02" align="center"><a href="sfl_consultorios.php" class="decora_01"><img src="images/sfl_bot_more.png" width="18" height="18" border="0"></a></td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Punto de Venta (Farmacias de Cadena, Independientes,&nbsp; Autoservicios y Tiendas departamentales)</td>
                            <td class="menu02" align="center"><a href="sfl_puntodeventa.php" class="decora_01"><img src="images/sfl_bot_more.png" width="18" height="18" border="0"></a></td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Cuentas Clave P&uacute;blicas y Privadas (Instituciones, Mayoristas, Distribuidores y Retail)</td>
                            <td class="menu02" align="center"><a href="sfl_cuentasclave.php" class="decora_01"><img src="images/sfl_bot_more.png" width="18" height="18" border="0"></a></td>
                          </tr>
                          <tr>
                            <td width="11" class="menu02" align="center" valign="middle">&bull;</td>
                            <td class="menu02">Pacientes</td>
                            <td class="menu02" align="center"><a href="sfl_pacientes.php" class="decora_01"><img src="images/sfl_bot_more.png" width="18" height="18" border="0"></a></td>
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
          <td class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td class="txt01b padd_02 bg_01">Podemos gestionar su Fuerza de Ventas desde un nivel administrativo hasta uno operativo donde nos encargamos del logro de sus objetivos de&nbsp; ventas y participaci&oacute;n de mercado.</td>
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
