<?php
	require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	
	
	$accion = $_GET['accion'];
	$id_cuenta = $_GET['id_cuenta'];
	$id_cat_posicion= $_GET['id_cat_posicion'];
	$id_posicion= $_GET['id_posicion'];
	
	
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
</table>
<table width="700" border="0" cellspacing="1" cellpadding="0" align="center" class="bg_09 txt03">
  <tr>
<th class="txt09" align="left">Posición</th><tr></tr>
  <form name="new_cv" action="sfl_cv_06a_.php" method="post" enctype="multipart/form-data">
	  <?php if ($accion == 5) { ?>
      <tr>
        <td colspan="2"><span class="menu02"><b><br><br>( * ) Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>

      <td colspan="3"><span  class="menu02"><b><br><br>( * ) Agregue la Posición y seleccione el tiempo de acuerdo a su experiencia .</b></span></td>
	  <tr></tr><td colspan="3">&nbsp;</td>
     <tr></tr>
     <td align="center" >
     
	 <?php
                    $query_posicion = mysql_query("SELECT * FROM cat_posicion ORDER BY id_cat_posicion ASC");
                    $qry_posicion = mysql_fetch_assoc($query_posicion);
      ?>
   	      <select name="id_cat_posicion"  size="10" style="width: 300px" class="">
          <?php if ($id_cat_posicion != "") {

                          $query_posicion_s = mysql_query("SELECT * FROM cat_posicion where id_cat_posicion ='" . $id_cat_posicion . "'  ");
    					  $qry_posicion_s = mysql_fetch_assoc($query_posicion_s);
					?>

                       <option value="<?php echo $qry_posicion_s['id_cat_posicion']; ?>"><?php echo $qry_posicion_s['posicion']; ?></option>

                  <?php   }else{ ?>

	                                    <?php
                       }
                    do {
                    ?>
                       <option value="<?php echo $qry_posicion['id_cat_posicion']; ?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_posicion['posicion'];?></option>
          
		          <?php
              } while ($qry_posicion = mysql_fetch_assoc($query_posicion));
                      $rows_estatus = mysql_num_rows($query_posicion);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_posicion, 0);
                          $qry_estado = mysql_fetch_assoc($query_posicion);
                                            }
                    ?>
           </select> </td>
		   <td>  <input type="submit" name="agregar" value="Agregar" class="form03" >        
</td>
   
			 <?php

	$query_indus = mysql_query("SELECT * FROM app_posicion where id_cuenta ='" . $id_cuenta . "'");
	$exist_indus = mysql_num_rows($query_indus);
     ?> 
        <!-- query a BD referencia -->
             <td> <table width="200" border="0" cellspacing="1" cellpadding="4" align="center" class="bg_09 txt03"> 
                <td height="20" class="txt06a" align="center" valign="middle">.:.&nbsp;</td>
                <td class="txt06a" valign="middle" >Experiencia</td>
                <td class="txt06a" valign="middle" align="center">.:.</td>
              
<?php
	if ($exist_indus > 0) {
		$qry_indus = mysql_fetch_assoc($query_indus);

            $i = 0;
			$x = 0;

			do {

 				?>
                  <tr></tr><td height="20" class="txt06c"align="right">&bull;&nbsp;</td>
                  <td width="450" class="txt06c"><?php
				    $cat_posicion = $qry_indus['id_cat_posicion'];
					$id_posicion = $qry_indus['id_posicion'];
					
				  	$query_cat= mysql_query("SELECT * FROM cat_posicion  where id_cat_posicion ='" . $cat_posicion . "'");
					$qry_cat= mysql_fetch_assoc($query_cat);
					
					$query_app= mysql_query("SELECT * FROM app_posicion  where id_posicion ='" . $id_posicion . "'");
					$qry_app= mysql_fetch_assoc($query_app);
					 
	               ?>
				  <?php echo $qry_cat['posicion']; ?><br>*** 
				  <?php echo $qry_app['time_expe_pos'];?>***
				  
				  <br><select style="width: 200px"name="time_expe_pos" class="form03" onChange="MM_jumpMenu('parent',this,0)"><br>
             <option value="">Seleccione el tiempo en Puesto;.:</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "sin experiencia";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta ;?>">Sin experiencia</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "Menos de seis meses";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">Menos de seis meses</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "6 menor a 1 año";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">6 menor a 1 año</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "1-2 años";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">1-2 años</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "2-3 años";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">2-3 años</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "4-5 años";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">4-5 años</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "5 años menor a 10 años";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">5 años menor a 10 años</option>
             <option value="sfl_cv_06a_.php?time_expe_pos=<?php echo "10 años";?>& id_posicion=<?php echo $qry_indus['id_posicion'];?>& id_cuenta=<?php echo $id_cuenta;?>">10 años</option>
 
		     </option> </select></td></td>
                  <td class="txt06c" align="center"><a href="sfl_cv_06a_.php?accion=<?php echo"borrar"?>& id_cuenta=<?php echo "$id_cuenta"?> & id_cat_posicion=<?php echo $cat_posicion?>" class="txt06c">[ borrar]</a></td>
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
            <tr></tr> <td colspan="3">&nbsp;</td><tr></tr><td align="center" colspan="3"align="center">  
				  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
			      <input type="button" name="continuar" value="Continuar" class="form03"  onClick="location='sfl_cv_06b.php?id_cuenta=<?php echo $id_cuenta; ?>'">&nbsp;          
      			  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				 
             </td>
  </form>

</table>

</body>
</html>
