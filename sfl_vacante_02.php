<?php
    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');

    $id_vacante = $_GET['id_vacante'];
	$accion = $_GET['accion'];
    $descripcion= $_GET['descripcion'];
    $lugar = $_GET['lugar'];
    $salario = $_GET['salario'];
    $fecha = $_GET['fecha'];
    
	if ($id_vacante != "") {

		$query_vaca_s = mysql_query("SELECT * FROM vacantes WHERE id_vacante = '$id_vacante'");
		$qry_vaca_s = mysql_fetch_assoc($query_vaca_s);
        $id_vacante = $qry_vaca_s['id_vacante'];
	    $vacante = $qry_vaca_s['vacante'];
        $descripcion = $qry_vaca_s['descripcion'];
		$lugar = $qry_vaca_s['lugar'];
		$salario = $qry_vaca_s['salario'];
        $fecha = $qry_vaca_s['fecha'];
		           
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
<style type="text/css">
.fila_0 { background-color: #FFFFFF;}
.fila_1 { background-color: #E1E8F1;}
</style>

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

<table width="700" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
    <td width="100%" class="padd_02" valign="top">

 <form name="refe" method="post" action="sfl_vacante_01_.php" enctype="multipart/form-data">

 <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">




  <?php
  	$query_vaca = mysql_query("SELECT * FROM vacantes where status = '1' order by fecha desc ");
	$exist_vaca = mysql_num_rows($query_vaca);

?>
        <!-- query a BD referencia-->
              <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
           
<?php
	if ($exist_vaca > 0) {
		$qry_vaca = mysql_fetch_assoc($query_vaca);
            $i = 0;
			$x = 0;
			do {
 				?>
                <tr>
                  <td colspan="2" class="txt06a" width=""><?php echo "$i.-";?><a href="sfl_vacante_02_.php?id_vacante=<?php echo $qry_vaca['id_vacante']?>" class="txt06c"><?php echo $qry_vaca['vacante'];?></a></td><tr></tr>
				  <td colspan="2" class="txt06c"><?php echo $qry_vaca['descripcion'];?></td><tr></tr>
				  <td width="30" class="menu02" >Zona </td>		
                  <td class="fila_<?php echo $i%2 ; ?> " ><?php echo $qry_vaca['lugar'];?></td><tr></tr>
				  <td  class="menu02">Salario</td>
				  <td class="txt06c"><?php echo $qry_vaca['salario'];?></td><tr></tr>
				  <td  class="menu02">Fecha</td>
				  <td class="txt06c" ><?php echo $qry_vaca['fecha'];?></td>
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
    
           
           <td colspan="2">&nbsp;</td><tr></tr>  <td  colspan="2"align="center">
          			  <input type="button" name="Regresar" value="Regresar" class="form03" onClick="javascript:window.history.back()">&nbsp;
			  
             </td>
        
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
