<?php
	require_once('sfl_security_id_.php');
	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	
	
	$accion = $_GET['accion'];
	$id_cuenta = $_GET['id_cuenta'];
	$id_cat_industria= $_GET['id_cat_industria'];
	
	
	
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

<table width="600"  class="bg_09 txt03"  border="0" cellspacing="1" cellpadding="0" align="center">
 <th class="txt09" align="left">Industria</th>

  <form name="new_cv" action="sfl_cv_06_.php" method="POST" enctype="multipart/form-data">
	  <?php if ($accion == 5) { ?>
      <tr>
        <td colspan="2"><span  class="menu02" ><b><br><br>( * ) Actualice sus datos  y de Clic en Continuar.</b></span></td>
        </tr>
      <?php } ?>
     <tr></tr>
     <td colspan="2"><span  class="menu02"><b><br><br>( * ) Selecione al menos una opcion en la Industria para poder continuar.</b></span></td>
	 <tr></tr><td colspan="2">&nbsp;</td>
     <tr></tr>
     <td align="center" >
     
	 <?php
                    $query_industria = mysql_query("SELECT * FROM cat_industria ORDER BY id_cat_industria ASC");
                    $qry_industria = mysql_fetch_assoc($query_industria);
      ?>
   	      <select name="industria"  size="6" style="width: 200px" onChange="MM_jumpMenu('parent',this,0)" class="">
          <?php if ($id_cat_industria != "") {

                           $query_industria_s = mysql_query("SELECT * FROM cat_industria where id_cat_industria ='" . $id_cat_industria . "'  ");
    					  $qry_industria_s = mysql_fetch_assoc($query_industria_s);
					?>

                       <option value="sfl_cv_06_.php?id_cat_industria=<?php echo $qry_industria_s['id_cat_industria']; ?>"><?php echo $qry_industria_s['industria']; ?></option>

                  <?php   }else{ ?>

	                                    <?php
                       }
                    do {
                    ?>
                       <option value="sfl_cv_06_.php?id_cat_industria=<?php echo $qry_industria['id_cat_industria']; ?>&id_cuenta=<?php echo $id_cuenta;?>">&nbsp;&bull;&nbsp;&nbsp;<?php echo $qry_industria['industria'];?></option>
                  <?php
              } while ($qry_industria = mysql_fetch_assoc($query_industria));
                      $rows_estatus = mysql_num_rows($query_industria);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_industria, 0);
                          $qry_estado = mysql_fetch_assoc($query_industria);
                                            }
                    ?>
           </select> </td>
   
			 <?php

	$query_indus = mysql_query("SELECT * FROM app_industria where id_cuenta ='" . $id_cuenta . "'");
	$exist_indus = mysql_num_rows($query_indus);
     ?> 
        <!-- query a BD referencia -->
             <td> <table width="200" border="0" cellspacing="1" cellpadding="4" align="center" class="bg_09 txt03"> 
                <td height="20" class="txt06a" align="center" valign="middle">.:&nbsp;</td>
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
                  <td width="150" class="txt06c"><?php
				    $cat_industria = $qry_indus['id_cat_industria'];
				  	$query_cat= mysql_query("SELECT * FROM cat_industria  where id_cat_industria ='" . $cat_industria . "'");
					$qry_cat= mysql_fetch_assoc($query_cat); 
	               ?>
				  <?php echo $qry_cat['industria']; ?></td>
                  <td class="txt06c" align="center"><a href="sfl_cv_06_.php?accion=<?php echo"borrar"?>& id_cuenta=<?php echo "$id_cuenta"?> & id_cat_industria=<?php echo $cat_industria?>" class="txt06c">[ borrar]</a></td>
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
	   
            <tr></tr><td colspan="2">&nbsp;</td> <tr></tr> <td  colspan="2 "align="center">
                 
				  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
			      
				 <?php if ( $cat_industria != "") {?>           
			       <input type="button" name="continuar" value="Continuar" class="form03"  onClick="location='sfl_cv_06a.php?id_cuenta=<?php echo $id_cuenta; ?>'">&nbsp;          
                <?php }?>			
		 		  
				  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				  <input type="hidden" name="id_ref" value="<?php echo $id_ref; ?>">
             </td>
         </table>
  </form>
</body>
</html>
