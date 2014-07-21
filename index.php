<?php
  
    require_once('conn/connect.php');
	//require_once('conn/connect_1.php');
	$error = $_GET['error'];
	$c_nombre = $_GET['c_nombre'];
	$c_email = $_GET['c_email'];
	$c_tel = $_GET['c_tel'];
	$cia = $_GET['cia'];
	$asunto = $_GET['asunto'];
	$mns = $_GET['mns'];

	require_once('sfl_fch_hra.php');

	//Se detecta la IP del usuario
		
	if (getenv("HTTP_X_FORWARDED_FOR")){
		$ip = getenv("HTTP_X_FORWARDED_FOR");
		$client = gethostbyaddr($_SERVER['HTTP_X_FORWARDED_FOR']);
	}else{
		$ip = getenv("REMOTE_ADDR");
		$client = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	}
	$str = preg_split("/\./", $client);
	$i = count($str);
	$x = $i - 1;
	$n = $i - 2;
	$isp = $str[$n] . "." . $str[$x];
	
	/*
	
	$insert_count="INSERT INTO count_visit(
	id_visita,
	fch_visita,
	ip
	) VALUES (
	NULL,
	'$fch_up4',
	'$ip'
	)";
	mysql_query($insert_count);
	
	*/

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

<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('images/sfl_vacantes_01a.jpg','images/sfl_bot_vacantes_01a.jpg')">

<?php
 require_once('sfl_head.php');
?>

<?php
	require_once('sfl_menu_01.php');
?>

<?php
	require_once('sfl_slide_01.php');
?>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td class="padd_02 txt03a" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="padd_l">Impulsamos de manera exitosa las Ventas de nuestros Socios Comerciales y maximizamos la rentabilidad de nuestros proyectos a trav&eacute;s de:</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <ul>
            <li>Fuerzas de Ventas de Alto Impacto en toda la cadena de valor.</li>
            <li>Selecci&oacute;n especializada de Talento Comercial.</li>
            <li>Capacitaci&oacute;n y Desarrollo exitoso de nuestros equipos de Ventas.</li>
            <li>Efectividad en la Productividad de nuestras Fuerzas de Ventas.</li>
            <li>Estrategias Comerciales Contundentes.</li>
            </ul>
          </td>
      </tr>
    </table>
    
    </td>
  </tr>
</table>


<!--

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="3"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
  <tr>
    <td width="385" valign="top"><a href="sfl_cv_01.php"><img src="images/sfl_vacantes_01.jpg" name="vacantes" width="385" height="90" border="0" onmouseover="MM_swapImage('vacantes','','images/sfl_vacantes_01a.jpg',1)" onmouseout="MM_swapImgRestore()"></a></td>
    <td width="425" valign="top" class="bg_01 padd_01">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" class="txt01">NUESTRAS VACANTES M&Aacute;S RECIENTES</td>
      </tr>
      <tr>
        <td class="bg_img_03"><img src="images/spacer.gif" width="1" height="2" border="0"></td>
      </tr>
      <tr>
        <td><img src="images/spacer.gif" width="1" height="10" border="0"></td>
      </tr>
      <tr>
         
	-->	

  <?php
  	$query_vaca = mysql_query("SELECT * FROM vacantes where status ='1' order by RAND() LIMIT 2 ");
	$exist_vaca = mysql_num_rows($query_vaca);

?>
        <!-- query a BD referencia-->
              <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
            
<?php
	if ($exist_vaca > 0 && 1==2) {
		$qry_vaca = mysql_fetch_assoc($query_vaca);
            $i = 0;
			$x = 0;
			do {
			
			$vacante_s=$qry_vaca['vacante'];
			$vacante=substr("$vacante_s", 0,32);
		
 				?>
                <tr>
                  
                  <td class="" align="left"><?php echo $vacante; ?> ...</td>
                  <td class="txt01"><?php echo $qry_vaca['lugar']; ?>
				  <td class="txt01" width="50"><a href="sfl_vacante_02_.php?id_vacante=<?php echo $qry_vaca['id_vacante']?>" class="txt06c">[Ver más]</a></td>
				      
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
      
	<!--
      </tr>
    </table>
    
    </td>
    <td width="90" valign="top"><a href="sfl_vacante_02.php"><img src="images/sfl_bot_vacantes_01.jpg" name="bot_vacantes" width="90" height="90" border="0" onmouseover="MM_swapImage('bot_vacantes','','images/sfl_bot_vacantes_01a.jpg',1)" onmouseout="MM_swapImgRestore()"></a></td>
  </tr>
</table>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/spacer.gif" width="1" height="30" border="0"></td>
  </tr>
</table>

 -->


<?php
	require_once('sfl_footer.php');
?>
<p></p>
</body>
</html>
