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
 <form name="new_cv" action="sfl_cv_05_.php" method="post" enctype="multipart/form-data">

    <table  align="center" width="600" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
   <th align="left"  class="txt09">PERFILAMIENTO Y EXPERIENCIA</th>
      <?php if ($accion == 1) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute;.</b></span></td>
        </tr>
      <?php } ?>
		  <?php if ($accion_up == 5) { ?>
      <tr>
        <td colspan="2"><span class="menu02"><b>( * ) Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>
       <tr></tr><td colspan="2">&nbsp;</td>
      <tr></tr>
      <td  width="200">Lugar de nacimiento: </td>
         <td><input onkeypress="return event.keyCode!=13"  type="text" name="lug_nac" size="25" maxlength="30"  <?php if ($lug_nac != "") { ?>value="<?php echo $lug_nac; ?>"<?php } ?> class="form03" ></td>
       </tr>
        <tr>
         <td >Género: *</td>
         <td><select name="genero" class="form03">
             <option <?php if ($genero != "") { ?>value="<?php echo $genero; ?>"<?php } ?>><?php echo $genero?> &nbsp;.:</option>
             <option value="Hombre">Hombre</option>
             <option value="Mujer">Mujer</option>
             </option> </select></td>
       </tr>
     <tr>
       <td >Estado Civil:  *</td>
           <td><select name="edo_civil" class="form03">
             <option value=" <?php echo "$edo_civil";?>"> <?php if ($edo_civil != "") { echo "$edo_civil"; } else {echo "&nbsp;.:";} ?></option>
             <option value="Casado">Casado</option>
             <option value="Divorciado">Separado/Divorciado</option>
             <option value="Soltero">Soltero</option>
             <option value="Viudo">Viudo</option>
            </option> </select></td>
       </tr>
       <tr>
       <td>¿Cuenta con automovil propio?: </td>
	   
	   <?php if ($auto_prop == "si") {$a="checked";$b=""; }else{$a=""; $b="checked";}?>
	
       <td>Si<input type="radio" name="auto_prop"  <?php echo"$a";?> value="si" class="form03">
           No<input type="radio" name="auto_prop"  <?php echo"$b";?> value="no" class="form03"></td>

        </tr>
      <tr><td>¿Maneja automovil estándar?:  </td>
	  <?php if ($auto_esta == "si") {$c="checked";$d=""; }else{$c=""; $d="checked";}?>
       <td>Si<input type="radio" name="auto_esta" <?php echo"$c";?>  value="si" class="form03">
           No<input type="radio" name="auto_esta" <?php echo"$d";?> value="no" class="form03"></td>
      <tr><td>&nbsp;<td></td></td></tr>
    </tr>
    <tr><td>¿Cuenta con experiencia de manejo en carretera?:  </td>
	  <?php if ($mane_carre == "si") {$e="checked";$f=""; }else{$e=""; $f="checked";}?>
	  
      <td> Si<input type="radio" <?php echo"$e";?> name="mane_carre" value="si" class="form03" >
           No<input type="radio" <?php echo"$f";?> name="mane_carre"   value="no" class="form03" ></td>

    </tr>
    <tr><td>Disponibilidad para Viajar: </td>
	  <?php if ($dispo_viaj == "si") {$g="checked";$h=""; }else{$g=""; $h="checked";}?>
    <td>Si<input type="radio" <?php echo"$g";?> name="dispo_viaj"  value="si" class="form03" >
        No<input type="radio" <?php echo"$h";?>  name="dispo_viaj" value="no" class="form03" ></td>
    </tr>
     <tr><td>Disponibilida para cambiar de residencia: </td>
	   <?php if ($dispo_res == "si") {$i="checked";$j=""; }else{$i=""; $j="checked";}?>
    <td>  Si<input type="radio" <?php echo"$i";?>  name="dispo_res" value="si" class="form03" >
          No<input type="radio" <?php echo"$j";?> name="dispo_res" value="no" class="form03" ></td>
    </tr>

        <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
        </tr>
             <td  colspan="2" align="center">
                  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03"> 
				  <input type="submit" name="submit" value="Continuar"class="form03" />
				  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
    

  </form>
</table>
</table>

<?php
//	require_once('sfl_footer.php');
?>

</body>
</html>
