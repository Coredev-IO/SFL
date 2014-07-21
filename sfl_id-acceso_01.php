<?
session_start();

 if (!$_POST)
  {$usr = $_GET['usr']; $pass= $_GET['psw']; $accion_up= 6;}
 else
  {$usr = $_POST['usr']; $psw= $_POST['psw']; $pass = md5($psw);$accion_up= 5;} 
 
 
function encrypt($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
}
require_once('conn/connect.php');

	
	$checkuser = mysql_query("SELECT * FROM cat_cuenta WHERE email='" . $usr . "' AND passw='" . $pass . "' AND status ='1'");
	$acces_exist = mysql_num_rows($checkuser);
	
	if ($acces_exist == 1) {
		
		$acces_id = mysql_fetch_assoc($checkuser);
		$id_cuenta = $acces_id['id_cuenta'];
		$id_usr = $acces_id['id_usr'];
		$tipo_usr = $acces_id['tipo_usr'];
		
	    $aspirante_id = mysql_query("SELECT * FROM cat_aspirante WHERE id_cuenta='" . $id_cuenta. "'");
    	$aspirante = mysql_fetch_assoc($aspirante_id);
    	$nombre = $aspirante['nombre'];
		
		$_SESSION['autentificacion'] = "1";
		$_SESSION['nombre'] = $nombre;
		$_SESSION['id_cuenta'] = $id_cuenta;
		$_SESSION['accion_up'] = $accion_up;
		
			if ($tipo_usr == 1) {header("Location:sfl_vacante_01.php?accion=". $accion);}else 
	
		{ header("Location:sfl_cv_02.php?accion=". $accion);}

	}else{
		
		$accion_id01 = 6;
		$msn= "se requiere dar de alta una cuenta  por favor";
		header("Location:sfl_cv_01.php?accion=" . $accion_id01 . "");
	
	}

?>
