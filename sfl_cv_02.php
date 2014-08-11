<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	//require_once('sfl_fch_hra.php');
   
	$id_cuenta = $_SESSION['id_cuenta'];
	
     if (!$_POST)
                  {
   // $id_cuenta = $_GET['id_cuenta'];
    $accion = $_GET['accion'];
    $id_aspirante = $_GET['id_aspirante'];
    $paterno = $_GET['paterno'];
    $materno = $_GET['materno'];
    $nombre = $_GET['nombre'];
    $fec_nac = $_GET['fec_nac'];

    } else{
    
    $id_cuenta = $_POST['id_cuenta'];
    $accion = $_POST['accion'];
    $id_aspirante = $_POST['id_aspirante'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $fec_nac = $_POST['fec_nac'];

      } 
	  
	    if ($accion_up == 5) { 
	    $query_aspirante_s = mysql_query("SELECT * FROM cat_aspirante WHERE id_cuenta = '$id_cuenta'");
	    $qry_aspirante_s = mysql_fetch_assoc($query_aspirante_s);
   		$paterno= $qry_aspirante_s['paterno'];
        $materno= $qry_aspirante_s['materno'];
		$nombre= $qry_aspirante_s['nombre'];
		$fec_nac_b= $qry_aspirante_s['fec_nac'];
		$id_cuenta = $_SESSION['id_cuenta'];
	
         	 $d_fch_cad = substr($fec_nac_b,-2);
	    	$m_fch_cad = substr($fec_nac_b,5,-3);
	    	$a_fch_cad = substr($fec_nac_b,0,4);
		    $fec_nac= $d_fch_cad . "/" . $m_fch_cad . "/" . $a_fch_cad;

		 
		
		  }

?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript">
$(document).ready(function() {
    $("new_cv").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
});
</script>
<?php
	require_once('sfl_tit.php');
?>




<link type="text/css" href="css/sfl_style.css" rel="stylesheet"/>
<link type="text/css" href="css/menu.css" rel="stylesheet" />
<script type="text/javascript" src="controller.js"></script>
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/menu.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
  window.onload = function(){
    new JsDatePick({
      useMode:2,
      target:"inputField",
      dateFormat:"%d-%m-%Y"
      /*selectedDate:{        This is an example of what the full configuration offers.
        day:5,            For full documentation about these settings please see the full version of the code.
        month:9,
        year:2006
      },
      yearsRange:[1978,2020],
      limitToToday:false,
      cellColorScheme:"beige",
      dateFormat:"%m-%d-%Y",
      imgPath:"img/",
      weekStartDay:1*/
    });
  };
</script>



<?php
	require_once('sfl_functions.php');
	//require_once('sfl_functions.html');
?>

</head>

<body onload="MM_preloadImages('images/sfl_redes_01a.png','images/sfl_redes_02a.png','images/sfl_redes_03a.png','images/sfl_slide_menu_01a.jpg','images/sfl_slide_menu_02a.jpg','images/sfl_slide_menu_03a.jpg','images/sfl_slide_menu_04a.jpg','images/sfl_slide_menu_05a.jpg','images/sfl_slide_menu_06a.jpg','images/sfl_slide_menu_07a.jpg')">

<?php
	// require_once('sfl_head_cv.php');
?>

<?php
	// require_once('sfl_menu_01cv.php');
?>
<!-- 
<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
  <tr>
    <td> -->

<?php
	//require_once('sfl_menu_02.php');
?>
<!-- 
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
      <a href="sfl_cv_02.php" type="button" class="btn btn-primary btn-100"><i class='fa fa-user'></i> Datos Personales</a>
      <a href="sfl_cv_02a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-phone'></i> Datos de Identificaci&oacute;n</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-home'></i> Referencias Personales</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-thumbs-up'></i> Perfilamiento</a>
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
      <div class="box-title">Datos Personales</div>



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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_02_.php" method="post" enctype="multipart/form-data" >
          

          
          <div class="form-group">
            <label for="paterno" class="col-sm-4 control-label">Apellido Paterno: *</label>
            <div class="col-sm-8">
              <input onkeypress="return event.keyCode!=13"  type="text" name="paterno" size="30" maxlength="50" <?php if ($paterno != "") { ?>value="<?php echo $paterno; ?>"<?php } ?> class="form-control" placeholder='Apellido Paterno' autofocus>
            </div>
          </div>
          
          <div class="form-group">
            <label for="materno" class="col-sm-4 control-label">Apellido Materno:</label>
            <div class="col-sm-8">
              <input onkeypress="return event.keyCode!=13" type="text" name="materno" size="30" maxlength="50" <?php if ($materno != "") { ?>value="<?php echo $materno; ?>"<?php } ?> class="form-control" placeholder='Apellido Materno'>

            </div>
          </div>

          <div class="form-group">
            <label for="nombre" class="col-sm-4 control-label">Nombre(s) *:</label>
            <div class="col-sm-8">
                <input onkeypress="return event.keyCode!=13" type="text" name="nombre" size="30" maxlength="50" <?php if ($nombre != "") { ?>value="<?php echo $nombre; ?>"<?php } ?> class="form-control" placeholder='Nombre(s)'>
            </div>
          </div>

          <div class="form-group">
            <label for="fec_nac" class="col-sm-4 control-label">Fecha de Nacimiento: *</label>
            <div class="col-sm-8">
               <?php if (!$fec_nac) { ?>
                  <input name="fec_nac" type="text" size="10" maxlength="10" id="inputField" onKeyUp = "this.value=formateafecha(this.value);" class="form-control" placeholder='[ dd/mm/aaaa ]'> 
                <?php }else{ ?>
                  <input name="fec_nac" type="text" size="10" maxlength="10" id="inputField" value="<?php echo $fec_nac; ?>" class="form-control" placeholder='[ dd/mm/aaaa ]'> 
                <?php }   ?>
              
            </div>
          </div>

          <hr>

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              <button type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default fa fa-trash-o"> Limpiar</button>
              <button type="submit" class="btn btn-primary fa fa-share" > Continuar</button>
              <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
              <input type="hidden" name="accion" value="<?php echo $accion; ?>">
            </div>
          </div>
        </form>
      </div>

                  

    </div>
    
  </div>
  
</div>


<?php
	//require_once('sfl_footer.php');
?>

</body>
</html>
