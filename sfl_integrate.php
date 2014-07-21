<?php

	$accion = $_GET['accion'];

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

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
      
  <form name="new_cv" action="files/sfl_new_cv_01_.php" method="post" enctype="multipart/form-data">
    
    <table width="100%" border="0" cellspacing="1" cellpadding="4" class="bg_09 txt03">
      
      <?php if ($accion == 1) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute;.</b></span></td>
        </tr>
      <?php } ?>
      
      <tr>
        <td>Nombre: *</td>
        <td><input type="text" name="nombre" size="30" maxlength="100" class="form03" /></td>
        </tr>
      <tr>
        <td>Apellidos: *</td>
        <td><input type="text" name="apellidos" size="30" maxlength="100" class="form03" /></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Usuario: *</td>
        <td><input type="text" name="usr" size="10" maxlength="20" class="form03" /></td>
        </tr>
      <tr>
        <td>Contrase&ntilde;a: *</td>
        <td><input type="password" name="psw" size="10" maxlength="20" class="form03" /></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>email: *</td>
        <td><input type="text" name="email" size="25" maxlength="100" class="form03" /></td>
        </tr>
      <tr>
        <td>Tel&eacute;fono:</td>
        <td><input type="text" name="tel" size="20" maxlength="50" class="form03" /></td>
        </tr>
      <tr>
        <td>M&oacute;vil:</td>
        <td><input type="text" name="movil" size="20" maxlength="50" class="form03" /></td>
        </tr>
      <tr>
        <td>P&aacute;gina web:</td>
        <td><input type="text" name="web" size="30" maxlength="200" class="form03" /></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>T&iacute;tulo del anuncio:</td>
        <td><input type="text" name="tit_anuncio" size="50" maxlength="100" class="form03" /></td>
        </tr>
      <tr>
        <td>Describa brevemente qu&eacute; tipo de empleo busca, sus habilidades principales, a&ntilde;os de experiencia, idiomas, etc.</td>
        <td><textarea name="des_tipo_empleo" cols="45" rows="3" class="form03"></textarea></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Lugar de residencia:</td>
        <td>
          
          <?php
                    $query_lugar_resd = mysql_query("SELECT * FROM cat_lugar_residencia");
                    $qry_lugar_resd = mysql_fetch_assoc($query_lugar_resd);
                    ?>				  
          <select name="id_lugar_residencia" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_lugar_resd['id_lugar_residencia']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_lugar_resd['lugar_residencia']; ?></option>
            <?		
                    } while ($qry_lugar_resd = mysql_fetch_assoc($query_lugar_resd));
                      $rows_estatus = mysql_num_rows($query_lugar_resd);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_lugar_resd, 0);
                          $qry_lugar_resd = mysql_fetch_assoc($query_lugar_resd);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>&iquest;Que edad tiene?</td>
        <td><input type="text" name="edad" size="5" maxlength="2" class="form03" /></td>
        </tr>
      <tr>
        <td>&iquest;Puede conducir?</td>
        <td>
          
          Si<input type="radio" name="puede_conducir" value="si" class="form03" />&nbsp;
          No<input type="radio" name="puede_conducir" value="no" class="form03" />
          
          </td>
        </tr>
      <tr>
        <td>&iquest;Posee veh&uacute;culo propio?</td>
        <td>
          
          Si<input type="radio" name="vehiculo" value="si" class="form03" />&nbsp;
          No<input type="radio" name="vehiculo" value="no" class="form03" />
          
          </td>
        </tr>
      <tr>
        <td>Nivel de estudios:</td>
        <td>
          
          <?php
                    $query_nivel_estudios = mysql_query("SELECT * FROM cat_nivel_estudios");
                    $qry_nivel_estudios = mysql_fetch_assoc($query_nivel_estudios);
                    ?>				  
          <select name="id_nivel_estudios" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_nivel_estudios['id_nivel_estudios']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_nivel_estudios['nivel_estudios']; ?></option>
            <?		
                    } while ($qry_nivel_estudios = mysql_fetch_assoc($query_nivel_estudios));
                      $rows_estatus = mysql_num_rows($query_nivel_estudios);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_nivel_estudios, 0);
                          $qry_nivel_estudios = mysql_fetch_assoc($query_nivel_estudios);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Situaci&oacute;n laboral actual:</td>
        <td>
          
          <?php
                    $query_situacion_laboral = mysql_query("SELECT * FROM cat_situacion_laboral");
                    $qry_situacion_laboral = mysql_fetch_assoc($query_situacion_laboral);
                    ?>				  
          <select name="id_situacion_laboral" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_situacion_laboral['id_situacion_laboral']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_situacion_laboral['situacion_laboral']; ?></option>
            <?		
                    } while ($qry_situacion_laboral = mysql_fetch_assoc($query_situacion_laboral));
                      $rows_estatus = mysql_num_rows($query_situacion_laboral);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_situacion_laboral, 0);
                          $qry_situacion_laboral = mysql_fetch_assoc($query_situacion_laboral);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Disponibilidad:</td>
        <td>
          
          <?php
                    $query_disponibilidad = mysql_query("SELECT * FROM cat_disponibilidad");
                    $qry_disponibilidad = mysql_fetch_assoc($query_disponibilidad);
                    ?>				  
          <select name="id_disponibilidad" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_disponibilidad['id_disponibilidad']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_disponibilidad['disponibilidad']; ?></option>
            <?		
                    } while ($qry_disponibilidad = mysql_fetch_assoc($query_disponibilidad));
                      $rows_estatus = mysql_num_rows($query_disponibilidad);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_disponibilidad, 0);
                          $qry_disponibilidad = mysql_fetch_assoc($query_disponibilidad);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Experiencia profesional:</td>
        <td>
          
          <?php
                    $query_exp_profesional = mysql_query("SELECT * FROM cat_exp_profesional");
                    $qry_exp_profesional = mysql_fetch_assoc($query_exp_profesional);
                    ?>				  
          <select name="id_exp_profesional" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_exp_profesional['id_exp_profesional']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_exp_profesional['exp_profesional']; ?></option>
            <?		
                    } while ($qry_exp_profesional = mysql_fetch_assoc($query_exp_profesional));
                      $rows_estatus = mysql_num_rows($query_exp_profesional);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_exp_profesional, 0);
                          $qry_exp_profesional = mysql_fetch_assoc($query_exp_profesional);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Nivel de ingles:</td>
        <td>
          
          <?php
                    $query_nivel_ingles = mysql_query("SELECT * FROM cat_nivel_ingles");
                    $qry_nivel_ingles = mysql_fetch_assoc($query_nivel_ingles);
                    ?>				  
          <select name="id_nivel_ingles" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_nivel_ingles['id_nivel_ingles']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_nivel_ingles['nivel_ingles']; ?></option>
            <?		
                    } while ($qry_nivel_ingles = mysql_fetch_assoc($query_nivel_ingles));
                      $rows_estatus = mysql_num_rows($query_nivel_ingles);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_nivel_ingles, 0);
                          $qry_nivel_ingles = mysql_fetch_assoc($query_nivel_ingles);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>&iquest;Esta usted autorizado para trabajar en M&eacute;xico?</td>
        <td>
          
          <?php
                    $query_aut_trab_mx = mysql_query("SELECT * FROM cat_aut_trab_mx");
                    $qry_aut_trab_mx = mysql_fetch_assoc($query_aut_trab_mx);
                    ?>				  
          <select name="id_aut_trab_mx" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_aut_trab_mx['id_aut_trab_mx']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_aut_trab_mx['aut_trab_mx']; ?></option>
            <?		
                    } while ($qry_aut_trab_mx = mysql_fetch_assoc($query_aut_trab_mx));
                      $rows_estatus = mysql_num_rows($query_aut_trab_mx);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_aut_trab_mx, 0);
                          $qry_aut_trab_mx = mysql_fetch_assoc($query_aut_trab_mx);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Estado civil:</td>
        <td>
          
          <?php
                    $query_edo_civil = mysql_query("SELECT * FROM cat_edo_civil");
                    $qry_edo_civil = mysql_fetch_assoc($query_edo_civil);
                    ?>				  
          <select name="id_edo_civil" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_edo_civil['id_edo_civil']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_edo_civil['edo_civil']; ?></option>
            <?		
                    } while ($qry_edo_civil = mysql_fetch_assoc($query_edo_civil));
                      $rows_estatus = mysql_num_rows($query_edo_civil);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_edo_civil, 0);
                          $qry_edo_civil = mysql_fetch_assoc($query_edo_civil);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Sexo:</td>
        <td>
          
          <?php
                    $query_sexo = mysql_query("SELECT * FROM cat_sexo");
                    $qry_sexo = mysql_fetch_assoc($query_sexo);
                    ?>				  
          <select name="id_sexo" class="form03">
            <option value="">&nbsp;.:</option>
            <?php
                    do {
                    ?>		
            <option value="<?php echo $qry_sexo['id_sexo']; ?>">&nbsp;&bull;&nbsp;&nbsp;<? echo $qry_sexo['sexo']; ?></option>
            <?		
                    } while ($qry_sexo = mysql_fetch_assoc($query_sexo));
                      $rows_estatus = mysql_num_rows($query_sexo);
                      if($rows_estatus > 0) {
                          mysql_data_seek($query_sexo, 0);
                          $qry_sexo = mysql_fetch_assoc($query_sexo);
                      }
                    ?>
            </select>
          
          </td>
        </tr>
      <tr>
        <td>Su nacionalidad:</td>
        <td><input type="text" name="nacionalidad" size="30" maxlength="100" class="form03" /></td>
        </tr>
      <tr>
        <td>Expectativas salariales:</td>
        <td><input type="text" name="salario" size="30" maxlength="100" class="form03" /></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>Agregue su CV (formato PDF)</td>
        <td><input type="file" name="fichero" class="form01"></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          
          <input type="submit" name="submit" value="&nbsp;&nbsp;Agregar mi CV&nbsp;&nbsp;" class="form03" />&nbsp;
          <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form03">
          
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
