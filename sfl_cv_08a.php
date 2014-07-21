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

<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class="bg_09 txt03">
      <th class="txt09" align="left">Otros Estudios/Certificaciones </th><tr>
    <form name="new_cv" action="sfl_cv_08a_.php" method="post" enctype="multipart/form-data">
      <?php if ($accion == 1) { ?>
        <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Algun campo esta vacio .</b></span></td>
        </tr>
      <?php } ?>
       <tr>
 <td colspan="5"><span  class="menu02"><b>( * ) Ingrese uno o mas  estudios que haya cursado  .</b></span></td><tr></tr>
 	
 <th>Nombre</th> <th>Status</th><th>De:(Año)</th><th>A:(Año)</th><tr></tr>

 
        <td width="80"><input type="text" name="estudios" <?php if ($estudios !="") { ?>value="<?php echo $estudios;?>"<?php } ?>  size="70" maxlength="60" class="form03" /></td>
  	  
	    <td><select name="status_est" class="form03">
            <option value="<?php echo $status_est;?>"><?php echo $status_est; ?> &nbsp;.:</option>
            <option value="Pasante">Pasante</option>
            <option value="Titulado">Titulado</option>
            <option value="Trunco">Trunco</option>
            <option value="Constancia">Constancia</option>
			<option value="Diploma">Diplomado</option>
            <option value="Estudiante">Estudiante</option>
        </select></td>
 		
		<td><input type="text" name="de_estudios" size="5" maxlength="4" class="form03"   <?php if ($de_estudios != "") { ?>value="<?php echo $de_estudios; ?>"<?php } ?>  /></td>
        <td><input type="text" name="a_estudios" size="5" maxlength="4" class="form03"  <?php if ($a_estudios != "") { ?>value="<?php echo $a_estudios; ?>"<?php } ?> /></td>

    <tr></tr>
  
 <?php
	$query_estudios = mysql_query("SELECT * FROM estudios where id_cuenta ='" . $id_cuenta . "'");
	$exist_estudios = mysql_num_rows($query_estudios);
     ?>
        <!-- query a BD estudios-->
                <tr>
   <td><input type="submit"  name="submit"  value="&nbsp;&nbsp;<?php if (!$id_estudios) { ?>+ Nuevo Estudio<?php }else{ ?>Actualizar Estudio <?php } ?>&nbsp;&nbsp;" class="form03"></td><tr></tr>
   <td  class="txt06a"valign="middle">Institucion</td>
   <td  class="txt06a" valign="middle" >Estatus</td>
   <td   class="txt06a" valign="middle" >Período</td>
    <td  class="txt06a" valign="middle" align="center">.:.</td>
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
                  <td class="txt06b" align="center"><a href="sfl_cv_08a.php?id_estudios=<?php echo $qry_estudios['id_estudios']?>& id_cuenta=<?php echo $id_cuenta?>" class="txt06c">[ editar ]</a></td>
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
   <tr></tr>
  		     <td  colspan="4">&nbsp;</td> <tr></tr><td  colspan="4"align="center">
                  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
    	    	  <input type="button" name="submit" value="Continuar" class="form03"  onClick="location='sfl_cv_08b.php?id_cuenta=<?php echo $id_cuenta; ?>'">&nbsp;&nbsp;
                  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				  <input type="hidden" name="id_estudios" value="<?php echo $id_estudios; ?>">
			</td>
          </table>
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
	//require_once('sfl_footer.php');
?>

</body>
</html>
