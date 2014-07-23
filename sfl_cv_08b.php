<?php
        require_once('sfl_security_id_.php');	
		require_once('conn/connect.php');
	    require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $id_cuenta = $_GET['id_cuenta'];
	$id_estudios = $_GET['id_estudios'];

  		 if ($accion_up == 5) { 
	    $query_tec_s = mysql_query("SELECT * FROM tecnologia WHERE id_cuenta = '$id_cuenta'");
	    $qry_tec_s = mysql_fetch_assoc($query_tec_s);
		$word = $qry_tec_s['word'];
		$powerpoint = $qry_tec_s['powerpoint'];	 
	    $acces= $qry_tec_s['acces'];
		$excel= $qry_tec_s['excel'];
		$otras_tec= $qry_tec_s['otras_tec'];

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
	// require_once('sfl_menu_02.php');
?>

    </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>

<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-3">
    <div class="box-menu">
      <a href="sfl_cv_02.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-user'></i> Datos Personales</a>
      <a href="sfl_cv_02a.php" type="button" class="btn btn-default btn-100"disabled><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-phone'></i> Contacto</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-home'></i> Referencias</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-thumbs-up'></i> Perfilamiento y Experiencia</a>
      <a href="sfl_cv_06.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cog'></i> Industria</a>
      <a href="sfl_cv_06a.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-child'></i> Posici&oacute;n</a>
      <a href="sfl_cv_06b.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-cubes'></i> L&iacute;neas</a>
      <a href="sfl_cv_06c.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cab'></i> &Aacute;reas de Expericia I</a>
      <a href="sfl_cv_07.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-graduation-cap'></i> Histotial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-file-word-o'></i> Habilidades tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title ">Habilidades tecnológicas </div>
       <div class="box-formulario">




<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class="bg_09 txt03">
  <tr></tr>
    <form name="new_cv" action="sfl_cv_08b_.php" method="post" enctype="multipart/form-data">
  <tr></tr>
          <!-- <th align="left" class="txt09">Habilidades tecnológicas</th><th>Nivel</th><tr> -->
    <td   width="50"><label for="word" class="col-sm-4 control-label"> Word:</label></td><td align="center" >
            <br><select name="word" class="form-control">
               <option <?php if ($word!= "") { ?>value="<?php echo $word; ?>"<?php } ?>><?php echo $word?> &nbsp;.:</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select></td>

    <tr></tr>
    <td ><label for="Powerpoint" class="col-sm-4 control-label"> Powerpoint:</label> </td>
           <td align="center"><br><select name="powerpoint" class="form-control">
            <option <?php if ($powerpoint!= "") { ?>value="<?php echo $powerpoint; ?>"<?php } ?>><?php echo $powerpoint?> &nbsp;.:</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select></td>
 
       <tr></tr>
    <td ><label for="Access" class="col-sm-4 control-label"> Access:</label> </td>
           <td align="center"><br><select name="acces" class="form-control">
            <option <?php if ($acces!= "") { ?>value="<?php echo $acces; ?>"<?php } ?>><?php echo $acces?> &nbsp;.:</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select></td>
    
      <tr></tr>
    <td ><label for="Excel" class="col-sm-4 control-label"> Excel:</label> </td>
           <td align="center"><br><select name="excel" class="form-control" >
            <option <?php if ($excel!= "") { ?>value="<?php echo $excel; ?>"<?php } ?>><?php echo $excel?> &nbsp;.:</option>
            <option value="Basico">Basico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
          </select><br></td>
       </tr>
       <tr>
	   <td ><label for="otras" class="col-sm-4 control-label"> Otras tecnologías que Domine:</label></td>
	    <td colspan="5"><textarea  name="otras_tec" rows="5" cols="50" class="form-control"/><?php if ($otras_tec != "") {  echo "$otras_tec"; }?> </textarea></td>
      <tr></tr>
  		    <td colspan="2">&nbsp;</td><tr></tr> <td  colspan="2"align="center">
                  <input type="button" name="Regresar" value="Regresar" class="btn btn-default" onClick="javascript:window.history.back()">&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default">
		    	  <input type="submit" name="submit" value="Continuar" class="btn btn-primary" >&nbsp;&nbsp;
                  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				  <input type="hidden" name="id_estudios" value="<?php echo $id_estudios; ?>">
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
//	require_once('sfl_footer.php');
?>

</body>
</html>
