<?
session_start();
$accion_up= $_SESSION['accion_up'];

if ($_SESSION['autentificacion'] != "1") {
	header("Location:index.php");
	exit();
}else{
	$id_login = 1;
}

$fecha = time();
$fch_up = date("d/m/Y -- H:i:s",$fecha);
$fch_up2 = date("d/m/Y",$fecha);
$fch_up3 = date("Y-m-d",$fecha);
$fch_up4 = date("Y-m-d -- H:i:s",$fecha);
$hora = date("H:i:s",$fecha);
$hora_ = date("H:i",$fecha);
$fch_dia = date("d");
$fch_mes = date("m");
$fch_mes_ = date("M");
$fch_year = date("Y");

$hora_time = strtotime($hora);
$hora_time_ = strtotime($hora_);

?>