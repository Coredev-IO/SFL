<?php
        require_once('sfl_security_id_.php');	
		require_once('conn/connect.php');
	    require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $id_cuenta = $_GET['id_cuenta'];

        if ($id_academico!="") {	
	    $query_academia_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta'");
	    $qry_academia_s = mysql_fetch_assoc($query_academia_s);
   		$id_academia= $qry_academia_s['id_academia'];
        $nivel= $qry_academia_s['nivel'];
		$instituto= $qry_academia_s['instituto'];
		$status_a= $qry_academia_s['status'];
		$fecha_i= $qry_academia_s['fecha_i'];
		$fecha_f= $qry_academia_s['fecha_f'];
          }
			 
			  if ($accion_up == 5) { 
 $query_pri_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta' and nivel = 'primaria' ");
	    $qry_pri_s = mysql_fetch_assoc($query_pri_s);
   		$primaria= $qry_pri_s['instituto'];
        $status_pri = $qry_pri_s['status'];
		$de_pri= $qry_pri_s['fecha_i'];
		$a_pri= $qry_pri_s['fecha_f'];
		
$query_secu_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta' and nivel = 'secundaria' ");
	    $qry_secu_s = mysql_fetch_assoc($query_secu_s);
   		$secu= $qry_secu_s['instituto'];
        $status_secu = $qry_secu_s['status'];
		$de_secu= $qry_secu_s['fecha_i'];
		$a_secu= $qry_secu_s['fecha_f'];

$query_prepa_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta' and nivel = 'preparatoria' ");
	    $qry_prepa_s = mysql_fetch_assoc($query_prepa_s);
   		$prepa= $qry_prepa_s['instituto'];
        $status_prepa = $qry_prepa_s['status'];
		$de_prepa= $qry_prepa_s['fecha_i'];
		$a_prepa= $qry_prepa_s['fecha_f'];

$query_lic_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta' and nivel = 'licenciatura' ");
	    $qry_lic_s = mysql_fetch_assoc($query_lic_s);
   		$lic= $qry_lic_s['instituto'];
        $status_lic = $qry_lic_s['status'];
		$de_lic= $qry_lic_s['fecha_i'];
		$a_lic= $qry_lic_s['fecha_f'];
$query_maestria_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta' and nivel = 'maestria' ");
	    $qry_maestria_s = mysql_fetch_assoc($query_maestria_s);
   		$maestria= $qry_maestria_s['instituto'];
        $status_maestria = $qry_maestria_s['status'];
		$de_maestria= $qry_maestria_s['fecha_i'];
		$a_maestria= $qry_maestria_s['fecha_f'];		
$query_doc_s = mysql_query("SELECT * FROM academia WHERE id_cuenta = '$id_cuenta' and nivel = 'doctorado' ");
	    $qry_doc_s = mysql_fetch_assoc($query_doc_s);
   		$doc= $qry_doc_s['instituto'];
        $status_doc = $qry_doc_s['status'];
		$de_doc= $qry_doc_s['fecha_i'];
		$a_doc= $qry_doc_s['fecha_f'];		
			
			}     

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
	require_once('sfl_tit.php');
?>


<link type="text/css" href="css/bootstrap.css" rel="stylesheet"/>
 <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


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
      <a href="sfl_cv_07.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-graduation-cap'></i> Historial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades Tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title ">HISTORIAL ACAD�MICO</div>



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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_08_.php" method="post" enctype="multipart/form-data" >
          <!-- Termina Errores -->
















