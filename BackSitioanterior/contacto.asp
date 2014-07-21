
<%
 dim strMethod
				strMethod = Request.ServerVariables("request_method")
				if strMethod = "GET" then 		
	%>
<html>
<head>
<title>Sales Force Leasing-Cont&aacute;ctenos</title>
<meta http-equiv="Content-Type" content="text/html;">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#000066" vlink="#000066" alink="#000066">
<!--#include file="headersales.inc"-->
<table border="0" cellpadding="0" cellspacing="0" width="768">
  
  <tr> 
    <td><img src="../images/spacer.gif" width="274" height="1" border="0"></td>
    <td><img src="../images/spacer.gif" width="494" height="1" border="0"></td>
    <td><img src="../images/spacer.gif" width="1" height="1" border="0"></td>
  </tr>
  <tr> 
    <td><img name="p1_cont_r1_c1" src="../images/contacto.gif" width="274" height="400" border="0"></td>
    <td valign="top"> 
      <table width="321" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="../index.asp"><b>ir 
              a principal</b></a></font></div></td>
        </tr>
      </table>
      <table width="75%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
            <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Si 
              su empresa requiere de nuestros servicios o usted busca mayor informaci&oacute;n, 
              pong&aacute;se en contacto con nosotros y con gusto le atenderemos.</font></p>
            <p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="380" border="0" align="center">
        <tr> 
          <td valign="top" align="center" height="315"> 
            <form name="form1" method="post" action="contacto.asp">
              <table width="243" border="0">
                <tr> 
                  <td> 
                    <table width="218" border="0" align="center">
                      <tr> 
                        <td><b><font face="Arial, Helvetica, sans-serif" size="2" color="#000066">Empresa:</font></b></td>
                        <td> 
                          <input type="text" name="empresa" size="20">
                        </td>
                      </tr>
                      <tr> 
                        <td><b><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000">*</font><font face="Arial, Helvetica, sans-serif" size="2" color="#000066">Nombre:</font></b></td>
                        <td> 
                          <input type="text" name="nombre" size="20">
                        </td>
                      </tr>
                      <tr> 
                        <td><b><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000">*</font><font face="Arial, Helvetica, sans-serif" size="2" color="#000066">Tel&eacute;fono:</font></b></td>
                        <td> 
                          <input type="text" name="tel" size="20">
                        </td>
                      </tr>
                      <tr> 
                        <td><b><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000">*</font><font face="Arial, Helvetica, sans-serif" size="2" color="#000066">E-mail:</font></b></td>
                        <td> 
                          <input type="text" name="email" size="20">
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td> 
                    <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#000066"><b><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000">*</font><font face="Arial, Helvetica, sans-serif">Escriba 
                      aqu&iacute; sus comentarios </font></b></font> <font face="Arial, Helvetica, sans-serif"> 
                      <textarea name="comentario" cols="40" rows="4"></textarea>
                      </font> </div>
                  </td>
                </tr>
              </table>
              <input type="image" border="0" name="imageField" src="../images/boton_envio.jpg" width="82" height="28">
            </form>
          </td>
        </tr>
      </table>
    </td>
    <td><img src="../images/spacer.gif" width="1" height="400" border="0"></td>
  </tr>
</table>
<!--#include file="footersales.inc"-->
</body>
</html>
<%else%>
<%

strempresa = request.form("empresa")
strnombre = Request.Form ("nombre")
strtel = Request.Form ("tel")
strcorreo = Request.Form ("email")
strcoment = Request.Form ("comentario")


 
 if strnombre="" then
 %>
	<script LANGUAGE="javascript">
			<!--
				alert("Faltó su nombre");
				window.history.back()
			//-->
			</script>
	<%
 response.End()
 end if
 
 if strtel="" then
 %>
	<script LANGUAGE="javascript">
			<!--
				alert("El número telefonico es indispensable");
				window.history.back()
			//-->
			</script>
	<%
 response.End()
 end if
 
 'INICIAMOS LA VALIDACION DEL CAMPO DE CORREO ELECTRONICO
	if strcorreo = "" Then
		'NO COLOCO CORREO ELECTRONICO ENVIAMOS MENSAJE DE ERROR
		%>

<script LANGUAGE="javascript">
			<!--
				alert("Es indispensable la dirección de correo");
				window.history.back()
			//-->
			</script>
			<%
			response.End()
			end if
			
