<?php
    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
    require_once('sfl_security_id_.php');
	
     if (!$_POST)
                  {

    $id_cuenta = $_GET['id_cuenta'];
    $accion = $_GET['accion'];
    $id_aspirante = $_GET['id_aspirante'];
     $calle = $_GET['calle'];
    $num_ext = $_GET['num_ext'];
    $num_int = $_GET['num_int'];
    $colonia = $_GET['colonia'];
    $cp = $_GET['cp'];
    $id_del_mun = $_GET['id_del_mun'];
    $id_estado = $_GET['id_estado'];
    $id_cat_zonas = $_GET['id_cat_zonas'];
    } else{
    
    $id_cuenta = $_POST['id_cuenta'];
    $accion = $_POST['accion'];
    $id_aspirante = $_POST['id_aspirante'];
    $calle = $_POST['calle'];
    $num_ext = $_POST['num_ext'];
    $num_int = $_POST['num_int'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
    $id_del_mun = $_POST['id_del_mun'];
    $id_estado = $_POST['id_estado'];
    $id_cat_zonas = $_POST['id_cat_zonas'];
      }
	  

 if ($accion_up == 5) { 
	    $query_aspirante_s = mysql_query("SELECT * FROM cat_aspirante WHERE id_cuenta = '$id_cuenta'");
	    $qry_aspirante_s = mysql_fetch_assoc($query_aspirante_s);
		
		if ($id_estado ==""){$id_estado  = $qry_aspirante_s['id_estado'];}
				
		$id_del_mun  = $qry_aspirante_s['id_del_mun'];	 
	    $id_cat_zonas = $qry_aspirante_s['zona'];   	
	              
		$calle= $qry_aspirante_s['calle'];
		$num_ext= $qry_aspirante_s['num_ext'];
		$num_int= $qry_aspirante_s['num_int'];
		$colonia= $qry_aspirante_s['colonia'];
		$cp= $qry_aspirante_s['cp'];
		$fec_nac= $qry_aspirante_s['fec_nac'];
	   
	    $query_estados_s = mysql_query("SELECT * FROM cat_estados WHERE id_estado = '$id_estado'");
	    $qry_estados_s = mysql_fetch_assoc($query_estados_s);
        $estado= $qry_estado_s['estado'];
		 $query_mun_s = mysql_query("SELECT * FROM cat_mun_del WHERE id_del_mun = '$id_del_mun'");
	    $qry_mun_s = mysql_fetch_assoc($query_mun_s);
        $municipio= $qry_estado_s['municipio'];
		$query_zona_s = mysql_query("SELECT * FROM cat_zonas WHERE id_cat_zonas = '$id_cat_zonas'");
	    $qry_zona_s = mysql_fetch_assoc($query_zona_s);
        $zona = $qry_zona_s['zonas'];
				}     
				
			

?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php
	require_once('sfl_tit.php');
?>

<link type="text/css" href="css/sfl_style.css" rel="stylesheet"/>
<link type="text/css" href="css/menu.css" rel="stylesheet" />
<script type="text/javascript" src="controller.js"></script>
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/menu.js"></script>

<?php
	require_once('sfl_functions.php');
	require_once('sfl_functions.html');
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
    <td> </td>
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
      <a href="sfl_cv_02a.php" type="button" class="btn btn-primary btn-100"><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-phone'></i> Datos de Indentificaci&oacute;n</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-home'></i> Referencias Personales</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-thumbs-up'></i> Perfilamiento y Experiencia</a>
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
      <div class="box-title">Dirección</div>



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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_02a_.php" method="post" enctype="multipart/form-data" >
          <!-- Termina Errores -->


           <div class="form-group">
            <label for="calle" class="col-sm-4 control-label">Calle: </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="calle" size="30" maxlength="50" <?php if ($calle != "") { ?>value="<?php echo $calle; ?>"<?php } ?>  class="form-control" placeholder='Calle ' autofocus>
             


            </div>
          </div>



           <div class="form-group">
            <label for="NumExt" class="col-sm-4 control-label">Numero ext: </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="calle" size="30" maxlength="50" <?php if ($num_ext != "") { ?>value="<?php echo $num_ext; ?>"<?php } ?>   class="form-control" placeholder='Numero Ext.' >
             


            </div>
          </div>



           <div class="form-group">
            <label for="NumInt" class="col-sm-4 control-label">Numero Int: </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="calle" size="30" maxlength="50" <?php if ($num_int != "") { ?>value="<?php echo $num_int; ?>"<?php } ?> class="form-control" placeholder='Numero Int.'>
             


            </div>
          </div>


           <div class="form-group">
            <label for="Colonia" class="col-sm-4 control-label">Colonia: </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="calle" size="30" maxlength="50" <?php if ($colonia != "") { ?>value="<?php echo $colonia; ?>"<?php } ?>   class="form-control" placeholder='Colonia' >
             


            </div>
          </div>


           <div class="form-group">
            <label for="CP" class="col-sm-4 control-label">C.P : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="calle" size="30" maxlength="50" <?php if ($cp != "") { ?>value="<?php echo $cp; ?>"<?php } ?>  class="form-control" placeholder='C.P' >
            


            </div>
          </div>



          <div class="form-group">
            <label for="Estado" class="col-sm-4 control-label">Estado</label>
            <div class="col-sm-8">
              <?php
              $query_estado = mysql_query("SELECT * FROM cat_estados ORDER BY id_estado ASC");
              $qry_estado = mysql_fetch_assoc($query_estado);
              ?>
              <select name="id_estado"  onChange="MM_jumpMenu('parent',this,0)" class="form03">

                   <?php if ($id_estado != "") {

                     $query_estado_s = mysql_query("SELECT * FROM cat_estados WHERE id_estado ='" . $id_estado . "'");
                     $qry_estado_s = mysql_fetch_assoc($query_estado_s);
                     ?>

                     <option value="<?php echo $qry_estado_s['id_estado']; ?>"><?php echo $qry_estado_s['estado']; ?></option>

                     <?php   }else{ ?>

                     <option value="<?php $id_estado?>"><?php $estado?></option>

                     <?php
                   }
                   do {
                    ?>
                    <option value="sfl_cv_02a.php?id_estado=<?php echo $qry_estado['id_estado']; ?>&amp;id_cuenta=<?php echo $id_cuenta;?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_estado['estado'];?></option>
                    <?php
                  } while ($qry_estado = mysql_fetch_assoc($query_estado));
                  $rows_estatus = mysql_num_rows($query_estado);
                  if($rows_estatus > 0) {
                    mysql_data_seek($query_estado, 0);
                    $qry_estado = mysql_fetch_assoc($query_estado);
                  }
                  ?>
               </select>
            </div>
          </div>



          
          <div class="form-group">
            <label for="Municipio" class="col-sm-4 control-label">Municipio/Delegaci&oacute;n: *</label>
              <div class="col-sm-8">
            <?php
                    $query_mun = mysql_query("SELECT * FROM cat_mun_del WHERE id_estado ='" . $id_estado . "' ORDER BY id_del_mun ASC");
                    $qry_mun = mysql_fetch_assoc($query_mun);
                    ?>
                <select name="id_del_mun"   class="form03">

                  <?php if ($id_del_mun != "") {

                            $query_mun_s = mysql_query("SELECT * FROM cat_mun_del WHERE id_del_mun ='" . $id_del_mun . "'");
                            $qry_mun_s = mysql_fetch_assoc($query_mun_s);
          ?>

                        <option value="<?php echo $qry_mun_s['id_del_mun']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_mun_s['del_mun']; ?></option>
                  <?php   }else{ ?>

                    <option value="<?php $id_del_mun?>"><?php $del_mun?></option>

                  <?php
                       }
                    do {
                    ?>
                  <option value="<?php echo $qry_mun['id_del_mun']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_mun['del_mun']; ?></option>
               
        
          <?php
                    } while ($qry_mun = mysql_fetch_assoc($query_mun));
                      $rows_estatus = mysql_num_rows($query_mun);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_mun, 0);
                          $qry_mun = mysql_fetch_assoc($query_mun);
                      }
                    ?>
            </select>

            </div>
          </div>


  
          <div class="form-group">
            <label for="Ciudad" class="col-sm-4 control-label">Zona de la ciudad: </label>
              <div class="col-sm-8">
                <?php ;  
                    $query_zonas = mysql_query("SELECT * FROM cat_zonas ORDER BY id_cat_zonas ASC");
                    $qry_zonas = mysql_fetch_assoc($query_zonas);
        ?>
        <select name="id_cat_zonas"  class="form03" >

       <?php if ($id_cat_zonas != "") {
                           $query_zonas_s = mysql_query("SELECT * FROM cat_zonas WHERE id_cat_zonas ='" . $id_cat_zonas . "'");
                           $qry_zonas_s = mysql_fetch_assoc($query_zonas_s);
          ?>

                       <option value="<?php echo $qry_zonas_s['id_cat_zonas']; ?>"><?php echo $qry_zonas_s['zonas']; ?></option>

                  <?php   }else{ ?>
                           
                    <option value="<?php echo "$id_cat_zonas"; ?>"><?php echo "$zona"; ?></option>

                  <?php  
                       }
                    do {
                    ?>
                       <option value="<?php echo $qry_zonas['id_cat_zonas']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_zonas['zonas'];?></option>
                  <?php
              } while ($qry_zonas = mysql_fetch_assoc($query_zonas));
                      $rows_estatus = mysql_num_rows($query_zonas);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_zonas, 0);
                          $qry_zonas = mysql_fetch_assoc($query_zonas);
                                            }
                    ?>
           </select>

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
	//require_once('file:///C|/proyectos_web/SFL/sfl_footer.php');
?>

</body>
</html>