<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03 " >
  <tr></tr>
      <?php if ($accion == 1) { ?>
        <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Algun campo esta vacio .</b></span></td>
        </tr>
      <?php } ?>
	  
	  <?php if ($accion_up == 5) { ?>
      <tr>
        <td colspan="5"><span  class="menu02"><b> ( * )Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>
       <tr>
        <th>Nivel</th>  <th>INSTITUCION</th> <th>STATUS</th><th>De:(A�o)</th><th>A:(A�o)</th>
       </tr>
      <tr><td colspan="5">&nbsp;</td><tr></tr>
        <td width="100"><label for="primaria" class="col-sm-4 control-label"> Primaria:</label><br><br><br>  </td>
    	    <td><input onkeypress="return event.keyCode!=13" type="text" name="primaria" size="30" maxlength="30" placeholder="Primaria" autofocus <?php if ($primaria != "") { ?>value="<?php echo $primaria; ?>"<?php } ?>  class="form-control" /></td>
        <td><select name="status_pri" class="form-control">
         	 <option  <?php if ($status_pri!= "") { ?>value="<?php echo $status_pri; ?>"<?php } ?> > <?php echo $status_pri; ?>  &nbsp;</option>
		     <option value="Trunco">Trunco</option>
             <option value="Constancia">Constancia</option>
            </select></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_pri" size="5" maxlength="4" class="form-control"   <?php if ($de_pri != "") { ?>value="<?php echo $de_pri; ?>"<?php } ?>/></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_pri" size="5" maxlength="4" class="form-control"   <?php if ($a_pri!= "") { ?>value="<?php echo $a_pri; ?>"<?php } ?>/></td>
        <tr>


        <td><label for="Secundaria" class="col-sm-4 control-label"> Secundaria:</label> <br><br><br>  </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="secu" size="30" maxlength="30" class="form-control" placeholder="Secundaria" <?php if ($secu != "") { ?>value="<?php echo $secu; ?>"<?php } ?> /></td>
        <td><select name="status_secu" class="form-control">
            <option  <?php if ($status_secu!= "") { ?>value="<?php echo $status_secu; ?>"<?php } ?> > <?php echo $status_secu; ?>  &nbsp;</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
         </select></td>
       <td><input onkeypress="return event.keyCode!=13" type="text" name="de_secu" size="5" maxlength="4" class="form-control" <?php if ($de_secu != "") { ?>value="<?php echo $de_secu; ?>"<?php } ?> /></td>
      <td><input onkeypress="return event.keyCode!=13" type="text" name="a_secu" size="5" maxlength="4" class="form-control" <?php if ($a_secu != "") { ?>value="<?php echo $a_secu; ?>"<?php } ?> /></td>
      </tr>
      <tr></tr>
      <tr>
      <tr>


      <td><label for="Preparatoria" class="col-sm-4 control-label"> Preparatoria:</label> <br><br><br>  </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="prepa" size="30" maxlength="30" class="form-control" placeholder="Preparatoria" <?php if ($prepa != "") { ?>value="<?php echo $prepa; ?>"<?php } ?>  /></td>
        <td><select name="status_prepa" class="form-control">
            <option  <?php if ($status_prepa!= "") { ?>value="<?php echo $status_prepa; ?>"<?php } ?> > <?php echo $status_prepa; ?>  &nbsp;</option>
            <option value="Trunco">Trunco</option>
			<option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Constancia">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_prepa" size="5" maxlength="4" class="form-control" <?php if ($de_prepa != "") { ?>value="<?php echo $de_prepa; ?>"<?php } ?> /></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_prepa" size="5" maxlength="4" class="form-control" <?php if ($a_prepa != "") { ?>value="<?php echo $a_prepa; ?>"<?php } ?> /> </td>

      </tr>
      <tr>
          <tr>


        <td><label for="Secundaria" class="col-sm-4 control-label">Licenciatura/Ingenieria:</label><br><br> </td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="lic" size="30" maxlength="30" class="form-control" placeholder="Licenciatura / Ingenieria " <?php if ($lic!= "") { ?>value="<?php echo $lic; ?>"<?php } ?> /></td>
        <td><select name="status_lic" class="form-control">
            <option  <?php if ($status_lic!= "") { ?>value="<?php echo $status_lic; ?>"<?php } ?> > <?php echo $status_lic; ?>  &nbsp;</option>
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constanci">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_lic" size="5" maxlength="4" class="form-control" <?php if ($de_lic != "") { ?>value="<?php echo $de_lic; ?>"<?php } ?> /></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_lic" size="5" maxlength="4" class="form-control" <?php if ($a_lic != "") { ?>value="<?php echo $a_lic; ?>"<?php } ?> /></td>

      </tr>
      <tr>
         <tr>


        <td><label for="Maestria" class="col-sm-4 control-label"> Maestria:</label> <br><br><br> </td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="maestria" size="30" maxlength="30" class="form-control" placeholder="Maestria" <?php if ($maestria != "") { ?>value="<?php echo $maestria; ?>"<?php } ?> /></td>
        <td><select name="status_maestria" class="form-control">
             <option  <?php if ($status_maestria!= "") { ?>value="<?php echo $status_maestria; ?>"<?php } ?> > <?php echo $status_maestria; ?>  &nbsp;</option>
   
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_maestria" size="5" maxlength="4" class="form-control"  <?php if ($de_maestria != "") { ?>value="<?php echo $de_maestria; ?>"<?php } ?> /></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_maestria" size="5" maxlength="4" class="form-control" <?php if ($a_maestria != "") { ?>value="<?php echo $a_maestria; ?>"<?php } ?> /></td>
      </tr>
      <tr>
         <tr>


        <td><label for="Doctorado" class="col-sm-4 control-label"> Doctorado:</label>  <br><br><br> </td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="doc" size="30" maxlength="30" class="form-control" placeholder="Doctorado" <?php if ($doc != "") { ?>value="<?php echo $doc; ?>"<?php } ?> /></td>
        <td><select name="status_doc" class="form-control">
            <option  <?php if ($status_doc!= "") { ?>value="<?php echo $status_doc; ?>"<?php } ?> > <?php echo $status_doc; ?>  &nbsp;</option>
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>

        <td><input onkeypress="return event.keyCode!=13" type="text" name="de_doc" size="5" maxlength="4" class="form-control"  <?php if ($de_doc != "") { ?>value="<?php echo $de_doc; ?>"<?php } ?>/></td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="a_doc" size="5" maxlength="4" class="form-control"  <?php if ($a_doc != "") { ?>value="<?php echo $a_doc; ?>"<?php } ?> /></td>
      </tr>
      <tr>
      <tr>
      <tr></tr>
 <td colspan="5">&nbsp;</td>
  <tr></tr>
         
        </tr>
  
      <tr></tr><td colspan="5"></td><tr></tr>
  		     <td colspan="5" align="center">
                  <button type="button" name="Regresar" value="Regresar" class="btn btn-default fa fa-reply" onClick="javascript:window.history.back()">&nbsp; Regresar</button>
                  <button type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default fa fa-trash-o"> Limpiar</button>
		    	  <button type="submit" name="submit" value="Continuar" class="btn btn-primary fa fa-share" > Continuar</button>
                  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				  <input type="hidden" name="id_estudios" value="<?php echo $id_estudios; ?>">
			</td>
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
