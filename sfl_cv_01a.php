
<?php

    require_once('conn/connect.php');
	require_once('sfl_fch_hra.php');
	$accion = $_GET['accion'];
    $id_cuenta = $_GET['id_cuenta'];
	
	
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
	// require_once('sfl_head_cv.php');
?>

<?php
	// require_once('sfl_menu_01.php');
?>

<!-- <table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
  <tr>
    <td>
    
<?php
	// require_once('sfl_menu_02.php');
?>
    
    </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table> -->
                    <br><br>
                    <div class="container">
                      <div class="row">
                               <div class="col-md-8 "><img src="images/talent.jpg", height="60px"></div>
                               <div class="col-md-4 "><img src="images/leasing.jpg", height="60px"></div>


                      </div>
                    </div>

<table width="885" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="100%" class="padd_02" valign="top">
      
  <form name="new_cv" action="sfl_cv_01a_.php" method="POST" enctype="multipart/form-data">
    
    <table width="100%" border="0" cellspacing="1" cellpadding="4" class=" txt03">
      
  <!--accion-->

      <?php if ($accion == 1) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Alg&uacute;n campo obligatorio se encuentra vaci&oacute ;.</b></span></td>
        </tr>
      <?php } ?>
	  
	  <?php if ($accion == 2) { ?>
      <tr>
        <td colspan="2"><span class="txt08"><b>( * ) Para poder continuar se requiere que estes de acuerdo en la transferencia de tus datos y Aviso de Privacidad ;.</b></span></td>
        </tr>
      <?php } ?>

  
  <th>    <p>&nbsp;</p>
            <p>Aviso de Privacidad </p></th><tr></tr>
<td ><textarea readonly  disabled rows="10" cols="100" wrap="hard" class="form-control">
Sales Force Leasing Group, S.A. de C.V., sociedad constituida conforme a las Leyes de los Estados Unidos Mexicanos, en lo sucesivo denominada como "Sales Force Leasing Group", ubicada en Montecito 38, Piso 34, Oficina 23 y 24, Col. Nápoles, México, D.F., C.P. 03810, mediante este acto le solicita su consentimiento expreso para que Sales Force Leasing Group, pueda accesar y tratar los siguientes datos personales, y datos personales sensibles: ??Nombre completo, Fecha de Nacimiento, Edad, Nacionalidad, Genero, Domicilio, Teléfono (Casa, Celular, Oficina, Recados), Estado Civil, Ingreso mensual, Estado de Salud, Redes Sociales, Historial Académico, Historial Laboral, Posición laboral, Correo electrónico, Grupo sanguíneo, Peso, Estatura, Numero de Licencia, Créditos ante el Infonavit y/o Fonacot, Número de Seguridad Social, Clave Única de Registro de Población, Registro Federal de Contribuyentes, Fotografías, Número de cuenta bancario para deposito de nómina, Datos de familiares directos declarados, Credencial de Elector, Pasaporte, Cartilla de liberación del Servicio Militar Nacional, Carta de naturalización, FM3 en caso de ser Extranjeros, Pretensiones económicas ó Sueldo Anterior. La información que proporcione deberá ser veraz y completa. Por lo que queda bajo su responsabilidad la veracidad de los datos proporcionados y en ningún caso Sales Force Leasing Group será responsable a este respecto. La información proporcionada ya sea de manera directa en nuestras oficinas, portales WEB ( www.salesforceleasing.com), aplicación móvil ó bien por correo electrónico, estará sujeto a lo establecido en el presente Aviso de Privacidad. ?? Sales Force Leasing Group se reserva el derecho a modificar el presente Aviso de Privacidad en cualquier momento, el cual estará vigente y a su disposición en todo momento en nuestra página web www.salesforceleasing.com.mx  Las finalidades para las que recabamos sus datos son: de reclutamiento, selección, aplicación de estudios médicos, evaluación psicométrica, socioeconómica, preferencias, y/o competencias laborales, negative file, pruebas de manejo, investigación en buró de crédito, historial de Infonavit, Carta de No Antecedentes Penales, Test de Integridad (Polígrafo, Midot), gestión de seguros de gastos médicos y/o seguros de vida, envío de información de servicios proporcionados por Sales Force Leasing Group, mercadotécnicos, publicitarios ó de prospección comercial. En este sentido, y para cumplir con dichas finalidades, se requiere su consentimiento expreso para el caso de que sus datos personales y datos personales sensibles sean transferidos a los terceros señalados anteriormente, incluyendo a los Clientes y Proveedores de Sales Force Leasing Group.
</textarea>
            </td>
       <tr></tr>
       <td><input type="radio" name="transfer_datos"  value="Si doy mi consentimiento para la transferencia de mis datos " class="form03">
	   Si doy mi consentimiento para la transferencia de mis datos : * <br>
	   <input type="radio" name="transfer_datos"  value=""  class="form03">
	   No doy mi consentimiento para la transferencia de mis datos : * </td>
      <tr>
      </tr><br>
          <table width="100%" border="0" cellspacing="1" cellpadding="4" class=" txt03">
            <br>
            <td align=""> <textarea class="form-control" cols="100" rows="10" disabled="disabled" readonly="readonly">
