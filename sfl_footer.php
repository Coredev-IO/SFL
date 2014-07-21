<?php

require_once('conn/connect_1.php');

$query_count = mysql_query("SELECT * FROM count_visit ORDER BY id_visita DESC LIMIT 1");
$qry_count = mysql_fetch_assoc($query_count);
$count_visit = number_format($qry_count['id_visita']);


?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <!--
  <tr>
    <td><img src="images/spacer.gif" width="1" height="30" border="0"></td>
  </tr>
  -->
  <tr>
    <td class="bg_04"><img src="images/spacer.gif" width="1" height="2" border="0"></td>
  </tr>
  <tr>
    <td><img src="images/spacer.gif" width="1" height="1" border="0"></td>
  </tr>
  <tr>
    <td class="bg_04 padd_04">
    
    <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td valign="top" class="padd_r">
        
        <table width="100%" border="0" cellspacing="0" cellpadding="2" class="txt04">
          <tr>
            <td><b>SALES FORCE LEASING GROUP</b></td>
          </tr>
          <tr>
            <td>Especialista en Fuerzas de Ventas</td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="1" height="10" border="0"></td>
          </tr>
          <tr>
            <td>&reg; 2014 | Todos los derechos reservados</td>
          </tr>
          <tr>
            <td><a href="http://www.salesforcemi.com" class="txt04">www.salesforceleasing.com</a></td>
          </tr>
          <tr>
            <td><a href="#" class="txt04">Aviso de privacidad</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/sfl_redes_00.png" width="20" height="20" border="0" align="absmiddle"><span class="txt04b">&nbsp;&nbsp;01(55) 9000.1500</span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>WTC, Ciudad de M&eacute;xico</td>
          </tr>
          <tr>
            <td>Montecito 38, piso 34, Oficina 23</td>
          </tr>
          <tr>
            <td>Col. N&aacute;poles, Del. Benito Juarez</td>
          </tr>
          <tr>
            <td>C.P. 03810, M&eacute;xico, D.F.</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><a href="#" class="txt04"><img src="images/sfl_redes_01.png" width="21" height="21" border="0" align="absmiddle">&nbsp;&nbsp;SalesForceLeasing</a></td>
          </tr>
          <tr>
            <td><a href="#" class="txt04"><img src="images/sfl_redes_02.png" width="21" height="21" border="0" align="absmiddle">&nbsp;&nbsp;@SalesForceLeasing</a></td>
          </tr>
          <tr>
            <td><a href="#" class="txt04"><img src="images/sfl_redes_03.png" width="21" height="21" border="0" align="absmiddle">&nbsp;&nbsp;SalesForceLeasing</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><b>Visitas: [ <?php echo $count_visit; ?> ]</b></td>
          </tr>
          </table>
        
        </td>
        <td class="bg_05"><img src="images/spacer.gif" width="1" height="1" border="0"></td>
        <td width="280" valign="top" class="padd_01">
        

 <!--       
        <table width="100%" border="0" cellspacing="0" cellpadding="2" class="txt04">
          <tr>
            <td><b>MAPA DEL SITIO</b></td>
          </tr>
          <tr>
            <td><img src="images/spacer.gif" width="1" height="5" border="0"></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="index.php" class="txt04">Inicio</a></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="sfl_compania.php" class="txt04">Compa&ntilde;&iacute;a</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_cia_.php" class="txt04">Misi&oacute;n, visi&oacute;n y proncipios corporativos</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_socios_comerciales.php" class="txt04">Nuestros Socios comerciales</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_beneficios.php" class="txt04">Beneficios</a></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="sfl_fuerza_ventas.php" class="txt04">Fuerza de Ventas de Alto Impacto</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_consultorios.php" class="txt04">Consultorios y hospitales</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_puntodeventa.php" class="txt04">Punto de venta</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_cuentasclave.php" class="txt04">Cuentas clave</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_pacientes.php" class="txt04">Pacientes</a></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="sfl_soluciones_int.php" class="txt04">Soluciones integrales</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_talento_com.php" class="txt04">Atracci&oacute;n y selecci&oacute;n de talento comercial</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_capacitacion.php" class="txt04">Capacitaci&oacute;n formaci&oacute;n y desarrollo</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_productividad.php" class="txt04">Optimizaci&oacute;n de productividad de fuerzas de ventas</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_reporte.php" class="txt04">Sistemas de reporte y desempe&ntilde;o de fuerzas de ventas</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_estrategia.php" class="txt04">Consultor&iacute;a en estrategia comercial y marketing</a></td>
          </tr>
          <tr>
            <td class="padd_l">&bull;&nbsp;<a href="sfl_complementarias.php" class="txt04">Soluciones Complementarias</a></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="sfl_factoresclave.php" class="txt04">Factores clave de &eacute;xito</a></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="sfl_cv_01.php" class="txt04">Int&eacute;grate a nuestro equipo</a></td>
          </tr>
          <tr>
            <td>&bull;&nbsp;<a href="sfl_admon.php" class="txt04">Admon.</a></td>
          </tr>
          </table>
