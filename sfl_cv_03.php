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
//	require_once('sfl_menu_02.php');
?>

    </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>

<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="100%" class="padd_02" valign="top">

  <form name="new_cv" action="sfl_cv_03_.php" method="post" enctype="multipart/form-data">

    <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">


<!--accion-->
         <?php if ($accion_up == 5) { ?>
      <tr>
        <td colspan="2"><span  class="menu02"><b>( * ) Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>
  

      <?php if ($accion == 1) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute;.</b></span></td>
        </tr>
      <?php } ?>


<!--formulario-->
        <tr>
        <td >RFC: </td>
        <td><input onkeypress="return event.keyCode!=13"  type="text" name="rfc" size="25" maxlength="18"  <?php if ($rfc != "") { ?>value="<?php echo $rfc; ?>"<?php } ?> class="form03" ></td>
       </tr>
       <tr>
        <td >CURP: </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="curp" size="25" maxlength="20"  <?php if ($curp != "") { ?>value="<?php echo $curp; ?>"<?php } ?> class="form03" ></td>     </tr>
       <tr>
        <td>No. de afiliación al IMSS: </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="no_imss" size="18" maxlength="14"  <?php if ($no_imss != "") { ?>value="<?php echo $no_imss; ?>"<?php } ?> class="form03" ></td>
       </tr>
       <tr>
         <td >No. de Clínica: </td>
         <td><input onkeypress="return event.keyCode!=13" type="text" name="no_clinica" size="18" maxlength="14"  <?php if ($no_clinica != "") { ?>value="<?php echo $no_clinica; ?>"<?php } ?> class="form03" ></td>
       </tr>
        <tr> <th align="left" class="txt09" >CONTACTO </th>
        <tr>
        <td>Teléfono Particular: </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="tel_particular" size="12" maxlength="14" <?php if ($tel_particular != "") { ?>value="<?php echo $tel_particular; ?>"<?php } ?> class="form03"></td>
        </tr>
        <tr>
        <td>Teléfono Movil: </td>
       <td><input onkeypress="return event.keyCode!=13" type="text" name="tel_movil" size="12" maxlength="14" <?php if ($tel_movil != "") { ?>value="<?php echo $tel_movil; ?>"<?php } ?> class="form03"></td>
      </tr>
        <td >Teléfono Oficina: </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="tel_oficina" size="12" maxlength="14" <?php if ($tel_oficina != "") { ?>value="<?php echo $tel_oficina; ?>"<?php } ?> class="form03"></td>
        <tr> <td >Teléfono Recados: </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="tel_reca" size="12" maxlength="14" <?php if ($tel_rec != "") { ?>value="<?php echo $tel_rec; ?>"<?php } ?> class="form03"></td>
       </tr>
          <tr> <th  align="left" class="txt09">REDES SOCIALES </th>
        <tr>
        <td>Usuario Twitter: </td>
      <td><input onkeypress="return event.keyCode!=13" type="text" name="twitter" size="30" maxlength="50" <?php if ($twitter != "") { ?>value="<?php echo $twitter; ?>"<?php } ?> class="form03"></td>
        </tr>
      <tr>
        <td>Usuario Facebook: </td>
        <td><input onkeypress="return event.keyCode!=13" type="text" name="facebook" size="30" maxlength="50" <?php if ($facebook != "") { ?>value="<?php echo $facebook; ?>"<?php } ?> class="form03"></td>
      </tr>
      <tr>
        <td>Usuario Linkedin: </td>
       <td><input type="text" name="linkedin" size="30" maxlength="50" <?php if ($linkedin != "") { ?>value="<?php echo $linkedin; ?>"<?php } ?> class="form03"></td>
      </tr>
        <tr>
        <tr>
           <td colspan="2">&nbsp;</td>
        </tr>
        <td colspan="2" align="center">
                  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
				  <input type="submit" name="submit" value="Continuar" class="form03" />&nbsp;
                  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>"></td>
   
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
