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
	// require_once('sfl_head_cv.php');
?>

<?php
	// require_once('sfl_menu_01cv.php');
?>

<!-- <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
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
</table> -->


                    <br><br>
                    <div class="container">
                      <div class="row">
                               <div class="col-md-8 "><img src="images/talent.jpg", height="60px"></div>
                               <div class="col-md-4 "><img src="images/leasing.jpg", height="60px"></div>
                      </div>
                    </div>






<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-3">
    <div class="box-menu">
      <a href="sfl_cv_02.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-user'></i> Datos Personales</a>
      <a href="sfl_cv_02a.php" type="button" class="btn btn-default btn-100"disabled><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-phone'></i> Datos de Identificaci&oacute;n</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-home'></i> Referencias Personales</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-thumbs-up'></i> Perfilamiento</a>
      <a href="sfl_cv_06.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cog'></i> Industria</a>
      <a href="sfl_cv_06a.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-child'></i> Posici&oacute;n</a>
      <a href="sfl_cv_06b.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-cubes'></i> L&iacute;neas y Especialidades</a>
      <a href="sfl_cv_06c.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cab'></i> &Aacute;reas de Expericia I</a>
      <a href="sfl_cv_07.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-graduation-cap'></i> Historial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades Tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title letra1">Areas de Experiencia II</div>



      <!-- Errores-->
          <?php if ($accion == 1) { ?>
                      
            <div class="alert alert-danger alert-dismissible" role="alert">
              <span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute;.</b></span>
            </div>
                             
          <?php } ?>
          <?php if ($accion_up == 5) { ?>
        
            <div class="alert alert-info alert-dismissible" role="alert">
              <span><b>( * ) Actualice sus datos  y de Clic en Continuar.</b></span>
            </div>
                              
          <?php } ?>
      <div class="box-formulario">
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_07_.php" method="post" enctype="multipart/form-data" >
          <!-- Termina Errores -->








<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">


      <?php if ($accion == 1) { ?>
      <tr></tr>
        <td colspan="2"><span class="txt08"><b>( * ) Algun campo obligatorio esta vacio;.</b></span></td>
        
      <?php } ?>
            <td>
              <br ><samp class="menu02"> Canales trabajados / Clientes Visitados</samp><br><br>
      <input type="checkbox" name="canales[]" value="sin_exp"> Sin Experiencia<br>
          <input type="checkbox" name="canales[]" value="Consultorios y hospitales"> Consultorios y hospitales (M&eacute;dicos)<br>
          <input type="checkbox" name="canales[]" value="punto de venta(Cadena, Autoservicios e independientes)"> Punto de venta(Farmacias de Cadena, Autoservicios e independientes)<br>
          <input type="checkbox" name="canales[]" value="Cuentas Clave Públicas"> Cuentas Clave Públicas<br>
          <input type="checkbox" name="canales[]" value=" Cuentas Clave Privadas"> Cuentas Clave Privadas<br>
          <input type="checkbox" name="canales[]" value=" Tiendas Departamentales"> Tiendas Departamentales<br>
          <!-- <input type="checkbox" name="canales[]" value=" Realización y/o apoyo en inventario"> Realización y/o apoyo en inventarios<br>
          <input type="checkbox" name="canales[]" value="Manejo de material POP"> Manejo de material POP<br>
          <input type="checkbox" name="canales[]" value="Aborde en punto de venta"> Aborde en punto de venta<br>
          <input type="checkbox" name="canales[]" value="Impulso de CPM´s(Consumos promedios Mínimos)"> Impulso de CPM´s(Consumos promedios Mínimos)<br>
          <input type="checkbox" name="canales[]" value="promocion de productos y Servicios"> promocion de productos y Servicios<br>
           -->

           <br><samp class="menu02"> Habilidades </samp><br><br>
		   <input type="checkbox" name="area_exp[]" value="sin_exp"> Sin experiencia<br>	
          <input type="checkbox" name="area_exp[]" value="Visita de Farmacia"> Visita de Farmacia<br>
          <input type="checkbox" name="area_exp[]" value="Negociaciones con Farmacia"> Negociaciones con Farmacia<br>
          <input type="checkbox" name="area_exp[]" value="Promocion y punto de venta"> Promocion y punto de venta<br>
          <input type="checkbox" name="area_exp[]" value="Realizacion de trasnfers"> Realizacion de trasnfers<br>
          <input type="checkbox" name="area_exp[]" value="Actividades de mercadeo (merchandising)"> Actividades de mercadeo (merchandising)<br>
          <input type="checkbox" name="area_exp[]" value=" Negociacion de espacios en punto de venta"> Negociacion de espacios en punto de venta<br>
		 		
           <br><samp class="menu02"> Interpretación de auditorias</samp><br><br>
		    <input type="checkbox" name="auditoria[]" value="sin_exp"> Sin Experiencia<br>
   		    <input type="checkbox" name="auditoria[]" value="ATV"> ATV<br>
            <input type="checkbox" name="auditoria[]" value="DDD"> DDD<br>
		    <input type="checkbox" name="auditoria[]" value="INTE"> INTE<br>
            <input type="checkbox" name="auditoria[]" value="Auditpharma"> Auditpharma (Close Up)<br>  
				
		  
           </td>
             
            <tr></tr> <td>&nbsp;</td><tr></tr><td align="center">
                  <button type="button" name="Regresar" value="Regresar" class="btn btn-default fa fa-reply" onClick="javascript:window.history.back()">&nbsp; Regresar</button>
                  <button type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default fa fa-trash-o"> Limpiar</button>
				  <button type="submit" name="submit" value="Continuar" class="btn btn-primary fa fa-share" />&nbsp; Continuar</button>
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
