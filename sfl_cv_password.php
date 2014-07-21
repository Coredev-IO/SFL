<?php
    require_once('sfl_security_id.php');
    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $email = $_GET['email'];
    $fin= $_GET['fin'];
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


<table width="700" border="0" cellspacing="0" cellpadding="0" align="center" class="bg_09 txt03">
  <form name="new_cv" action="sfl_cv_password_.php" method="post" enctype="multipart/form-data">
      
  <!--accion-->
  <?php if ($accion == 2) { ?>
                <tr>
                  <td align="right">&nbsp;</td>
                  <td  class="txt08"><b>La cuenta de email que ha ingresado no existe.</b><br />
                 </td>
                  </tr>
                <?php } ?>  
  <?php if ($accion == 1) { ?>
                <tr>
                  <td align="right">&nbsp;</td>
                  <td  class="txt08"><b>Su nueva contrse&ntilde;a se envió a su e-mail.</b><br />
                 </td>
                  </tr>
                <?php } ?>        
      
       <tr></tr>
      <td class="menu02" colspan="2">Por seguridad su contrase&ntilde;a anterior ser&aacute; eliminada. Su nueva contrse&ntilde;a ser&aacute; enviada a la cuenta de correo electr&oacute;nico que asigno al momento de su registro.</td>
     <tr></tr>
	    <td class="menu02" colspan="2"><strong>Por favor ingrese su cuenta de correo electr&oacute;nico para procesar su solicitud.</strong></td>

      </tr><td colspan="2">&nbsp;</td>
      
     <!--Campos-->
 <th colspan="2"><span ><b> <?php echo $fin?> </b></span></th>
      <tr>
         <td  class="txt09" align="right">E-mail: </td>
                  <td>          
                  <input type="text" name="usr" size="30" maxlength="100" placeholder="ejemplo@de_correo.com" class="form03">&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="submit" value="SOLICITAR NUEVA CONTRSE&Ntilde;A" class="form_bot02">&nbsp;
                  <input type="button" name="cancelar" value="CANCELAR" class="form_bot02" onClick="location='index.php'">          
                  </td>
                <tr>
                  </tr><td colspan="2">&nbsp;</td><tr></tr>
                  <td colspan="2" >A&uacute;n no estoy registrado, <b>"<a  href="sfl_cv_01.php" >deseo registrarme AHORA</a>"</b>.</td>
                </tr><tr></tr> <td colspan="2">&nbsp;</td>


         </form>
        </table>
</table>


<?php
	require_once('sfl_footer.php');
?>

</body>
</html>
