<?php
    require_once('conn/connect.php');
	require_once('sfl_security_id_.php');
	require_once('sfl_fch_hra.php');

    $id_cuenta = $_SESSION['id_cuenta'] ;
	$accion = $_GET['accion'];
    $rfc= $_GET['rfc'];
    $curp = $_GET['curp'];
    $no_imss = $_GET['no_imss'];
    $no_clinica = $_GET['no_clinica'];
    $id_ref=$_GET['id_ref'];
    $ref_nom=$_GET['ref_nom'];
    $ref_dom=$_GET['ref_dom'];
    $ref_tel=$_GET['ref_tel'];
    $ref_ocu=$_GET['ref_ocu'];
    $time_con=$_GET['time_con'];

	if ($id_ref != "") {

		$query_ref_s = mysql_query("SELECT * FROM cat_ref_persona WHERE id_cuenta = '$id_cuenta' and id_ref ='$id_ref' ");
		$qry_ref_s = mysql_fetch_assoc($query_ref_s);
        $id_ref = $qry_ref_s['id_ref'];
        $id_cuenta = $qry_ref_s['id_cuenta'];
		$ref_nom = $qry_ref_s['ref_nom'];
		$ref_dom = $qry_ref_s['ref_dom'];
        $ref_tel = $qry_ref_s['ref_tel'];
		$ref_ocu = $qry_ref_s['ref_ocu'];
        $time_con = $qry_ref_s['time_con'];
                    
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



<div class="container">
  <hr>
  <div class="row">
    <div class="col-md-3">
    <div class="box-menu">
      <a href="sfl_cv_02.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-user'></i> Datos Personales</a>
      <a href="sfl_cv_02a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-map-marker'></i> Direcci&oacute;n</a>
      <a href="sfl_cv_03.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-phone'></i> Contacto</a>
      <a href="sfl_cv_04.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-home'></i> Referencias</a>
      <a href="sfl_cv_05.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-thumbs-up'></i> Perfilamiento y Experiencia</a>
      <a href="sfl_cv_06.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cog'></i> Industria</a>
      <a href="sfl_cv_06a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-child'></i> Posici&oacute;n</a>
      <a href="sfl_cv_06b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cubes'></i> L&iacute;neas</a>
      <a href="sfl_cv_06c.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-cab'></i> &Aacute;reas de Expericia I</a>
      <a href="sfl_cv_07.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-graduation-cap'></i> Histotial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title">Referencias</div>

<!--  -->
<?php if ($accion == 1) { ?>

  <tr>
    <td  colspan="2"class="txt08"><b>Error.</b> Alg&uacute;n campo obligatorio se encuentra vac&iacute;o.</td>
  </tr>
<?php } ?>
<?php if ($accion == 2) { ?>

  <tr>
    <td class="txt08"><b>Gracias.</b> La referencia se actualizo.</td>
  </tr>
<?php } ?>

<?php if ($accion == 3) { ?>
  <tr>
    <td class="txt08"><b>Gracias.</b> El registro se gener&oacute; con exito. </td>
  </tr>

<?php  } ?>

<?php if ($accion == 4) { ?>
      <?php } ?>
	  
     <?php if ($accion_up == 5) { ?>
      <tr>
        <td colspan="2"><span  class="menu02"><b>( * ) Actualice sus datos  y de Click en Continuar.</b></span></td><tr></tr>
		<td colspan="2"><span  class="menu02"><b>( ** ) Recuerde de dar Click en "Nueva referencia" paras poder agregar .</b></span></td><tr></tr>
		<td colspan="2">&nbsp;</td>
        </tr>
      <?php } ?>
<!--  -->

<div class="box-formulario">
 <form name="refe" role="form" class="form-horizontal" method="post" action="sfl_cv_04_.php" enctype="multipart/form-data">



      <div class="form-group">
            <label for="ref_nom" class="col-sm-4 control-label">Nombre :* </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="ref_nom" size="50" maxlength="100"  <?php if ($ref_nom != "") { ?>value="<?php echo $ref_nom; ?>"<?php } ?> class="form-control" placeholder='Nombre ' autofocus>

            </div>
          </div>

      
      <div class="form-group">
            <label for="ref_dom" class="col-sm-4 control-label">Domicilio : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="ref_dom" size="50" maxlength="100"  <?php if ($ref_dom != "") { ?>value="<?php echo $ref_dom; ?>"<?php } ?> class="form-control" placeholder='Domicilio '>

            </div>
          </div>

      <div class="form-group">
            <label for="ref_tel" class="col-sm-4 control-label">Telefono :* </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="ref_tel" size="18" maxlength="15"  <?php if ($ref_tel != "") { ?>value="<?php echo $ref_tel; ?>"<?php } ?> class="form-control" placeholder='Telefono ' >

            </div>
          </div>
          

    <div class="form-group">
            <label for="ref_ocu" class="col-sm-4 control-label">Ocupacion : </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="ref_ocu" size="25" maxlength="30"  <?php if ($ref_ocu != "") { ?>value="<?php echo $ref_ocu; ?>"<?php } ?> class="form-control" placeholder='Ocupacion ' >

            </div>
          </div>

      <div class="form-group">
            <label for="time_con" class="col-sm-4 control-label">Tiempo de conocerlos :* </label>
              <div class="col-sm-8">
                

              <input onkeypress="return event.keyCode!=13"  type="text" name="time_con" size="3" maxlength="2"  <?php if ($time_con != "") { ?>value="<?php echo $time_con; ?>"<?php } ?> class="form-control" placeholder='Años ' >

            </div>
          </div>            




<!-- HACER UN TOOLTIP EN LA IMAGEN DE AYUDA CON LA LEYENDA DEL LABEL -->
<div class="form-group">
      <label for="ref_ocu" class="col-sm-4 control-label">**Ingresa al menos una referencia para poder continuar** : </label>
      <div class="col-sm-8">
        <input type="submit" name="submit" value="&nbsp;&nbsp;<?php if (!$id_ref) { ?>+Nueva Referencia<?php }else{ ?>Actualizar Referencia <?php } ?>&nbsp;&nbsp;" class="btn btn-default right" onClick="javascript:window.history.back()">&nbsp;
        <img class="right" src="images/ayuda.png" alt="ayuda", height="25px" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
      </div>
      
</div> 







    <tr>
        <td colspan="2">&nbsp;</td>
		 <?php if ($accion_up == 6)  {?>           
		 
        </tr>
		  <?php }?>			
	 <?php

	$query_refer = mysql_query("SELECT * FROM cat_ref_persona where id_cuenta ='" . $id_cuenta . "'");
	$exist_refer = mysql_num_rows($query_refer);

     ?>
        <!-- query a BD referencia-->
              <table width="600" align="center" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
                <tr>
                <td height="20" class="txt06a" align="right" valign="middle">&nbsp;</td>
                <td class="txt06a" valign="middle">Nombre</td>
                <td class="txt06a" valign="middle" >Domicilio</td>
                <td class="txt06a" valign="middle" >telefono</td>
                <td class="txt06a" valign="middle" align="center"></td>
              </tr>

<?php
	if ($exist_refer > 0) {
		$qry_refer = mysql_fetch_assoc($query_refer);

            $i = 0;
			$x = 0;

			do {

 				?>
                <tr></tr>
                  <td height="20" class="txt06c"align="right">&bull;&nbsp;</td>
                  <td class="txt06c"><?php echo $qry_refer['ref_nom']; ?></td>
                  <td class="txt06c"><?php echo $qry_refer['ref_dom']; ?></td>
                  <td class="txt06c"><?php echo $qry_refer['ref_tel']; ?></td>
                  <td class="txt06c" align="center"><a href="sfl_cv_04.php?id_ref=<?php echo $qry_refer['id_ref']?>& id_cuenta=<?php echo $id_cuenta?>" class="txt06c">[ editar ]</a></td>
                 <?php
			$i ++;
			$x ++;

			} while ($qry_refer = mysql_fetch_assoc($query_refer));
			  $rows = mysql_num_rows($query_refer);
			  if($rows > 0) {
				  mysql_data_seek($query_refer, 0);
				  $qry_refer = mysql_fetch_assoc($query_refer);
			  }

	}else{
?>
      
<?php
	}
?>
           
             <tr></tr> <tr></tr><td colspan="5">&nbsp;</td><tr></tr><td colspan="5" align="center">       
				  <input type="button" name="Regresar" value="Regresar" class="btn btn-primary" onClick="javascript:window.history.back()">&nbsp;


			      <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default">
                <?php if (($accion == 2) or ($accion == 3 )or ($accion_up == 5 ))  {?>  


			       <input type="button" name="continuar" value="Continuar" class="btn btn-primary"  onClick="location='sfl_cv_05.php?id_cuenta=<?php echo $id_cuenta; ?>& accion=<?php echo $accion?>'">&nbsp;    
                                                          	 
			    <?php }?>			
				  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				  <input type="hidden" name="id_ref" value="<?php echo $id_ref; ?>">
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
	//require_once('sfl_footer.php');
?>

</body>
</html>
