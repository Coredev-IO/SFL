<?php

	$error = $_GET['error'];
	$c_nombre = $_GET['c_nombre'];
	$c_email = $_GET['c_email'];
	$c_tel = $_GET['c_tel'];
	$cia = $_GET['cia'];
	$asunto = $_GET['asunto'];
	$mns = $_GET['mns'];

	require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');

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
    <td><img src="images/sfl_head_int_16.jpg" width="900" height="180" border="0"></td>
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
      
  <form name="contacto_sfl" action="sfl_contact.php" method="post">
    
    <table width="100%" border="0" cellspacing="2" cellpadding="0" class="txt03" align="right">
      
      <? if($error != "") { ?>
      <tr>
        <td colspan="2"><span class="txt06"><b>
          <? if($error == 1) { ?>Uno o m&aacute;s campos requeridos (*) se encuentran vac&iacute;os.<? } ?>
          <? if($error == 2) { ?>"<b><?php echo $c_nombre1; ?>.</b>"<br />Gracias por contactarnos, los datos fueron enviados y en breve un ejecutivo se pondr&aacute; en contacto con usted.<? } ?>
          <? if($error == 3) { ?>El c&oacute;digo de seguridad es erroneo, intente nuevamente.<? } ?>
          </b></span>
          </td>
        </tr>
      <tr>
        <td colspan="2"><img src="images/spacer.gif" width="1" height="5" border="0"></td>
        </tr>
      <? } ?>
      <tr>
        <td>* Su nombre:</td>
        <td><? if($c_nombre != "") { ?><input type="text" name="c_nombre" size="28" maxlength="100" value="<? echo $c_nombre; ?>" class="form03"><? }else{ ?><input type="text" name="c_nombre" size="28" maxlength="100" class="form03"><? } ?></td>
        </tr>
      <tr>
        <td>* Su email:</td>
        <td><? if($c_email != "") { ?><input type="text" name="c_email" size="20" maxlength="100" value="<? echo $c_email; ?>" class="form03"><? }else{ ?><input type="text" name="c_email" size="20" maxlength="100" class="form03"><? } ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;Tel&eacute;fono:</td>
        <td><? if($c_tel != "") { ?><input type="text" name="c_tel" size="15" maxlength="30" value="<? echo $c_tel; ?>" class="form03"><? }else{ ?><input type="text" name="c_tel" size="15" maxlength="30" class="form03"><? } ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;Empresa:</td>
        <td><? if($cia != "") { ?><input type="text" name="cia" size="28" maxlength="100" value="<? echo $cia; ?>" class="form03"><? }else{ ?><input type="text" name="cia" size="28" maxlength="100" class="form03"><? } ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;Motivo del contacto:</td>
        <td><? if($asunto != "") { ?><input type="text" name="asunto" size="28" maxlength="100" value="<? echo $asunto; ?>" class="form03"><? }else{ ?><input type="text" name="asunto" size="28" maxlength="100" class="form03"><? } ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;Mensaje:<br /><br /><img src="sfl_security_img.php" width="100" height="39" border="0"></td>
        <td><? if($mns != "") { ?><textarea name="mns" cols="26" rows="3" class="form03"><? echo $mns; ?></textarea><? }else{ ?><textarea name="mns" cols="26" rows="3" class="form03"></textarea><? } ?></td>
        </tr>
      <tr>
        <td>&nbsp;&nbsp;C&oacute;digo de Seguridad:</td>
        <td><input type="text" name="code1" size="20" class="form03" /></td>
        </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <input type="submit" name="enviar" value="&nbsp;&nbsp;&nbsp;enviar&nbsp;&nbsp;&nbsp;" class="form03">&nbsp;
          <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
          </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
