<?php
    require_once('sfl_security_id_.php');
    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');

    $id_vacante = $_GET['id_vacante'];
	$accion = $_GET['accion'];
    $descripcion= $_GET['descripcion'];
    $lugar = $_GET['lugar'];
    $salario = $_GET['salario'];
	$horario = $_GET['horario'];
    $fecha = $_GET['fecha'];
    $escolaridad = $_GET['escolaridad'];
	$experiencia = $_GET['experiencia'];
	$contacto = $_GET['contacto'];
	$contacto_mail = $_GET['contacto_mail'];
	$status = $_GET['status'];
	
	if ($id_vacante != "") {

		$query_vaca_s = mysql_query("SELECT * FROM vacantes WHERE id_vacante = '$id_vacante'");
		$qry_vaca_s = mysql_fetch_assoc($query_vaca_s);
        $id_vacante = $qry_vaca_s['id_vacante'];
	    $vacante = $qry_vaca_s['vacante'];
		$empresa = $qry_vaca_s['empresa'];
        $descripcion = $qry_vaca_s['descripcion'];
		$lugar = $qry_vaca_s['lugar'];
		$salario = $qry_vaca_s['salario'];
		$horario = $qry_vaca_s['horario'];
        $fecha = $qry_vaca_s['fecha'];
		$escolaridad = $qry_vaca_s['escolaridad'];
	    $experiencia = $qry_vaca_s['experiencia'];
		$contacto = $qry_vaca_s['contacto'];
		$contacto_mail = $qry_vaca_s['contacto_mail'];
        $status = $qry_vaca_s['status'];
			          
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php
	require_once('sfl_tit.php');

?>

<link type="text/css" href="css/sfl_style.css" rel="stylesheet"/>
<link type="text/css" href="css/menu.css" rel="stylesheet"/>
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
	require_once('sfl_menu_01.php');
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
	require_once('sfl_menu_02.php');
?>
      </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
    <td width="100%" class="padd_02" valign="top">

 <form name="refe" method="post" action="sfl_vacante_01_.php" enctype="multipart/form-data">

 <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">


<?php if ($accion == 1) { ?>

  <tr>
    <td colspan="2" class="txt08" ><b>Error.</b> Alg&uacute;n campo oblgatorio se encuentra vac&iacute;o.</td>
  </tr>


<?php } ?>


<?php if ($accion == 2) { ?>

  <tr>
    <td  colspan="2" class="txt08"><b>Gracias.</b> La Vacante se modificó con éxito.</td>
  </tr>


<?php } ?>

<?php if ($accion == 3) { ?>



  <tr>
    <td class="txt08"><b>Gracias.</b> La vacante se registro con éxito. </td>
  </tr>

<?php  } ?>

     <th>Vacantes </th>
    <tr><td>Vacante: *</td>
    <td><input type="text" name="vacante" size="50" maxlength="100"  <?php if ($vacante != "") { ?>value="<?php echo $vacante; ?>"<?php } ?> class="form03" ></td>
    </tr>
	 <tr><td>Empresa: *</td>
    <td><input type="text" name="empresa" size="50" maxlength="100"  <?php if ($vacante != "") { ?>value="<?php echo $empresa; ?>"<?php } ?> class="form03" ></td>

    <tr><td>Descripción: *</td>
        <td><textarea  name="descripcion" rows="5" cols="70" class="form03" > <?php if ($descripcion != "") { ?><?php echo $descripcion; ?><?php } ?> </textarea></td>
    </tr>
    <tr><td>Lugar: *</td>
        <td><input type="text" name="lugar" size="25" maxlength="22"  <?php if ($lugar != "") { ?>value="<?php echo $lugar; ?>"<?php } ?> class="form03" ></td>
    </tr>
    <td>Fecha : *</td>
    
	  <?php if (!$fecha) { ?>
	  <td>  <input name="fecha" type="text" size="10" maxlength="10" onKeyUp = "this.value=formateafecha(this.value);" class="form05a"> [ dd/mm/aaaa ]</td>
    <?php }else{       $d_fch = substr($fecha,8,2);
	                	$m_fch = substr($fecha,5,2);
		                $a_fch = substr($fecha,0,4);
		                $fecha= $d_fch ."-". $m_fch ."-". $a_fch; ?>
	
       <td><input name="fecha" type="text" size="10" maxlength="10"  value="<?php echo $fecha; ?>" class="form05a"> [ dd-mm-aaaa ]</td>
      <?php } ?> 
      <tr></tr><th>Se Ofrece </th>
	 <tr><td>Salario: *</td>
       <td><input type="text" name="salario" size="25" maxlength="30"  <?php if ($salario != "") { ?>value="<?php echo $salario; ?>"<?php } ?> class="form03" ></td>
      </tr>
	    <tr><td>Horario: *</td>
       <td><input type="text" name="horario" size="52" maxlength="45"  <?php if ($salario != "") { ?>value="<?php echo $horario; ?>"<?php } ?> class="form03" ></td>
      </tr>
	  <tr>
	  <tr></tr><th>Requisitos </th>
	 <tr><td>Escolaridad: *</td>
     <td><input type="text" name="escolaridad" size="52" maxlength="45"  <?php if ($escolaridad != "") { ?>value="<?php echo $escolaridad; ?>"<?php } ?> class="form03" ></td>
     </tr>
     <tr><td>Experiencia: </td>
     <td><input type="text" name="experiencia" size="52" maxlength="45"  <?php if ($experiencia != "") { ?>value="<?php echo $experiencia; ?>"<?php } ?> class="form03" ></td>
     <tr></tr><th>Contacto </th>
	 <tr><td>Contacto: *</td>
     <td><input type="text" name="contacto" size="52" maxlength="45"  <?php if ($contacto!= "") { ?>value="<?php echo $contacto; ?>"<?php } ?> class="form03" ></td>
     </tr>
     <tr><td>E-mail: *</td>
     <td><input type="text" name="contacto_mail" size="52" maxlength="38"  <?php if ($contacto_mail != "") { ?>value="<?php echo $contacto_mail; ?>"<?php } ?> class="form03" ></td>
     <tr></tr>
     <td> <?php if ($status == 1) { $a = "checked"; $b="";}else{ $a=""; $b="checked";}  ?>
	      <input type="radio" name="status" checked="true"  <?php echo"$a";?> value="1">activo<br> 
          <input type="radio" name="status"  <?php echo"$b";?> value="0">suspendido</td> <td>&nbsp;</td>    
    <tr></tr>
	    <td>&nbsp;</td>
        <td><input type="submit"  name="submit"  value="&nbsp;&nbsp;<?php if (!$id_vacante) { ?>+Agregar Vacante<?php }else{ ?>Modificar Vacante <?php } ?>&nbsp;&nbsp;" class="form03"></td>
    <tr></tr>
  <?php
  	$query_vaca = mysql_query("SELECT * FROM vacantes order by fecha desc");
	$exist_vaca = mysql_num_rows($query_vaca);

?>
        <!-- query a BD referencia-->
              <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
                <tr>
                <td height="20" class="txt06a" align="right" valign="middle">.:&nbsp;</td>
                <td class="txt06a" valign="middle">Vacante</td>
                <td class="txt06a" valign="middle" >Descripcion</td>
                <td class="txt06a" valign="middle" >lugar</td>
			    <td class="txt06a" valign="middle" >Salario</td>
				 <td class="txt06a" valign="middle" >Fecha</td>
                <td class="txt06a" valign="middle" align="center">.:.</td>
              </tr>

<?php
	if ($exist_vaca > 0) {
		$qry_vaca = mysql_fetch_assoc($query_vaca);
            $i = 0;
			$x = 0;
			do {
 				?>
                <tr>
                  <td height="20" class="txt06c"align="right">&bull;&nbsp;</td>
                  <td class="txt06c"><?php echo $qry_vaca['vacante']; ?></td>
                  <td class="txt06c"><?php echo $qry_vaca['descripcion']; ?></td>
                  <td class="txt06c"><?php echo $qry_vaca['lugar']; ?></td>
				  <td class="txt06c"><?php echo $qry_vaca['salario']; ?></td>
				  <td width="70"class="txt06c"><?php echo $qry_vaca['fecha']; ?></td>
                  <td class="txt06c" align="center"><a href="sfl_vacante_01.php?id_vacante=<?php echo $qry_vaca['id_vacante']?>" class="txt06c">[ editar ]</a></td>
                </tr>
                <?php
			$i ++;
			$x ++;
			} while ($qry_vaca = mysql_fetch_assoc($query_vaca));
			  $rows = mysql_num_rows($query_vaca);
			  if($rows > 0) {
				  mysql_data_seek($query_vaca, 0);
				  $qry_vaca = mysql_fetch_assoc($query_vaca);
			  }

	}else{
?>
              <tr></tr>
<?php
	}
?>
       </table>
            <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
             <td align="center">
                 
				  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
			      <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
       			  <input type="hidden" name="id_vacante" value="<?php echo $id_vacante; ?>">
             </td>
          </table>
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
	require_once('sfl_footer.php');
?>

</body>
</html>
