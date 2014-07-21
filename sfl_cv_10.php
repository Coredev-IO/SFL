<?php
    require_once('sfl_security_id_.php');
    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
     $id_cuenta= $_GET['id_cuenta'];
	$id_intereses = $_POST['id_intereses'];
	$id_idiomas = $_POST['id_idiomas'];
	
	$accion= $_POST['accion'];
    $puesto= $_POST['puesto'];
    $sueldo = $_POST['sueldo'];
    $area_int = $_POST['area_int'];
    $disp_time = $_POST['disp_time'];
   
	$accion = $_GET['accion'];

  		 if ($accion_up == 5) { 
	    $query_int_s = mysql_query("SELECT * FROM intereses WHERE id_cuenta = '$id_cuenta'");
	    $qry_int_s = mysql_fetch_assoc($query_int_s);
		$puesto = $qry_int_s['puesto'];
		$sueldo = $qry_int_s['sueldo'];	 
	    $area_int= $qry_int_s['area_int'];
		$dis_time= $qry_int_s['dis_time'];
	
	     $query_idi_s = mysql_query("SELECT * FROM idiomas WHERE id_cuenta = '$id_cuenta'");
	    $qry_idi_s = mysql_fetch_assoc($query_idi_s);
		$idioma_1 = $qry_idi_s['idioma_1'];
		$idioma_2= $qry_idi_s['idioma_2'];	 
	    $idioma_3= $qry_idi_s['idioma_3'];
		
	
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
	//require_once('sfl_menu_02.php');
?>

    </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>

<table width="700" border="0" cellspacing="1" cellpadding="0" align="center"  class="bg_09 txt03">
  <tr></tr>

  <form name="new_cv" action="files/sfl_cv_10_.php" method="post" enctype="multipart/form-data">
      <?php if ($accion == 1) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute;.</b></span></td>
        </tr>
      <?php } ?>

          <tr>
  
         <tr>
            <th align="left"  class="txt09">Intereses</th>
            <tr><td>Puesto de Interés  *</td>
    
	    <td><input onkeypress="return event.keyCode!=13" type="text" name="puesto" size="50" maxlength="45" class="form03"  <?php if ($puesto != "") { ?>value="<?php echo $puesto; ?>"<?php } ?> /></td>
         <tr>
            <td>Sueldo Deseado   *</td>
        <td>$<input onkeypress="return event.keyCode!=13" type="text" name="sueldo" size="10" maxlength="9" class="form03"  <?php if ($sueldo != "") { ?>value="<?php echo $sueldo; ?>"<?php } ?> /></td>
         <tr>
            <td>Area de interés  *</td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="area_int" size="50" maxlength="45" class="form03"  <?php if ($area_int != "") { ?>value="<?php echo $area_int; ?>"<?php } ?>/></td>
         <tr>
            <td>Disponibilidad de tiempo  *</td>
         <td><select name="dis_time" class="form03">
            <option <?php if ($dis_time != "") { ?>value="<?php echo $dis_time; ?>"<?php } ?>value=""><?php echo $dis_time; ?>&nbsp;.:</option>
            <option value="Medio Tiempo">Medio Tiempo</option>
            <option value="Tiempo Completo">Tiempo Completo</option>
             </select></td>

         <tr>
           <th align="left"  class="txt09">Idiomas</th> <tr>
            <td>Idioma 1</td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="idioma_1" size="30" maxlength="30" class="form03" <?php if ($idioma_1 != "") { ?>value="<?php echo $idioma_1; ?>"<?php } ?>/><br><tr></tr>
            <td>Idioma 2</td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="idioma_2" size="30" maxlength="30" class="form03" <?php if ($idioma_2 != "") { ?>value="<?php echo $idioma_2; ?>"<?php } ?> /></td><tr></tr>
            <td>Idioma 3</td> 
        <td><input onkeypress="return event.keyCode!=13" type="text" name="idioma_3" size="30" maxlength="30" class="form03" <?php if ($idioma_3 != "") { ?>value="<?php echo $idioma_3; ?>"<?php } ?>/></td><tr></tr>
         <tr>
		 
        </td>  <tr></tr>
		  <th align="left"  class="txt09">Currículum</th> <tr>
        <td>Agregue su CV (formato PDF)</td>
        <td><input type="file" name="fichero" class="form01"></td>
        </tr>
         <tr></tr>
		 <td colspan="2">&nbsp;</td>
		 <tr></tr>
        <td>&nbsp;</td>
        <td>
		
         
          <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
          <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
           <input type="submit" name="continuar" value="Finalizar" class="form03" >&nbsp;
		  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
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
