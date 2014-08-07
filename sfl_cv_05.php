<?php
    require_once('sfl_fch_hra.php');
    require_once('sfl_security_id_.php');
   
  
    $id_cuenta=$_GET['id_cuenta'];
	$accion = $_GET['accion'];
    $lug_nac= $_GET['lug_nac'];
    $genero = $_GET['genero'];
    $edo_civil = $_GET['edo_civil'];
    $auto_prop= $_GET['auto_prop'];
    $auto_esta= $_GET['auto_esta'];
    $mane_carre= $_GET['mane_carre'];
    $dispo_viaj= $_GET['dispo_viaj'];
    $dispo_res= $_GET['dispo_res'];
    
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	
		 if ($accion_up == 5) { 
	    $query_expe_s = mysql_query("SELECT * FROM perf_exp WHERE id_cuenta = '$id_cuenta'");
	    $qry_expe_s = mysql_fetch_assoc($query_expe_s);
		$lug_nac = $qry_expe_s['lug_nac'];
		$genero = $qry_expe_s['genero'];	 
	    $edo_civil= $qry_expe_s['edo_civil'];
		$auto_prop= $qry_expe_s['auto_prop'];
		$auto_esta= $qry_expe_s['auto_esta'];
		$mane_carre= $qry_expe_s['mane_carre'];
		$dispo_viaj= $qry_expe_s['dispo_viaj'];
		$dispo_res= $qry_expe_s['dispo_res'];

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
	// require_once('sfl_menu_02.php');
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
                               <div class="col-md-8 "><img src="images/talent.jpg", height="80px"></div>
                               <div class="col-md-4 "><img src="images/leasing.jpg", height="80px"></div>
                      </div>
                    </div>


<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-3">
    <div class="box-menu">
      <a href="sfl_cv_02.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-user'></i> Datos Personales</a>
      <a href="sfl_cv_02a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-phone'></i> Datos de Indentificaci&oacute;n</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-home'></i> Referencias Personales</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-thumbs-up'></i> Perfilamiento y Experiencia</a>
      <a href="sfl_cv_06.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cog'></i> Industria</a>
      <a href="sfl_cv_06a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-child'></i> Posici&oacute;n</a>
      <a href="sfl_cv_06b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cubes'></i> L&iacute;neas y Especialidades</a>
      <a href="sfl_cv_06c.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cab'></i> &Aacute;reas de Expericia I</a>
      <a href="sfl_cv_07.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-graduation-cap'></i> Historial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title">Perfilamiento y Experiencia</div>



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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_05_.php" method="post" enctype="multipart/form-data" >
          

          
          <div class="form-group">
            <label for="lug_nac" class="col-sm-4 control-label">Lugar de Nacimiento : </label>
            <div class="col-sm-8">
              <input onkeypress="return event.keyCode!=13"  ttype="text" name="lug_nac" size="25" maxlength="30"  <?php if ($lug_nac != "") { ?>value="<?php echo $lug_nac; ?>"<?php } ?> class="form-control" placeholder='Lugar de Nacimiento' autofocus>
            </div>
          </div>
          
          <div class="form-group">
            <label for="genero" class="col-sm-4 control-label">Genero :</label>
            <div class="col-sm-8">
                  <select name="genero" class="form03">
                 <option <?php if ($genero != "") { ?>value="<?php echo $genero; ?>"<?php } ?>><?php echo $genero?> &nbsp;</option>
                 <option value="Hombre">Hombre</option>
                 <option value="Mujer">Mujer</option>
                 </option> </select>
            </div>
          </div>

          <div class="form-group">
            <label for="edo_civil" class="col-sm-4 control-label">Estado Civil:</label>
            <div class="col-sm-8">
                <select name="edo_civil" class="form03">
             <option value=" <?php echo "$edo_civil";?>"> <?php if ($edo_civil != "") { echo "$edo_civil"; } else {echo "&nbsp;";} ?></option>
             <option value="Casado">Casado</option>
             <option value="Divorciado">Separado/Divorciado</option>
             <option value="Soltero">Soltero</option>
             <option value="Viudo">Viudo</option>
            </option> </select>
            </div>
          </div>


          <div class="form-group">
            <label for="CuentaAuto" class="col-sm-4 control-label">¿Cuenta con automovil propio?:</label>
            <div class="col-sm-8">
                <?php if ($auto_prop == "si") {$a="checked";$b=""; }else{$a=""; $b="checked";}?>
  
                 Si<input type="radio" name="auto_prop"  <?php echo"$a";?> value="si" class="form03">
                  No<input type="radio" name="auto_prop"  <?php echo"$b";?> value="no" class="form03">

            </div>
          </div>


          <div class="form-group">
            <label for="ManejaAuto" class="col-sm-4 control-label">¿Maneja automovil estándar?::</label>
            <div class="col-sm-8">
                <?php if ($auto_esta == "si") {$c="checked";$d=""; }else{$c=""; $d="checked";}?>
                  Si<input type="radio" name="auto_esta" <?php echo"$c";?>  value="si" class="form03">
                 No<input type="radio" name="auto_esta" <?php echo"$d";?> value="no" class="form03">

            </div>
          </div>

          <div class="form-group">
            <label for="ManejoCarretera" class="col-sm-4 control-label">¿Cuenta con experiencia de manejo en carretera?:</label>
            <div class="col-sm-8">
                <?php if ($mane_carre == "si") {$e="checked";$f=""; }else{$e=""; $f="checked";}?>
    
                   Si<input type="radio" <?php echo"$e";?> name="mane_carre" value="si" class="form03" >
                   No<input type="radio" <?php echo"$f";?> name="mane_carre"   value="no" class="form03" >

            </div>
          </div>

          <div class="form-group">
            <label for="DisponibleViajar" class="col-sm-4 control-label">Disponibilidad para Viajar : </label>
            <div class="col-sm-8">
                <?php if ($dispo_viaj == "si") {$g="checked";$h=""; }else{$g=""; $h="checked";}?>
                  Si<input type="radio" <?php echo"$g";?> name="dispo_viaj"  value="si" class="form03" >
                  No<input type="radio" <?php echo"$h";?>  name="dispo_viaj" value="no" class="form03" >
            </div>
          </div>

          <div class="form-group">
            <label for="DisponibleCambiar" class="col-sm-4 control-label">Disponibilida para cambiar de residencia: </label>
            <div class="col-sm-8">
                <?php if ($dispo_res == "si") {$i="checked";$j=""; }else{$i=""; $j="checked";}?>
                   Si<input type="radio" <?php echo"$i";?>  name="dispo_res" value="si" class="form03" >
                  No<input type="radio" <?php echo"$j";?> name="dispo_res" value="no" class="form03" >
            </div>
          </div>

         

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                  <button type="button" name="Regresar" value="Regresar" class="btn btn-default fa fa-reply" onClick="javascript:window.history.back()"> Regresar</button>
                  <button type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default fa fa-trash-o"> Limpiar</button>
                  <button type="submit" name="submit" value="Continuar"class="btn btn-primary fa fa-share" /> Continuar</button>
                  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">


              
            </div>
          </div>
        </form>
      </div>

                  

    </div>
    
  </div>
  
</div>


<?php
//	require_once('sfl_footer.php');
?>

</body>
</html>
