<?php
	require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	$id_cuenta = $_GET['id_cuenta'];
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
	require_once('sfl_menu_01cv.php');
?>
<table width="900" border="0" cellspacing="0" cellpadding="0" align="center"><tr>
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td></tr><tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td></tr>
    <tr><td></td></tr><tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td></tr>
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
      <a href="sfl_cv_06c.php" type="button" class="btn btn-primary btn-100"><i class='fa fa-cab'></i> &Aacute;reas de Expericia I</a>
      <a href="sfl_cv_07.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-car'></i> &Aacute;reas de Expericia II</a>
      <a href="sfl_cv_08.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-graduation-cap'></i> Histotial Acad&eacute;mico</a>
      <a href="sfl_cv_08a.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-institution'></i> Otros Estudios/Certificaciones</a>
      <a href="sfl_cv_08b.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-file-word-o'></i> Habilidades tecnol&oacute;gicas</a>
      <a href="sfl_cv_09.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-briefcase'></i> Historial Laboral</a>
      <a href="sfl_cv_10.php" type="button" class="btn btn-default btn-100" disabled><i class='fa fa-facebook-square'></i> Intereses</a>
    </div>
   
     </div>

    <div class="col-md-9">
      <div class="box-title letra1">Areas de Experiencia I</div>



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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_06c_.php" method="post" enctype="multipart/form-data" >
          <!-- Termina Errores -->









	<td width="100%" class="padd_02" valign="top"> </td>

<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="bg_09 txt03">

