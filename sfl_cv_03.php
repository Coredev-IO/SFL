<?php
    require_once('sfl_fch_hra.php');
    require_once('sfl_security_id_.php');
	
	$id_cuenta = $_GET['id_cuenta'];
    $id_del_mun= $_GET['id_del_mun'];
	$accion = $_GET['accion'];
    
	$tel_particular = $_GET['tel_particular'];
    $tel_movil = $_GET['tel_movil'];
    $tel_oficina = $_GET['tel_oficina'];
    $tel_reca = $_GET['tel_reca'];
    $twitter = $_GET['twitter'];
    $facebook = $_GET['facebook'];
    $linkedin = $_GET['linkedin'];
 
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	
	 if ($accion_up == 5) { 
	    $query_aspirante_s = mysql_query("SELECT * FROM cat_aspirante WHERE id_cuenta = '$id_cuenta'");
	    $qry_aspirante_s = mysql_fetch_assoc($query_aspirante_s);
		$rfc = $qry_aspirante_s['rfc'];
		$curp = $qry_aspirante_s['curp'];	 
	    $no_imss= $qry_aspirante_s['no_imss'];
		$no_clinica= $qry_aspirante_s['no_clinica'];
		$tel_particular= $qry_aspirante_s['tel_particular'];
		$tel_movil= $qry_aspirante_s['tel_movil'];
		$tel_oficina= $qry_aspirante_s['tel_oficina'];
		$tel_rec= $qry_aspirante_s['tel_rec'];
		$twitter= $qry_aspirante_s['twitter'];
		$facebook= $qry_aspirante_s['facebook'];
	    $linkedin= $qry_aspirante_s['linkedin'];
	  }    
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
      <a href="sfl_cv_02a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-primary btn-100"><i class='fa fa-phone'></i> Datos de Identificaci&oacute;n</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-home'></i> Referencias Personales</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-thumbs-up'></i> Perfilamiento</a>
      <a href="sfl_cv_06.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cog'></i> Industria</a>
      <a href="sfl_cv_06a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-child'></i> Posici&oacute;n</a>
      <a href="sfl_cv_06b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cubes'></i> L&iacute;neas y Especialidades</a>
      <a href="sfl_cv_06c.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cab'></i> &Aacute;reas de Expericia I</a>
      <a href="sfl_cv_07.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-graduation-cap'></i> Historial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades Tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title"> Datos de Identificaci&oacute;n </div>

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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_03_.php" method="post" enctype="multipart/form-data" >
          <!-- Termina Errores -->

          <div class="form-group">
            <label for="calle" class="col-sm-4 control-label">RFC : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="rfc" size="30" maxlength="50" <?php if ($rfc != "") { ?>value="<?php echo $rfc; ?>"<?php } ?>  class="form-control" placeholder='RFC ' autofocus>

            </div>
          </div>


          <div class="form-group">
            <label for="CURP" class="col-sm-4 control-label">CURP : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="curp" size="30" maxlength="50" <?php if ($curp != "") { ?>value="<?php echo $curp; ?>"<?php } ?>  class="form-control" placeholder='CURP '>

            </div>
          </div>


          <div class="form-group">
            <label for="No.DeAfilicacion" class="col-sm-4 control-label">No. de afiliación al IMSS : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="no_imss" size="30" maxlength="50" <?php if ($no_imss != "") { ?>value="<?php echo $no_imss; ?>"<?php } ?>  class="form-control" placeholder='No. de afiliación al IMSS '>

            </div>
          </div>



          <div class="form-group">
            <label for="No.deClinica" class="col-sm-4 control-label">No. de Clínica : </label>
              <div class="col-sm-8">
                
              <input onkeypress="return event.keyCode!=13" type="text" name="no_clinica" size="18" maxlength="50"  <?php if ($no_clinica != "") { ?>value="<?php echo $no_clinica; ?>"<?php } ?> class="form-control" placeholder="No. de Clínica" >


            </div>
          </div>


           <div class="box-title"> Datos de Contacto </div>


          <div class="form-group">
            <label for="TelefonoParticular" class="col-sm-4 control-label">Teléfono Particular : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="tel_particular" size="30" maxlength="50" <?php if ($tel_particular != "") { ?>value="<?php echo $no_clinica; ?>"<?php } ?>  class="form-control" placeholder='Teléfono Particular ' >

            </div>
          </div>



          <div class="form-group">
            <label for="TelefonoMovil" class="col-sm-4 control-label">Teléfono M&oacute;vil : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="tel_movil" size="30" maxlength="50" <?php if ($tel_movil != "") { ?>value="<?php echo $tel_movil; ?>"<?php } ?> class="form-control" placeholder='Teléfono M&oacute;vil ' >

            </div>
          </div>



          <div class="form-group">
            <label for="TelefonoOficina" class="col-sm-4 control-label">Teléfono Oficina : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="tel_oficina" size="30" maxlength="50" <?php if ($tel_oficina != "") { ?>value="<?php echo $tel_oficina; ?>"<?php } ?> class="form-control" placeholder='Teléfono Oficina ' >

            </div>
          </div>




          <div class="form-group">
            <label for="TelefonoRecados" class="col-sm-4 control-label">Teléfono Recados : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="tel_reca" size="30" maxlength="50" <?php if ($tel_rec != "") { ?>value="<?php echo $tel_rec; ?>"<?php } ?>   class="form-control" placeholder='Teléfono Recados ' >

            </div>
          </div>


          <div class="form-group">
            <label for="UsuarioTwitter" class="col-sm-4 control-label">Usuario Twitter : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="twitter" size="30" maxlength="50" <?php if ($twitter != "") { ?>value="<?php echo $twitter; ?>"<?php } ?> class="form-control" placeholder='Usuario Twitter ' >

            </div>
          </div>



          <div class="form-group">
            <label for="UsuarioFacebook" class="col-sm-4 control-label">Usuario Facebook : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="facebook" size="30" maxlength="50" <?php if ($facebook != "") { ?>value="<?php echo $facebook; ?>"<?php } ?>  class="form-control" placeholder='Usuario Facebook ' >

            </div>
          </div>




          <div class="form-group">
            <label for="UsuarioLinkdin" class="col-sm-4 control-label">Usuario Linkedin : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="linkedin" size="30" maxlength="50" <?php if ($linkedin != "") { ?>value="<?php echo $linkedin; ?>"<?php } ?> class="form-control" placeholder='Usuario Linkedin ' >

            </div>
          </div>



          

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              <button type="button" name="Regresar" value="Regresar" class="btn btn-default fa fa-reply" onClick="javascript:window.history.back()">&nbsp; Regresar</button>
              <button type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default fa fa-trash-o"> Limpiar</button>
              <button type="submit" class="btn btn-primary fa fa-share" > Continuar</button>
              <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
              <input type="hidden" name="accion" value="<?php echo $accion; ?>">
            </div>
          </div>


   </div>
    
  </div>
  
</div>

<?php
	//require_once('sfl_footer.php');
?>

</body>
</html>
