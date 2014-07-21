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

function uno(src,color_entrada) { 
    src.bgColor=color_entrada;src.style.cursor="hand"; 
} 
function dos(src,color_default) { 
    src.bgColor=color_default;src.style.cursor="default"; 
} 

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function IsNumeric(valor)
{
var log=valor.length; var sw="S";
for (x=0; x<log; x++)
{ v1=valor.substr(x,1);
v2 = parseInt(v1);
//Compruebo si es un valor numérico
if (isNaN(v2)) { sw= "N";}
}
if (sw=="S") {return true;} else {return false; }
}

var primerslap=false;
var segundoslap=false;
function formateafecha(fecha)
{
var long = fecha.length;
var dia;
var mes;
var ano;

if ((long>=2) && (primerslap==false)) { dia=fecha.substr(0,2);
if ((IsNumeric(dia)==true) && (dia<=31) && (dia!="00")) { fecha=fecha.substr(0,2)+"/"+fecha.substr(3,7); primerslap=true; }
else { fecha=""; primerslap=false;}
}
else
{ dia=fecha.substr(0,1);
if (IsNumeric(dia)==false)
{fecha="";}
if ((long<=2) && (primerslap=true)) {fecha=fecha.substr(0,1); primerslap=false; }
}
if ((long>=5) && (segundoslap==false))
{ mes=fecha.substr(3,2);
if ((IsNumeric(mes)==true) &&(mes<=12) && (mes!="00")) { fecha=fecha.substr(0,5)+"/"+fecha.substr(6,4); segundoslap=true; }
else { fecha=fecha.substr(0,3);; segundoslap=false;}
}
else { if ((long<=5) && (segundoslap=true)) { fecha=fecha.substr(0,4); segundoslap=false; } }
if (long>=7)
{ ano=fecha.substr(6,4);
if (IsNumeric(ano)==false) { fecha=fecha.substr(0,6); }
else { if (long==10){ if ((ano==0) || (ano<1900) || (ano>2100)) { fecha=fecha.substr(0,6); } } }
}

if (long>=10)
{
fecha=fecha.substr(0,10);
dia=fecha.substr(0,2);
mes=fecha.substr(3,2);
ano=fecha.substr(6,4);
// Año no viciesto y es febrero y el dia es mayor a 28
if ( (ano%4 != 0) && (mes ==02) && (dia > 28) ) { fecha=fecha.substr(0,2)+"/"; }
}
return (fecha);
} 

$(function() {
$( "#accordion" ).accordion();
});

 $(function() {
$( "#tabs" ).tabs({
event: "mouseover"
});
});

</script>
