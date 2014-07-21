<?php
//require_once('sfl_security_id.php');

$accion = $_GET['accion'];

?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" class="bg_01 padd_01" valign="middle">
    
    <form name="acceso_users" action="sfl_id-acceso_01.php" method="post">
    
    <table width="450" border="0" cellspacing="0" cellpadding="0" align="right">
      <tr> <?php if ($id_login != 1) {?>
        <td align="center" class="txt01">Acceso:</td>
        <td width="5"><img src="images/spacer.gif" width="5" height="1" border="0"></td>
        <td><input type="text" name="usr" size="30" maxlength="50" placeholder="Usuario" class="form01" /></td>
        <td><input type="password" name="psw" size="10" maxlength="20" placeholder="Contrase&ntilde;a" class="form01" /></td>
        <td><input type="submit" name="submit" value="&nbsp;&nbsp;entrar&nbsp;&nbsp;" class="form01" /></td>
        <td width="5"><img src="images/spacer.gif" width="5" height="1" border="0"></td>
        <td width="30"><img src="images/spacer.gif" width="30" height="1" border="0"></td>
        <td width="22"><a href="#" target="_blank"><img src="images/sfl_redes_01.png" name="redes01" width="22" height="22" border="0" onmouseover="MM_swapImage('redes01','','images/sfl_redes_01a.png',1)" onmouseout="MM_swapImgRestore()"></a></td>
        <td width="5"><img src="images/spacer.gif" width="5" height="1" border="0"></td>
        <td width="22"><a href="#" target="_blank"><img src="images/sfl_redes_02.png" name="redes02" width="22" height="22" border="0" onmouseover="MM_swapImage('redes02','','images/sfl_redes_02a.png',1)" onmouseout="MM_swapImgRestore()"></a></td>
        <td width="5"><img src="images/spacer.gif" width="5" height="1" border="0"></td>
        <td width="22"><a href="#" target="_blank"><img src="images/sfl_redes_03.png" name="redes03" width="22" height="22" border="0" onmouseover="MM_swapImage('redes03','','images/sfl_redes_03a.png',1)" onmouseout="MM_swapImgRestore()"></a></td>
   	  </tr>	<?php }?>
    </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right" valign="bottom" class="txt04"><b><?php if ($id_login == 1) { echo "Bienvenido:  ";echo $_SESSION['nombre']; ?> - <?php echo $_SESSION['id_cuenta']; ?> <?php echo $_SESSION['sesion_apellidos']; }else{ ?> Bienvenido <?php } ?></b>&nbsp;&nbsp;||&nbsp;&nbsp;<?php echo $fch_up2; ?></td>
            <td rowspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" valign="top" class="txt04">
                <?php if ($id_login == 1) { echo $_SESSION['sesion_user']; ?>  <a href="sfl_id_acceso_x.php" class="txt04">Cerrar sesi&oacute;n</a>
                <?php }else{ ?> :. <?php } ?></td>
          </tr>
         <td align="right" valign="top"   class="txt04"> <?php if ($accion == 6) { ?>- Los datos de acceso son incorrectos
		<a href="sfl_cv_password.php" class="txt01">Olvide mi contrase&ntilde;a</a></td>.<?php } ?>
	    </table>
   
    </form>
    
    </td>
  </tr>
  <tr>
    </tr>
  <tr>
    <td>
    
      </td>
  </tr>
</table>