De igual forma en el momento que lo estime oportuno podrá ejercer sus derechos ARCO (acceso, rectificación, cancelación y oposición) sobre el tratamiento de los datos personales proporcionados, así como revocar el consentimiento otorgado en este documento, por lo cual deberá ponerse en contacto con nosotros a través del correo electrónico "datospersonales@salesforceleasing.com"; el procedimiento y requisitos que deberá contener su solicitud de conformidad con lo dispuesto en la Ley y su Reglamento, son los siguientes: ??(1) Nombre y Domicilio, si no se incluye la dirección se dará por no recibida la solicitud. (2) El documento que acredite su identidad o la personalidad de su representante. (Copia de identificación oficial vigente.) El representante deberá acreditar la identidad del titular, identidad del representante, y sus facultades de representación mediante instrumento público o carta poder firmada ante dos testigos, o declaración en comparecencia personal del titular; (3) La descripción clara y precisa de los datos personales a los que desea acceder, rectificar, cancelar u oponerse; (4) Descripción de otros elementos que faciliten la localización de sus datos personales. (portal Web, Oficinas.) Los documentos deberán ser escaneados y adjuntados al correo electrónico para verificar la veracidad de los mismos. ??Una vez recibida su solicitud para ejercer sus derechos ARCO debidamente integrada y con los requisitos legales vigentes, recibirá contestación de nuestra parte en un plazo no mayor a 20 días hábiles. Si resultara procedente, se hará efectiva dentro de los 15 días hábiles siguientes a que le comunicamos nuestra respuesta. ??En caso de estar inconforme con la respuesta notificada, tendrá un plazo de 20 días hábiles para ponerse en contacto con nosotros, indicando su inconformidad o inquietud, con la finalidad de resolver dicha situación. ??En caso de no responder nuestra contestación en el plazo señalado, Sales Force Leasing Group entiende de buena fe que esta conforme con nuestra respuesta. En nuestro programa de notificación de promociones, ofertas y servicios a través de correo electrónico, sólo Sales Force Leasing Group tiene acceso a la información recabada. Este tipo de publicidad se realiza mediante avisos y mensajes promocionales de correo electrónico, los cuales sólo serán enviados a usted y a aquellos contactos registrados para tal propósito, esta indicación podrá modificarla en cualquier momento. En los correos electrónicos enviados, pueden incluirse ocasionalmente ofertas de terceras partes que sean nuestros socios comerciales. ??En el caso de empleo de cookies, el botón de "ayuda" que se encuentra en la barra de herramientas de la mayoría de los navegadores, le dirá cómo evitar aceptar nuevos cookies, cómo hacer que el navegador le notifique cuando recibe un nuevo cookie o cómo deshabilitar todos los cookies. Los cookies son pequeñas piezas de información que son enviadas por el sitio Web a su navegador y se almacenan en el disco duro de su equipo y se utilizan para determinar sus preferencias cuando se conecta a los servicios de nuestros sitios, así como para rastrear determinados comportamientos o actividades llevadas a cabo por usted dentro de nuestro sitio. ??En algunas secciones de nuestro sitio requerimos que el cliente tenga habilitados los cookies ya que algunas de las funcionalidades requieren de éstas para trabajar. Los cookies nos permiten: a) reconocerlo al momento de entrar a nuestro sitio y ofrecerle de una experiencia personalizada, b) conocer la configuración personal del sitio especificada por usted, por ejemplo, los cookies nos permiten detectar el ancho de banda que usted ha seleccionado al momento de ingresar al home page de nuestro sitio, de tal forma que sabemos qué tipo de información es aconsejable descargar, c) calcular el tamaño de nuestra audiencia y medir algunos parámetros de tráfico, pues cada navegador que obtiene acceso a nuestros sitios adquiere un cookie que se usa para determinar la frecuencia de uso y las secciones de los sitios visitadas, reflejando así sus hábitos y preferencias, información que nos es útil para mejorar el contenido, los titulares y las promociones para los usuarios. Sales Force Leasing Group ha adoptado los niveles de seguridad de protección de datos personales legalmente requeridos por la Ley y su Reglamento, bajo los principios de licitud, calidad, consentimiento, información, finalidad, lealtad, proporcionalidad y responsabilidad. Todo esto bajo estrictas reglas de seguridad, confidencialidad y consistencia de información. ??Hacemos de su conocimiento que sus datos personales y datos personales sensibles serán resguardados bajo estrictas medidas de seguridad administrativas, técnicas y físicas las cuales han sido implementadas con el objeto de proteger sus datos personales contra daño, perdida, alteración, destrucción o el uso o acceso o tratamiento no autorizado. La Web Site de Sales Force Leasing Group conecta con ciertos links de otras páginas Web que pertenecen a terceros sobre los que Sales Force Leasing Group no tiene control alguno. En estos supuestos Sales Force Leasing Group no asume responsabilidad alguna ni compromiso sobre las políticas de privacidad de la información contenidas en esas páginas. ??Esta declaración de Privacidad está sujeta a la Política de Privacidad de Sales Force Leasing Group lo cual constituye un acuerdo legal entre usted y Sales Force Leasing Group. ? Sales Force Leasing Group se reserva el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, para la atención de novedades legislativas o jurisprudenciales, políticas internas, nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios y prácticas del mercado, cualquier modificación al Aviso de Privacidad estará disponible a través de nuestros portales Web www.salesforceleasing.com y la aplicación móvil; sección "aviso de privacidad". ??Al navegar en cualquiera de los sitios Web de Sales Force Leasing Group, significa que ha leído, entendido y esta de acuerdo con los términos antes expuestos. El presente Aviso de Privacidad ha sido modificado el día 06 de Mayo de 2014. 
				                 	</textarea>
		</td>
          <tr></tr>
  <td><input type="radio" name="privacidad"  value="Recibí y estoy de acuerdo con el presente Aviso de Privacidad." class="form03"  onChange="MM_jumpMenu('parent',this,0)" >
	   Recibí y estoy de acuerdo con el presente Aviso de Privacidad. : * <br>
	  <input type="radio" name="privacidad"  value=""  class="form03" >
	   Recibí y no estoy de acuerdo con el presente Aviso de Privacidad. : * </td><tr></tr>
	   <td><br>Desde este momento Sales Force Leasing Group cuenta con tu consentimiento para utilizar tus datos personales sensibles y/o financieros proporcionados de conformidad con lo estipulado en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. ??
           Sales Force Leasing Group, Montecito 38, Piso 34, Oficina 23 y 24, Col. Nápoles, México, D.F., C.P. 03810.
       </td><tr></tr>
	   
	   

  <td align="center"><br><br>
                   <input type="button" name="cancelar" value="Cancelar" class="btn btn-default"onclick="location.href='index.php'">&nbsp;
                  <input type="reset" name="limpiar" value="&nbsp;limpiar&nbsp;" class="btn btn-default">
				  <input type="submit" name="submit" value="Continuar" class="btn btn-primary" />&nbsp;
                  <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta; ?>">
				
                  </td>
           </table>
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

<!-- 
<?php
	// require_once('sfl_footer.php');
?> -->

</body>
</html>
