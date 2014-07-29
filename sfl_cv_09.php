<?php
    require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $id_cuenta = $_GET['id_cuenta'];
    $id_laboral = $_GET['id_laboral'];
	$empresa=$_GET['empresa'];
    $area=$_GET['area'];
    $giro=$_GET['giro'];
    $puesto=$_GET['puesto'];
    $sueldo=$_GET['sueldo'];
	
if ($id_laboral != "") {

		$query_ref_s = mysql_query("SELECT * FROM laboral WHERE id_laboral ='" . $id_laboral . "'");
		$qry_ref_s = mysql_fetch_assoc($query_ref_s);
        $id_cuenta = $qry_ref_s['id_cuenta'];
		$empresa = $qry_ref_s['empresa'];
		$tipo = $qry_ref_s['tipo'];
		$area = $qry_ref_s['area'];
		$giro = $qry_ref_s['giro'];
		$puesto = $qry_ref_s['puesto'];
        $sueldo = $qry_ref_s['sueldo'];
        $funciones = $qry_ref_s['funciones'];
        $logros = $qry_ref_s['logros'];
        $jefe = $qry_ref_s['jefe'];
        $puesto_jefe = $qry_ref_s['puesto_jefe'];
        $e_mail = $qry_ref_s['e_mail'];
		$telefono= $qry_ref_s['telefono'];
        $fecha_i = $qry_ref_s['fecha_i'];
		$fecha_f= $qry_ref_s['fecha_f'];
		$actual_job= $qry_ref_s['actual_job'];
		$autorizo_ref= $qry_ref_s['autorizo_ref'];
		$separacion= $qry_ref_s['separacion'];
		
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
    </tr><tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
    </tr><tr>
    <td>
<?php
	// require_once('sfl_menu_02.php');
?>
     </td>
     </tr><tr>
     <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
     </tr>
</table> -->


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
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled ><i class='fa fa-file-word-o'></i> Habilidades tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title ">HISTORIAL LABORAL </div>
       <div class="box-formulario">







<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">
    <tr></tr>
<!-- 	<th  colspan="2" align="left" class="txt09">HISTORIAL LABORAL</th><tr><tr> -->
    <form name="new_cv" action="sfl_cv_09_.php" method="post" enctype="multipart/form-data">
      <?php if ($accion == 1) { ?>
      <tr>
       <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute;.</b></span></td>
       </tr>
      <?php } ?>
      <?php if ($accion == 2) { ?>
       <tr></tr>
       <td class="txt08"><b>Gracias.</b> La referencia se actualizo.</td>
      <?php } ?>
      <?php if ($accion == 3) { ?>
       <tr> </tr>
       <td class="txt08"><b>Gracias.</b> El registro se gener&oacute; con exito. </td>
       <?php  } ?>
        <tr>
        
          <td><b>Empresa **</td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="empresa" size="50" maxlength="50" class="form-control" placeholder="Empresa" autofocus <?php if ($empresa != "") { ?>value="<?php echo $empresa; ?>"<?php } ?> /></td>
        <tr></tr>


        <td><b>Tipo de Contratación **</td>
        <td><br><select name="tipo" class="form-control" >
            <option  <?php if ($tipo != "") { ?>value="<?php echo $tipo; ?>"<?php } ?>value=""><?php echo $tipo ?>&nbsp;</option>
            <option value="Directo">Directo</option>
            <option value="Tercerizado">Tercerizado</option>
            </select></td>
       </tr>
       <tr>


            <td> <b>Area</td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="area" size="35" maxlength="35" class="form-control" placeholder="Area" <?php if ($area != "") { ?>value="<?php echo $area; ?>"<?php } ?> /></td>
        <tr>
        </tr>



          <td> <b>Giro </td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="giro" size="35" maxlength="35" class="form-control" placeholder="Giro" <?php if ($giro != "") { ?>value="<?php echo $giro; ?>"<?php } ?> /></td>
        <tr>
        </tr>


          <td> <b>Puesto ** </td>
        <td><br><input onkeypress="return event.keyCode!=13"  type="text" name="puesto" size="35" maxlength="35" class="form-control" placeholder="Puesto"  <?php if ($puesto != "") { ?>value="<?php echo $puesto; ?>"<?php }?>/></td>
        <tr>
        </tr>


          <td> <b>Sueldo   </td>
        <td><br>$<input onkeypress="return event.keyCode!=13" type="text" name="sueldo" size="10" maxlength="9" class="form-control" placeholder="Sueldo"  <?php if ($sueldo != "") { ?>value="<?php echo $sueldo; ?>"<?php }?> /></td>
        <tr>
        </tr>


        <td> <b>Funciones </td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="funciones" size="35" maxlength="35" class="form-control" placeholder="Funciones"  <?php if ($funciones != "") { ?>value="<?php echo $funciones; ?>"<?php }?>/></td>
        <tr>
        </tr>



       <td> <b>Principales Logros </td>
        <td><br><textarea  onkeypress="return event.keyCode!=13"  name="logros" rows="5" cols="70" class="form-control"/><?php if ($logros != "") {  echo $logros; }?> </textarea></td>
        <tr>
        </tr>


          <td> <b>Nombre de Jefe Directo </td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="jefe" size="35" maxlength="35" class="form-control" placeholder="Nombre de Jefe Directo" <?php if ($jefe != "") { ?>value="<?php echo $jefe; ?>"<?php }?> /></td>
        <tr>
        </tr>


         <td><b> Puesto del Jefe Directo </td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="puesto_jefe" size="35" maxlength="35" class="form-control" placeholder="Puesto del Jefe Directo"<?php if ($puesto_jefe != "") { ?>value="<?php echo $puesto_jefe; ?>"<?php }?> /></td>
        <tr>
        </tr>



       <td><b> E-mail </td> 
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="e_mail" size="35" maxlength="35" class="form-control" placeholder="E-mail" <?php if ($e_mail != "") { ?>value="<?php echo $e_mail; ?>"<?php }?> /></td>
        <tr>
        </tr>



         <td><b> Teléfono </td>
        <td><br><input onkeypress="return event.keyCode!=13" type="text" name="telefono" size="35" maxlength="35" class="form-control" placeholder="Telefono" <?php if ($telefono != "") { ?>value="<?php echo $telefono; ?>"<?php }?> /></td>
        <tr>
        </tr>


         <td><b> Periodo de: </td>
        <?php if (!$fecha_i) { ?>
	    <td> <br> <input onkeypress="return event.keyCode!=13" name="fecha_i" type="text" size="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);" class="form-control"> [ dd/mm/aaaa ]</td>
        <?php }else{ ?>
	    <td><input onkeypress="return event.keyCode!=13" name="fecha_i" type="text" size="10" maxlength="10" value="<?php echo $fecha_i; ?>" class="form05a"> [ dd/mm/aaaa ]</td>
        <?php } ?>



        <tr></tr> <td><b> Periodo a: </td>
		 <?php if (!$fecha_i) { ?>
	    <td> <br> <input onkeypress="return event.keyCode!=13" name="fecha_f" type="text" size="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);" class="form-control"> [ dd/mm/aaaa ]</td>
        <?php }else{ ?>
	    <td><input onkeypress="return event.keyCode!=13" name="fecha_f" type="text" size="10" maxlength="10" value="<?php echo $fecha_f; ?>" class="form05a"> [ dd/mm/aaaa ]</td>
        <?php } ?>
         <tr>
        </tr>



        <td> <b>Actualmente Trabajando</td>
         <td><br>
		 
		  <?php if ($actual_job == "si") { $a = "checked"; $b="";}else{ $a=""; $b="checked";}  ?>
         <input type="radio" name="actual_job" <?php echo"$a";?> value="si"> si <br>
         <input type="radio" name="actual_job"  <?php echo"$b";?> value="no"> no<br>
         </td>
        </tr>


        <td> <b> Autorizo pedir Referencias</td>
         <td>
		 <?php if ($autorizo_ref == "si") { $c = "checked"; $d="";}else{ $c= ""; $d= "checked";}  ?>
         <input type="radio" name="autorizo_ref"  <?php echo"$c";?>  value="si"> si <br>
         <input type="radio" name="autorizo_ref"  <?php echo"$d";?> value="no"> no <br>
         </td> <tr>
          <td>Motivo de separación </td>
          <td><br><input onkeypress="return event.keyCode!=13" type="text" name="separacion" size="35" maxlength="35" class="form-control" placeholder="Motivo de separacion" <?php if ($separacion != "") { ?>value="<?php echo $separacion; ?>"<?php }?> /></td> <tr></tr>
		  <td align="center"><br><input type="submit" name="submit" value="&nbsp;&nbsp;<?php if (!$id_laboral) { ?>** Agregar ** <?php }else{ ?>** Actualizar Datos **<?php } ?>&nbsp;&nbsp;" class="btn btn-default"></td>
         <td  class="menu02"> <?php if (!$accion) {?>   



			**Registre  al menos un referencia para poder continuar
			               <?php }?>		 
        </td><tr>
        </td>
          <?php
	$query_laboral = mysql_query("SELECT * FROM laboral where id_cuenta ='" . $id_cuenta . "'");
	$exist_laboral= mysql_num_rows($query_laboral);
          ?>
        <!-- query a BD referencia-->
                <tr></tr>
				<table align="center" width="700" border="0" cellspacing="1" cellpadding="4" class=" txt03">
                <td height="20" class="txt06a" align="right" valign="middle">.:&nbsp;</td>
                <td class="txt06a" valign="middle">Empresa</td>
                <td class="txt06a" valign="middle" >Puesto</td>
                <td class="txt06a" valign="middle" >Jefe</td>
				<td class="txt06a" valign="middle" >Telefono</td>
                <td class="txt06a" valign="middle" align="center">.:.</td>  
<?php
	if ($exist_laboral > 0) {
		$qry_laboral = mysql_fetch_assoc($query_laboral);
            $i = 0;
			$x = 0;
			do {
?>
                <tr></tr>
                  <td height="20" class="txt06c"align="right">&bull;&nbsp;</td>
                  <td class="txt06c"><?php echo $qry_laboral['empresa']; ?></td>
                  <td class="txt06c"><?php echo $qry_laboral['puesto']; ?></td>
                  <td class="txt06c"><?php echo $qry_laboral['jefe']; ?></td>
				  <td class="txt06c"><?php echo $qry_laboral['telefono']; ?></td>
                  <td class="txt06c" align="center"><a href="sfl_cv_09.php?id_laboral=<?php echo $qry_laboral['id_laboral']  ?>&id_cuenta= <?php echo $id_cuenta ?>" class="txt06c">[ editar ]</a></td>
            <?php
			$i ++;
			$x ++;
			} while ($qry_laboral = mysql_fetch_assoc($query_laboral));
			  $rows = mysql_num_rows($query_laboral);
			  if($rows > 0) {
				  mysql_data_seek($query_laboral, 0);
				  $qry_laboral = mysql_fetch_assoc($query_laboral);
			  }
	        }else{
              ?>
              <tr></tr>
             <?php
	                 }
              ?>
              <br>
      <table width="700" border="0" cellspacing="1" cellpadding="4" class=" txt03" align="center" >
           <td align="center">
            <br>
            <br>
		  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default">
          <input type="button" name="Regresar" value="Regresar" class="btn btn-default" onClick="javascript:window.history.back()">&nbsp;
          <input type="hidden" name="id_laboral" value="<?php echo $id_laboral; ?>">
   	   <?php if (($accion == 2) or ($accion == 3) or ($accion_up == 5 ))  {?>           
			       <input type="button" name="continuar" value="Continuar" class="btn btn-primary"  onClick="location='sfl_cv_10.php?id_cuenta=<?php echo $id_cuenta; ?>'">&nbsp;
       <?php }?>
		 <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
         </td>
	   </table>		 
</form>
</table>
</table>
<?php
	//require_once('sfl_footer.php');
?>

</body>
</html>