<td colspan="3"><span  class="menu02"><b><br><br> Agregue la opcion de acuerdo a su experiencia </b></span></td><tr></tr>  
	  <?php if ($accion == 1) { ?>
      <tr><td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio no fué seleccionado;.</b></span></td></tr>        			
      <?php } ?>
	  	  <?php if ($accion == 5) { ?>
      <tr>
        <td colspan="3"><span  class="menu02"><b>( * ) Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>    

	  <!--************** Canales  ************************************-->
	  
	   <td   class="menu02" align="center"width="250"><br>Canales/Clientes visitados<br><br>
   <?php $query_canales = mysql_query("SELECT * FROM cat_canales ORDER BY canales ASC");
         $qry_canales = mysql_fetch_assoc($query_canales); ?>
<select name="canales" class="form-control" size="5" style="width: 250px">
   <?php  do { ?>
              <option value="<?php echo $qry_canales['id_cat_canales']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_canales['canales'];?></option>
   <?php } while ($qry_canales = mysql_fetch_assoc($query_canales)); ?>
 </select> </td> 
		  <td  width="100" align="center"><input type="submit" name="submit" value="agregar" class="btn btn-default" /></td> 
		  <td  align="left" class="bg"width="250">        
	<?php $query_canales= mysql_query("SELECT * FROM app_canales, cat_canales WHERE app_canales.id_cat_canales = cat_canales.id_cat_canales and  id_cuenta ='" . $id_cuenta. "'");
          $qry_canales = mysql_fetch_assoc($query_canales); ?>             
    <?php   do { ?> <br> &nbsp;&bull;&nbsp;&nbsp; 
			<a href="sfl_cv_06c_.php?accion=<?php echo "borrar";?> & id_cuenta=<?php echo "$id_cuenta";?> & id_cat_canales=<?php echo  $qry_canales['id_cat_canales'];?>" class="txt06c"><?php echo $qry_canales['canales']; ?></a>
    <?php   } while ($qry_canales = mysql_fetch_assoc($query_canales)); ?> </td><tr></tr>
	     
         <!-- ****************************** Especialidad   *************************** -->
		 
	   <td  align="center" class="menu02"><br> Especialidades Visitadas <br><br>
     <?php $query_especialidad = mysql_query("SELECT * FROM cat_especialidad ORDER BY especialidad ASC");
           $qry_especialidad = mysql_fetch_assoc($query_especialidad); ?>
<select name="especialidad" class="form-control" size="5" style="width: 250px" >
      <?php   do {?>
         <option value="<?php echo $qry_especialidad['id_cat_especialidad']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_especialidad['especialidad'];?></option>
       <?php } while ($qry_especialidad = mysql_fetch_assoc($query_especialidad)); ?>
</select> </td> 
		     <td align="center"><input type="submit" name="submit" value="agregar" class="btn btn-default" />&nbsp;</td>  
             <td>
   <?php   
		$query_especialidad= mysql_query("SELECT * FROM app_especialidad, cat_especialidad WHERE app_especialidad.id_cat_especialidad = cat_especialidad.id_cat_especialidad and  id_cuenta ='" . $id_cuenta. "'");
        $qry_especialidad = mysql_fetch_assoc($query_especialidad);		   
		do {   ?> <br>&nbsp;&bull;&nbsp;&nbsp;
        <a href="sfl_cv_06c_.php?accion=<?php echo"borrar";?> & id_cuenta=<?php echo "$id_cuenta";?> & id_cat_especialidad=<?php echo $qry_especialidad['id_cat_especialidad'];?>" class="txt06c"> <?php echo $qry_especialidad['especialidad']; ?> </a>                  
    <?php
        } while ($qry_especialidad = mysql_fetch_assoc($query_especialidad)); ?>
         
		 <!--****************************** Producto ************************************************** --> 
		 
		   <tr></tr><td align="center"  class="menu02"><br> Producto <br><br>
     <?php
           $query_producto = mysql_query("SELECT * FROM cat_producto ORDER BY producto ASC");
           $qry_producto = mysql_fetch_assoc($query_producto);?>
 <select name="producto"  class="form-control" size="5" style="width: 250px">
     <?php do {  ?>
   <option value="<?php echo $qry_producto['id_cat_producto']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_producto['producto'];?></option>
     <?php } while ($qry_producto = mysql_fetch_assoc($query_producto)); ?>
 </select> </td> 
		      <td align="center"><input type="submit" name="submit" value="agregar" class="btn btn-default" />&nbsp;</td>	  
               <td>
	<?php    $query_producto= mysql_query("SELECT * FROM app_producto, cat_producto WHERE app_producto.id_cat_producto = cat_producto.id_cat_producto and  id_cuenta ='" . $id_cuenta. "'");
             $qry_producto = mysql_fetch_assoc($query_producto);
             $id_cat_producto = $qry_producto['id_cat_producto'];
             do {	?> <br> &nbsp;&bull;&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=<?php echo"borrar";?> & id_cuenta=<?php echo "$id_cuenta";?> & id_cat_producto=<?php echo $qry_producto['id_cat_producto']; ?>" class="txt06c"> <?php echo $qry_producto['producto']; ?> </a>                                 
     <?php   } while ($qry_producto = mysql_fetch_assoc($query_producto));   ?></td>
        
		 <!--****************************** estados trabajados ************************************************** --> 
      
	</tr><td align="center" class="menu02"><br>Estados trabajados<br><br>
     <?php  $query_estado = mysql_query("SELECT * FROM cat_estados ORDER BY id_estado ASC");
             $qry_estado = mysql_fetch_assoc($query_estado); ?>
 <select name="estado"  class="form-control" size="5" style="width: 200px">
     <?php  do {   ?>
 <option value="<?php echo $qry_estado['id_estado']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_estado['estado'];?></option>
     <?php } while ($qry_estado = mysql_fetch_assoc($query_estado)); ?>
 </select> </td><td  align="center"><input type="submit" name="submit" value="agregar" class="btn btn-default" />&nbsp;</td>
 <td>
	<?php    $query_edo= mysql_query("SELECT * FROM app_edo_job, cat_estados WHERE app_edo_job.id_estado = cat_estados.id_estado and  id_cuenta ='" . $id_cuenta. "'");
             $qry_edo = mysql_fetch_assoc($query_edo);
             $id_cat_edo = $qry_edo['id_edo'];
             do {	?> <br> &nbsp;&bull;&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=<?php echo"borrar";?> & id_cuenta=<?php echo "$id_cuenta";?> & estado=<?php echo $qry_edo['id_estado']; ?>" class="txt06c"> <?php echo $qry_edo['estado']; ?> </a>                                 
     <?php   } while ($qry_edo = mysql_fetch_assoc($query_edo));   ?></td>
	   
 <!--****************************** zona trabajadas ************************************************** -->		   
			   
	<tr></tr><td align="center" class="menu02"><br>Zonas Trabajadas<br><br>
      <?php $query_zonas = mysql_query("SELECT * FROM cat_zonas ORDER BY id_cat_zonas ASC");
             $qry_zonas = mysql_fetch_assoc($query_zonas); ?>
 <select name="zona_job" class="form-control" size="5" style="width: 200px">
       <?php  do { ?>
 <option value="<?php echo $qry_zonas['id_cat_zonas']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_zonas['zonas'];?></option>
         <?php
              } while ($qry_zonas = mysql_fetch_assoc($query_zonas));     ?>
 </select>	 
	  <td align="center"><input type="submit" name="submit" value="agregar" class="btn btn-default" />&nbsp;</td><td>
	  <?php  $query_zona= mysql_query("SELECT * FROM app_zona_job, cat_zonas WHERE app_zona_job.id_cat_zona = cat_zonas.id_cat_zonas and  id_cuenta ='" . $id_cuenta. "'");
             $qry_zona = mysql_fetch_assoc($query_zona);
         
             do {	?> <br> &nbsp;&bull;&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=<?php echo"borrar";?> & id_cuenta=<?php echo "$id_cuenta";?> & id_cat_zona=<?php echo $qry_zona['id_cat_zonas']; ?>" class="txt06c"> <?php echo $qry_zona['zonas']; ?> </a>                                 
     <?php   } while ($qry_zona = mysql_fetch_assoc($query_zona));   ?></td><tr></tr>
	
      
	  
 <!--******************************Ciudades tabajadas ************************************************** -->		  
	  
	  <td align="center"  class="menu02"><br>ciudades trabajadas <br><br>
	  <?php $query_ciudades = mysql_query("SELECT * FROM cat_ciudades ORDER BY ciudades ASC");
            $qry_ciudades = mysql_fetch_assoc($query_ciudades); ?>
 <select name="ciudad_job" class="form-control" size="5" style="width: 200px">
       <?php  do {  ?>
 <option value="<?php echo $qry_ciudades['id_cat_ciudades']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_ciudades['ciudades'];?></option>
        <?php } while ($qry_ciudades = mysql_fetch_assoc($query_ciudades)); ?>
 </select> </td> <td align="center"><input type="submit" name="submit" value="agregar" class="btn btn-default" />&nbsp;</td><td>
  <?php    $query_cd= mysql_query("SELECT * FROM app_ciudades_job, cat_ciudades WHERE app_ciudades_job.id_cat_ciudades = cat_ciudades.id_cat_ciudades and  id_cuenta ='" . $id_cuenta. "'");
             $qry_cd= mysql_fetch_assoc($query_cd);
             
             do {	?> <br> &nbsp;&bull;&nbsp;&nbsp;
             <a href="sfl_cv_06c_.php?accion=<?php echo"borrar";?> & id_cuenta=<?php echo "$id_cuenta";?>& id_cat_ciudades=<?php echo $qry_cd['id_cat_ciudades']; ?>" class="txt06c"> <?php echo $qry_cd['ciudades']; ?> </a>                                 
     <?php   } while ($qry_cd = mysql_fetch_assoc($query_cd));   ?></td><tr></tr>

	        
		  
		  
		  
		 
         <td colspan="3">&nbsp;</td> <tr></tr><td colspan="3">&nbsp;</td><tr></tr><td colspan="3" align="center">
         <input type="button" name="Regresar" value="Regresar" class="btn btn-default" onClick="javascript:window.history.back()">&nbsp;                
         <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default">
		 <input type="button" name="continuar" value="Continuar" class="btn btn-primary"  onClick="location='sfl_cv_07.php?id_cuenta=<?php echo $id_cuenta; ?>'">&nbsp;        
		 <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>"></td>
       
  </form>

</table>


</body>
</html>