'SI COLOCO TEXTO EN EL CAMPO DE EMAIL, COMPROBAMOS EL TEXTO PARA VERIFICAR QUE ES UNA CUENTA DE EMAIL
		if instr(strcorreo,"@") = 0 or instr(strcorreo,".") = 0 Then
			'NO TIENE LOS CARACTERES NECESARIOS PARA SER UN EMAIL, ENVIAMOS ERROR
				%>
	<script LANGUAGE="javascript">
			<!--
				alert("Ese no es un correo válido");
				window.history.back()
			//-->
			</script>
			<%
			response.End()
			end if
			
			if strcoment="" then
 %>
	<script LANGUAGE="javascript">
			<!--
				alert("Su comentario es indispensable");
				window.history.back()
			//-->
			</script>
	<%
 response.End()
 end if
 
	<!-- -->
strBody = "<html><body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>"
strBody = strBody & " <table width='700' border='0' cellpadding='0' cellspacing='0'>"
  
strBody = strBody & "<tr>"

strBody = strBody & "<td valign='top'> <TABLE WIDTH=700 BORDER=0 CELLPADDING=0 CELLSPACING=0>"
strBody = strBody & "<TR>" 
strBody = strBody & "<TD width='215' valign='top'><img src='http://www.salesforceleasing.com/headercorreoconta.gif' width='700' height='87'>" 
strBody = strBody & "</TD>"
strBody = strBody & "</TR>"
strBody = strBody & "<TR>" 
strBody = strBody & "<TD valign='top'>"
strBody = strBody & "<table width='550' border='0' align='center' cellpadding='0' cellspacing='0'>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td>"
strBody = strBody & "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>&nbsp;</font></td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td valign='top'>"
strBody = strBody & "<table width='545' border='1' cellpadding='0' cellspacing='0' bordercolor='036CB5'>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td width='627'>"
strBody = strBody & "<table width='540' border='0' align='center'>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td colspan='2'>"
strBody = strBody & "<div align='center'>"
strBody = strBody & "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Solicitud de informes " & date() & "</strong></font></div></td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td colspan='2'>&nbsp;</td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td width='335'>"
strBody = strBody & "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Nombre de la empresa que representa: </strong></font></td>"
strBody = strBody & "<td width='252'><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='036CB5'>" & strEmpresa & " </font></td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td>"
strBody = strBody & "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Su nombre:</strong></font></td>"
strBody = strBody & "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='036CB5'>" & strNombre & "</font></td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Su direcci&oacute;n de email:</strong></font></td>"
strBody = strBody & "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='036CB5'>" & strCorreo & "</font></td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Su tel&eacute;fono: </strong></font></td>"
strBody = strBody & "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='036CB5'>" & strTel & "</font></td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td><font size='2' face='Verdana, Arial, Helvetica, sans-serif'><strong>Comentarios:</strong></font></td>"
strBody = strBody & "<td>&nbsp;</td>"
strBody = strBody & "</tr>"
strBody = strBody & "<tr>" 
strBody = strBody & "<td colspan='2'><div align='justify'><font size='2' face='Verdana, Arial, Helvetica, sans-serif' color='036CB5'>" & strcoment& "</font></div></td>"
strBody = strBody & "</tr>"
strBody = strBody & "</table>"
strBody = strBody & "</td>"
strBody = strBody & "</tr>"
strBody = strBody & "</table>"
strBody = strBody & "<div align='center'></div></td>"
strBody = strBody & "</tr>"
strBody = strBody & "</table>"
strBody = strBody & "</TD>"
strBody = strBody & "</TR>"
strBody = strBody & "</TABLE>"
strBody = strBody & "</td>"
strBody = strBody & "</tr>"
strBody = strBody & "</table>"
	  strBody = strBody & "</body></html>"
	  
	  
	     Set objMail = Server.CreateObject("CDONTS.NewMail")
                                   objmail.To = "servicioventas@salesforceleasing.com,ahoriuchi@redisegno.com"
				   'objmail.bcc="ahoriuchi@redisegno.com"
                                   objmail.Subject = "SOLICITUD DE INFORMACION - SALES FORCE LEASING - HOJA CONTACTO"
                                   objmail.From = "informa@salesforceleasing.com"
                                   objmail.BodyFormat = 0
                                   objmail.mailFormat = 0
                                   objmail.body = strBody
                                   objmail.Importance = lngImportance
				   objmail.send
					 
	Set objmail = Nothing
<!-- -->
%>

<body bgcolor="#FFFFFF" text="#FFFFFF">
<!--#include file="headersales.inc"-->

<p>&nbsp;</p>
<div align="left">
  <table border="0" width="768" cellspacing="0" cellpadding="0">
    <tr>
  
 <td width="100%">
        <p align="center">
        <img border="0" src="../images/respuesta_enviada.jpg"></td>
    <tr>
	<td>
        <p align="center"><font face="Arial, Helvetica, sans-serif" size="1" color="000066"><a href="../index.asp">
        regresar</a></font></td>
	</tr>
	</tr>
  </table>
</div>
<br>
<br>
<br>
<!--#include file="footersales.inc"-->
<%end if%>





















