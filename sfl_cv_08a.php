<?php
        require_once('sfl_security_id_.php');	
		require_once('conn/connect.php');
	    require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $id_cuenta = $_GET['id_cuenta'];
	$id_estudios = $_GET['id_estudios'];
	$primaria = $_GET['primaria'];
     
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
		if ($id_estudios!= "") {
		$query_estudio_s = mysql_query("SELECT * FROM estudios WHERE id_estudios = '$id_estudios'");
	    $qry_estudio_s = mysql_fetch_assoc($query_estudio_s);
   		$estudios= $qry_estudio_s['estudios'];
        $status_est= $qry_estudio_s['status'];
		$id_estudios= $qry_estudio_s['id_estudios'];
		$de_estudios= $qry_estudio_s['de'];
		$a_estudios= $qry_estudio_s['a'];
			
		     }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
	require_once('sfl_tit.php');
?>
<link type="text/css" href="css/bootstrap.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/Tooltips.js"></script>



<link type="text/css" href="css/sfl_style.css" rel="stylesheet" />
<link type="text/css" href="css/menu.css" rel="stylesheet" />
<script type="text/javascript" src="controller.js"></script>
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
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-graduation-cap'></i> Historial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades Tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title ">Otros Estudios/Certificaciones </div>
       <div class="box-formulario">


                        <!-- Large modal -->
                <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar Nuevo Estudio</button>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="box-formulario">
                      

                      <table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
                                  
                                  <th class="txt09" align="left"></th>
                                  <form name="new_cv" action="sfl_cv_08a_.php" method="post" enctype="multipart/form-data">
                                    <?php if ($accion == 1) { ?>
                                      <tr>
                                      <td colspan="2"><span class="txt08"><b>(*) Algun campo esta vacio .</b></span></td>
                                      </tr>
                                    <?php } ?>
                                     <tr>
                                      <br>
                                   <td colspan="5"><span  class="menu02"><b>( * ) Ingrese uno o mas  estudios que haya cursado.</b></span></td><tr></tr>
                                    
                                   <th>Nombre</th> <th>Status</th><th>De:(Año)</th><th>A:(Año)</th><tr></tr>

                                   <td width="80"><br><input type="text" name="estudios" <?php if ($estudios !="") { ?>value="<?php echo $estudios;?>"<?php } ?>  size="70" maxlength="60" class="form-control" /></td>
                                        
                                    
                                    <td><br><select name="status_est" class="form-control">
                                          <option value="<?php echo $status_est;?>"><?php echo $status_est; ?> &nbsp;</option>
                                          <option value="Pasante">Pasante</option>
                                          <option value="Titulado">Titulado</option>
                                          <option value="Trunco">Trunco</option>
                                          <option value="Constancia">Constancia</option>
                                          <option value="Diploma">Diplomado</option>
                                          <option value="Estudiante">Estudiante</option>
                                    </select></td>
                                    <td><br><input type="text" name="de_estudios" size="5" maxlength="4" class="form-control"   <?php if ($de_estudios != "") { ?>value="<?php echo $de_estudios; ?>"<?php } ?>  /></td>
                                      <td><br><input type="text" name="a_estudios" size="5" maxlength="4" class="form-control"  <?php if ($a_estudios != "") { ?>value="<?php echo $a_estudios; ?>"<?php } ?> /></td>
                                      <tr>
                                      <td><br><button type="submit"  name="submit"  value="&nbsp;&nbsp;<?php if (!$id_estudios) { ?>+ Nuevo Estudio<?php }else{ ?>Actualizar Estudio <?php } ?>&nbsp;&nbsp;" class="btn btn-default fa fa-plus"> Nuevo Estudio</button></td>
                                      </tr>
                        </table>


                    </div>
                  </div>
                </div>



                   <?php
                  	$query_estudios = mysql_query("SELECT * FROM estudios where id_cuenta ='" . $id_cuenta . "'");
                  	$exist_estudios = mysql_num_rows($query_estudios);
                       ?>
                          <!-- query a BD estudios-->
                                  <tr><br>
                     <table width="500" align="center" border="0" cellspacing="1" cellpadding="4" class=" CSSTableGenerator">
                                 <tr>
                                  <br>
                                 <td  class="txt06a"valign="middle">Institucion</td>
                                 <td  class="txt06a" valign="middle" >Estatus</td>
                                 <td   class="txt06a" valign="middle" >Período</td>
                                 <td   class="txt06a" valign="middle" >Modificar</td></tr>
                                            </tr>
                              <?php
                              	if ($exist_estudios > 0) {
                              		$qry_estudios = mysql_fetch_assoc($query_estudios);

                                          $i = 0;
                              			$x = 0;

                              			do {

                               				?>
                                              <tr></tr>
                                              
                                                <td class="txt06b"><?php echo $qry_estudios['estudios']; ?></td>
                                                <td class="txt06b"><?php echo $qry_estudios['status']; ?></td>
                                                <td class="txt06b"><?php echo $qry_estudios['de']?> -  <?php echo $qry_estudios['a']; ?></td>
                                                <td class="txt06b" align="center"><a href="sfl_cv_08a.php?id_estudios=<?php echo $qry_estudios['id_estudios']?> id_cuenta=<?php echo $id_cuenta?>" class="txt06c"><img class="right" src="images/editar.png" alt="ayuda", height="20px" data-toggle="tooltip" data-placement="right" title="Para editar volver a entrar al cuadro de AGREGAR NUEVO ESTUDIO"></a></td>
                                               <?php
                              			$i ++;
                              			$x ++;

                              			} while ($qry_estudios = mysql_fetch_assoc($query_estudios));
                              			  $rows = mysql_num_rows($query_estudios);
                              			  if($rows > 0) {
                              				  mysql_data_seek($query_estudios, 0);
                              				  $qry_estudios = mysql_fetch_assoc($query_estudios);
                              			  }

                              	}else{
                              ?>
                                            <tr></tr>
                              <?php
                              	} 
                                ?>
                                </table>
                     </table>
                     <br>
                     <tr></tr>

                    		     <td  colspan="4">&nbsp;</td> <tr></tr><td  colspan="4"align="center">
                                    <button type="button" name="Regresar" value="Regresar" class="btn btn-default fa fa-reply" onClick="javascript:window.history.back()"> Regresar</button>
                                    <button type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default fa fa-trash-o"> Limpiar</button>
                      	    	  <button type="button" name="submit" value="Continuar" class="btn btn-primary fa fa-share"  onClick="location='sfl_cv_08b.php?id_cuenta=<?php echo $id_cuenta; ?>'"> Continuar</button>
                                    <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
                  				  <input type="hidden" name="id_estudios" value="<?php echo $id_estudios; ?>">
                  			     </td>
                            </table>
                          </tr>
                    </form>
                      </td>
                    </tr>
                              <tr>
                              <td class="padd_02" valign="top">&nbsp;</td>
                              </tr>
                  </table>
</div>
</div>

<?php
	//require_once('sfl_footer.php');
?>

</body>
</html>
