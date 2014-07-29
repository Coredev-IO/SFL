<?php
	require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	
	$accion = $_GET['accion'];
	$id_cuenta = $_GET['id_cuenta'];
	$id_cat_line= $_GET['id_cat_line'];
	$id_line= $_GET['id_line'];

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
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td></tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td></tr>
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
      <a href="sfl_cv_06b.php" type="button" class="btn btn-primary btn-100" ><i class='fa fa-cubes'></i> L&iacute;neas</a>
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
      <div class="box-title letra1">Lineas</div>



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
        <form class="form-horizontal" role="form" name="new_cv" action="sfl_cv_06b_.php" method="post" enctype="multipart/form-data" >
          <!-- Termina Errores -->












<table width="600" border="0" cellspacing="0" cellpadding="0" align="center">
  
	  <?php if ($accion == 5) { ?>
      <tr>
        <td colspan="2"><span  class="menu02"><b><br><br>( * ) Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>
  <form name="new_cv" action="sfl_cv_06b_.php" method="post" enctype="multipart/form-data">


<table width="600" border="0" cellspacing="1" cellpadding="0" align="center" class=" txt03">

      <td colspan="3"><span  class="menu02" ><b><br><br>( * ) Agregue la linea y seleccione el tiempo de acuerdo a su experiencia .</b></span></td>
	  <tr></tr><td colspan="3">&nbsp;</td>
     <tr></tr>
     <td align="center" >
     
	 <?php
                    $query_line = mysql_query("SELECT * FROM cat_line ORDER BY line ASC");
                    $qry_line = mysql_fetch_assoc($query_line);
      ?>
   	      <select name="id_cat_line"  size="10" style="width: 300px" class="form-control">
          <?php if ($id_cat_line != "") {
                    $query_line_s = mysql_query("SELECT * FROM cat_line where id_cat_line ='" . $id_cat_line . "'  ");
    				$qry_line_s = mysql_fetch_assoc($query_line_s);?>
          <option value="<?php echo $qry_line_s['id_cat_line']; ?>"><?php echo $qry_line_s['line']; ?></option>
                  <?php   }else{ ?>
                  <?php
                       }
                    do {
                    ?>
                       <option value="<?php echo $qry_line['id_cat_line']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_line['line'];?></option>
          
		          <?php
              } while ($qry_line = mysql_fetch_assoc($query_line));
                      $rows_estatus = mysql_num_rows($query_line);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_line, 0);
                          $qry_estado = mysql_fetch_assoc($query_line);
                                            }
                    ?>
           </select> </td>
		   <td>  <input type="submit" name="agregar" value="Agregar" class="btn btn-default" >        
</td>
   
			 <?php

	$query_indus = mysql_query("SELECT * FROM app_line where id_cuenta ='" . $id_cuenta . "'");
	$exist_indus = mysql_num_rows($query_indus);
     ?> 
        <!-- query a BD referencia -->
             <td> <table width="200" border="0" cellspacing="1" cellpadding="4" align="center" class=" txt03"> 
                <td height="20" class="txt06a" align="center" valign="middle">&nbsp;</td>
                <td class="txt06a" valign="middle" >Experiencia</td>
                <td class="txt06a" valign="middle" align="center"></td>
              
<?php
	if ($exist_indus > 0) {
		$qry_indus = mysql_fetch_assoc($query_indus);

            $i = 0;
			$x = 0;

			do {

 				?>
                  <tr></tr><td height="20" class="txt06c"align="right">&bull;&nbsp;</td>
                  <td width="450" class="txt06c"><?php
				    $cat_line = $qry_indus['id_cat_line'];
					$id_line = $qry_indus['id_line'];
					
				  	$query_cat= mysql_query("SELECT * FROM cat_line  where id_cat_line ='" . $cat_line . "'");
					$qry_cat= mysql_fetch_assoc($query_cat);
					
					$query_app= mysql_query("SELECT * FROM app_line  where id_line ='" . $id_line . "'");
					$qry_app= mysql_fetch_assoc($query_app);
					 
	               ?>
				  <?php echo $qry_cat['line']; ?><br>
				  <?php echo $qry_app['time_expe_line'];?>
				  
				  <br><select style="width: 200px"name="time_expe_line" class="form03" onChange="MM_jumpMenu('parent',this,0)"><br>
             <option value="">Seleccione el tiempo en linea;.:</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "sin experiencia";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta ;?>">Sin experiencia</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "Menos de seis meses";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">Menos de seis meses</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "6 menor a 1 año";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">6 menor a 1 año</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "1-2 años";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">1-2 años</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "2-3 años";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">2-3 años</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "4-5 años";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">4-5 años</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "5 años menor a 10 años";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">5 años menor a 10 años</option>
             <option value="sfl_cv_06b_.php?time_expe_line=<?php echo "10 años";?>& id_line=<?php echo $qry_indus['id_line'];?>& id_cuenta=<?php echo $id_cuenta;?>">10 años</option>
 
		     </option> </select></td></td>
                  <td class="txt06c" align="center"><a href="sfl_cv_06b_.php?accion=<?php echo"borrar"?>& id_cuenta=<?php echo "$id_cuenta"?> & id_cat_line=<?php echo $cat_line?>" class="txt06c">[borrar]</a></td>
                 <?php
			$i ++;
			$x ++;

			} while ($qry_indus = mysql_fetch_assoc($query_indus));
			  $rows = mysql_num_rows($query_indus);
			  if($rows > 0) {
				  mysql_data_seek($query_indus, 0);
				  $qry_refer = mysql_fetch_assoc($query_indus);
			  }

	}else{
?>
              <tr></tr>
<?php
	}
?>
     
	   
          </table>
              <tr></tr><td colspan="3">&nbsp;</td><tr></tr><td colspan="3 "align="center"> 
                 
				  <input type="button" name="Regresar" value="Regresar" class="btn btn-default" onClick="javascript:window.history.back()">&nbsp;
			      <input type="button" name="continuar" value="Continuar" class="btn btn-primary"  onClick="location='sfl_cv_06c.php?id_cuenta=<?php echo $id_cuenta; ?>'">&nbsp;          
      			  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				 
             </td>
         </table>
  </form>

    </td>
  </tr>
  <tr>
    <td class="padd_02" valign="top">&nbsp;</td>
  </tr>
</table>
</table>
               </table>
<?php
	//require_once('sfl_footer.php');
?>
</body>
</html>
