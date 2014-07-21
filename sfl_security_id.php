<?
session_start();

if ($_SESSION['autentificacion'] != "1") { }else{ $id_login = 1; }

$fecha = time();
$fch_up = date("d/m/Y -- H:i:s",$fecha);
$fch_up2 = date("d/m/Y",$fecha);
$hora = date("H:i:s",$fecha);
$hora_ = date("H:i",$fecha);
$fch_dia = date("d");
$fch_mes = date("m");
$fch_mes_ = date("M");
$fch_year = date("Y");

$hora_time = strtotime($hora);
$hora_time_ = strtotime($hora_);

?>