-->        
        </td>
        <td class="bg_05"><img src="images/spacer.gif" width="1" height="1" border="0"></td>
        <td valign="top" class="padd_01" >
        
<form name="contacto_sfl" action="sfl_contact.php" method="post">

    <table width="100%" border="0" cellspacing="2" cellpadding="0" class="txt04" align="right">
      <tr>
        <td colspan="2"><strong>CONT&Aacute;CTENOS</strong></td>
      </tr>
      <tr>
        <td colspan="2"><img src="images/spacer.gif" width="1" height="5" border="0"></td>
      </tr>
    <? if($error != "") { ?>
      <tr>
        <td colspan="2">
                <? if($error == 1) { ?>Uno o m&aacute;s campos requeridos (*) se encuentran vac&iacute;os.<? } ?>
                <? if($error == 2) { ?>"<b><?php echo $c_nombre1; ?>.</b>" Gracias por contactarnos,<br />los datos fueron enviados y en breve<br />un ejecutivo se pondr&aacute; en contacto con usted.<? } ?>
                <? if($error == 3) { ?>El c&oacute;digo de seguridad es erroneo, intente nuevamente.<? } ?>
        </td>
      </tr>
      <tr>
        <td colspan="2"><img src="images/spacer.gif" width="1" height="5" border="0"></td>
      </tr>
    <? } ?>
      <tr>
        <td>* Su nombre:</td>
        <td><? if($c_nombre != "") { ?><input type="text" name="c_nombre" size="28" maxlength="100" value="<? echo $c_nombre; ?>" class="form02"><? }else{ ?><input type="text" name="c_nombre" size="28" maxlength="100" class="form02"><? } ?></td>
      </tr>
      <tr>
        <td>* Su email:</td>
        <td><? if($c_email != "") { ?><input type="text" name="c_email" size="20" maxlength="100" value="<? echo $c_email; ?>" class="form02"><? }else{ ?><input type="text" name="c_email" size="20" maxlength="100" class="form02"><? } ?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Tel&eacute;fono:</td>
        <td><? if($c_tel != "") { ?><input type="text" name="c_tel" size="15" maxlength="30" value="<? echo $c_tel; ?>" class="form02"><? }else{ ?><input type="text" name="c_tel" size="15" maxlength="30" class="form02"><? } ?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Empresa:</td>
        <td><? if($cia != "") { ?><input type="text" name="cia" size="28" maxlength="100" value="<? echo $cia; ?>" class="form02"><? }else{ ?><input type="text" name="cia" size="28" maxlength="100" class="form02"><? } ?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Motivo del contacto:</td>
        <td><? if($asunto != "") { ?><input type="text" name="asunto" size="28" maxlength="100" value="<? echo $asunto; ?>" class="form02"><? }else{ ?><input type="text" name="asunto" size="28" maxlength="100" class="form02"><? } ?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;Mensaje:<br /><br /><img src="sfl_security_img.php" width="100" height="39" border="0"></td>
        <td><? if($mns != "") { ?><textarea name="mns" cols="26" rows="3" class="form02"><? echo $mns; ?></textarea><? }else{ ?><textarea name="mns" cols="26" rows="3" class="form02"></textarea><? } ?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;C&oacute;digo de Seguridad:</td>
        <td><input type="text" name="code1" size="20" class="form02" /></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
        <input type="submit" name="enviar" value="&nbsp;&nbsp;&nbsp;enviar&nbsp;&nbsp;&nbsp;" class="form02">&nbsp;
        <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="form02">
        </td>
      </tr>
    </table>

</form>
        
        <table width="100%" border="0" cellspacing="0" cellpadding="2" class="txt04">
          <tr>
            <td><img src="images/spacer.gif" width="1" height="30" border="0"></td>
          </tr>
          <tr>
            <!--<td><img src="images/sfl_logo_small.png" width="140" height="33" border="0"></td>-->
          </tr>
          </table>

        </td>
      </tr>
    </table>
    
    </td>
  </tr>
</table>
