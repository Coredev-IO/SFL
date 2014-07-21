<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $id_cuenta = $_GET['id_cuenta'];

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
	require_once('sfl_head_cv.php');
?>

<?php
	require_once('sfl_menu_01cv.php');
?>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
  <tr>
    <td>

<?php
//	require_once('sfl_menu_02.php');
?>

    </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>

<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class="bg_09 txt03">
    <tr></tr><th class="txt09">Areas de Experiencia</th><tr></tr>
  <form name="new_cv" action="sfl_cv_07_.php" method="post" enctype="multipart/form-data">

      <?php if ($accion == 1) { ?>
      <tr></tr>
        <td colspan="2"><span class="txt08"><b>( * ) Algun campo obligatorio esta vacio;.</b></span></td>
        
      <?php } ?>
            <td>
		   <input type="checkbox" name="area_exp[]" value="sin_exp"> Sin experiencia<br>	
          <input type="checkbox" name="area_exp[]" value="Visita de Farmacia">Visita de Farmacia<br>
          <input type="checkbox" name="area_exp[]" value="Negociaciones con Farmacia"> Negociaciones con Farmacia<br>
          <input type="checkbox" name="area_exp[]" value="Promocion y punto de venta"> Promocion y punto de venta<br>
          <input type="checkbox" name="area_exp[]" value="Realizacion de trasnfers">Realizacion de trasnfers<br>
          <input type="checkbox" name="area_exp[]" value="Actividades de mercadeo (merchandising)">Actividades de mercadeo (merchandising)<br>
          <input type="checkbox" name="area_exp[]" value=" Negociacion de espacios en punto de venta"> Negociacion de espacios en punto de venta<br>
		 		
           <br><samp class="menu02">**Conocimiento e interpretación de auditorias**</samp><br><br>
		    <input type="checkbox" name="auditoria[]" value="sin_exp">Sin Experiencia<br>
   		    <input type="checkbox" name="auditoria[]" value="ATV">ATV<br>
            <input type="checkbox" name="auditoria[]" value="DDD"> DDD<br>
		    <input type="checkbox" name="auditoria[]" value="INTE">INTE<br>
            <input type="checkbox" name="auditoria[]" value="Auditpharma"> Auditpharma<br>  
				
		  <br ><samp class="menu02">**Canales trabajados**</samp><br><br>
		  <input type="checkbox" name="canales[]" value="sin_exp"> Sin Experiencia<br>
          <input type="checkbox" name="canales[]" value="Consultorios y hospitales">Consultorios y hospitales<br>
          <input type="checkbox" name="canales[]" value="punto de venta(Cadena, Autoservicios e independientes)"> punto de venta(Cadena, Autoservicios e independientes)<br>
          <input type="checkbox" name="canales[]" value="Cuentas Clave Públicas"> Cuentas Clave Públicas<br>
          <input type="checkbox" name="canales[]" value=" Cuentas Clave Privadas"> Cuentas Clave Privadas<br>
          <input type="checkbox" name="canales[]" value=" Realización y/o apoyo en inventario"> Realización y/o apoyo en inventarios<br>
          <input type="checkbox" name="canales[]" value="Manejo de material POP"> Manejo de material POP<br>
          <input type="checkbox" name="canales[]" value="Aborde en punto de venta"> Aborde en punto de venta<br>
          <input type="checkbox" name="canales[]" value="Impulso de CPM´s(Consumos promedios Mínimos)"> Impulso de CPM´s(Consumos promedios Mínimos)<br>
          <input type="checkbox" name="canales[]" value="promocion de productos y Servicios"> promocion de productos y Servicios<br>
          
           </td>
             
            <tr></tr> <td>&nbsp;</td><tr></tr><td align="center">
                  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
				  <input type="submit" name="submit" value="Continuar" class="form03" />&nbsp;
				  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">

         </td>
          </table>

     </td>
      </tr>
     </table>
  </form>

    </td>
  </tr>
  <tr>
    <td class="padd_02" valign="top">&nbsp;</td>
  </tr>
</table>

<?php
	//require_once('sfl_footer.php');
?>

</body>
</html>
