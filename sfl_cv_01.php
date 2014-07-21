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
	require_once('sfl_head.php');
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
      <table  align="center" width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" class="txt06a">Te invitamos a formar parte de nuestro equipo de profesionales que conforman las Fuerzas de Ventas de M&aacute;s Alto Impacto en M&eacute;xico enfocadas en la&nbsp; generaci&oacute;n de demanda y venta en toda la cadena de valor farmac&eacute;utica y de la salud.</td>
        </tr>
        <tr>
          <td height="30" colspan="3" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td width="40%" class="txt03" valign="top">Sabemos que brindar un servicio integral para nuestros Socios Comerciales es muy importante por lo que tambi&eacute;n nos enfocamos en posiciones, gerenciales, administrativas y operativas de la industria farmac&eacute;utica y de la salud. <strong>Si tu buscas oportunidades en este &aacute;mbito tambi&eacute;n te buscamos a ti.</strong></td>
          <td width="40" class="txt03"><img src="images/spacer.gif" width="30" height="1" border="0"></td>
          <td width="50%" class="txt03" valign="top">En <strong>Sales Force Leasing Group</strong>, reconocemos que la pieza fundamental en toda organizaci&oacute;n, es el factor humano, por ello sabemos estamos comprometido en responder y atender a quienes conforman nuestros proyectos y fuerzas de ventas de manera formal, siempre atendiendo a sus necesidades, asegurando que forman parte de una empresa seria, y apoy&aacute;ndolo en su b&uacute;squeda de desarrollo y superaci&oacute;n profesional.</td>
        </tr>
        <tr>
          <td height="40" colspan="3" class="txt03">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" class="txt03"><strong>Sales Force Leasing Group es una excelente fuente de oportunidades de trabajo</strong>, ya que constantemente estamos conformando equipos de ventas en diferentes proyectos en la industria farmac&eacute;utica. Por ello, te invitamos&nbsp; a formar parte de nuestro equipo. Reg&iacute;strate en nuestra Base de Candidatos y agrega tu CV a trav&eacute;s del siguiente formulario.</td>
        </tr>
        <tr>
          <td height="40" colspan="3" class="txt03">&nbsp;</td>
        </tr>
      </table>

<table width="500" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
  <form name="new_cv" action="sfl_cv_01_.php" method="post" enctype="multipart/form-data">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bg_09 txt03">
      
  <!--accion-->

      <?php if ($accion == 1) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute o contraseñas no coinciden;.</b></span></td>
        </tr>
      <?php } ?>
      
      <?php if ($accion == 2) { ?>

     <tr>
      <td colspan="2"><span class="txt08"><b>El email que desea dar de alta ya se encuentra en la base de datos.</b></span></td>
      </tr>
     <?php } ?>
           
       <tr></tr>
      <td colspan="2">&nbsp;</td>
     <tr></tr>
      <td  align="center"colspan="2"><span   class="menu02"><b>Para poder registrar tus datos, se requiere dar de alta una cuenta.</b></span></td>
      </tr><td colspan="2">&nbsp;</td>
      
     <!--Campos-->
 <th colspan="2"><span class="txt08"><b> <?php echo $fin?> </b></span></th>
      <tr>
        <td>Correo electrónico: *</td>
        <td><input type="text" name="email" size="50" maxlength="40" <?php if ($email != "") { ?>value="<?php echo $email; ?>"<?php } ?> class="form03">
      </tr>
      <tr>
        <td>Contrase&ntilde;a: *</td>
        <td><input type="password" name="passw" size="10" maxlength="20" class="form03"/></td>
      </tr>
      <tr>
        <td>Confirmar contraseña *</td>
        <td><input type="password" name="conf_passw" size="10" maxlength="20" class="form03" /></td>
      </tr>
      <tr>
      <tr>
        <td colspan="2">&nbsp;</td>
   
      </tr>

        <td colspan="2" align="center">
                  <input type="submit" name="submit" value="Continuar" class="form03" />&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
                  <input type="hidden" name="id_aduana" value="<?php echo $id_cuenta; ?>">
       </td>


         </form>
        </table>
        <td>
            </td>
        </tr>

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
