<?

require_once('../conn/connect.php');
require_once('../sfl_fch_hra.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usr = $_POST['usr'];
$psw = $_POST['psw'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$movil = $_POST['movil'];
$web = $_POST['web'];
$tit_anuncio = $_POST['tit_anuncio'];
$des_tipo_empleo = $_POST['des_tipo_empleo'];
$id_lugar_residencia = $_POST['id_lugar_residencia'];
$edad = $_POST['edad'];
$puede_conducir = $_POST['puede_conducir'];
$vehiculo = $_POST['vehiculo'];
$id_nivel_estudios = $_POST['id_nivel_estudios'];
$id_situacion_laboral = $_POST['id_situacion_laboral'];
$id_disponibilidad = $_POST['id_disponibilidad'];
$id_exp_profesional = $_POST['id_exp_profesional'];
$id_nivel_ingles = $_POST['id_nivel_ingles'];
$id_aut_trab_mx = $_POST['id_aut_trab_mx'];
$id_edo_civil = $_POST['id_edo_civil'];
$id_sexo = $_POST['id_sexo'];
$nacionalidad = $_POST['nacionalidad'];
$salario = $_POST['salario'];

$archivo_paso = $_FILES['fichero']['tmp_name'];
$peso_paso = $_FILES['fichero']['size'];


if ((!$nombre) || (!$apellidos) || (!$email) || (!$usr) || (!$psw)) {

	$accion = 1;
	header("Location:../sfl_integrate.php?accion=" . $accion . "");

}else{
	
		$pass = md5($psw);

		$path = "http://www.salesforcemi.com";
		
		$archivo = $_FILES['fichero']['tmp_name'];
		$archivo_remoto = "/public_html/files/" . $_FILES['fichero']['name'];
		$servidor_ftp = "www.salesforcemi.com";
		
		$id_con = ftp_connect($servidor_ftp);
		$resultado_login = ftp_login($id_con, "salesmi", "Accesoweb2013");
	
		if (ftp_put($id_con, $archivo_remoto, $archivo, FTP_BINARY)) {
			
			$name_file = $_FILES['fichero']['name'];
			$peso_file = $_FILES['fichero']['size'];
			
			$insert_usr ="INSERT INTO cat_usr(
			id_usr,
			usr,
			psw,
			id_tipo_usr,
			id_status,
			admon,
			fch_alta,
			fch_baja
			) VALUES (
			'NULL',
			'$usr',
			'$pass',
			'2',
			'1',
			'NULL',
			'$fch_up4',
			'NULL'
			)";
			mysql_query($insert_usr);

			$query_newusr = mysql_query("SELECT * FROM cat_usr WHERE usr ='" . $usr . "' AND fch_alta ='" . $fch_up4 . "'");
			$qry_newusr = mysql_fetch_assoc($query_newusr);
			$id_usr = $qry_newusr['id_usr'];

			$insert_candidato ="INSERT INTO candidato(
			id_usr,
			nombre,
			apellidos,
			email,
			tel,
			movil,
			web,
			titulo_anuncio,
			desc_tipo_empleo,
			id_lugar_residencia,
			
			
			) VALUES (
			'NULL',
			)";
			mysql_query($insert_candidato);
			





			$accion = 2;
			header("Location:../sfl_integrate_tnk.php?accion=" . $accion . "");
	
		}else{
			
			echo "No hay conexi&oacute;n";
			
		}
	
}

?>
