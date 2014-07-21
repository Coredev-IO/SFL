<?php
    require_once('conn/connect.php');
	require_once('sfl_security_id_.php');
    $id_cuenta = $_POST['id_cuenta'];
    $accion = $_POST['accion'];
    $id_aspirante = $_POST['id_aspirante'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $fec_nac = $_POST['fec_nac'];
	
switch ($accion_up)
{ 
    case  6: 
 
    if ((!$paterno)||(!$nombre)||(!$fec_nac)) {

	$accion = 1;
 	header("Location:sfl_cv_02.php?accion=" . $accion . "&paterno=" . $paterno . "&id_cuenta=" . $id_cuenta ."&materno=" . $materno . "&nombre=" . $nombre ."&fec_nac=" . $fec_nac ."");
    }
   else {
       	$d_fch_cad = substr($fec_nac,-2);
		$m_fch_cad = substr($fec_nac,5,-3);
		$a_fch_cad = substr($fec_nac,0,4);
		$fec_nac= $d_fch_cad . "-" . $m_fch_cad . "-" . $a_fch_cad;
  				$insert_aspirante= "INSERT INTO cat_aspirante
                  values(
				'NULL',
			    '$id_cuenta',
				'$paterno',
                '$materno',
                '$nombre',
                '$fec_nac',
                'NULL',
                'NULL',
                'NULL',
                'NULL',
                'NULL',
                'NULL',
                'NULL',
                'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL',
                 'NULL'
                    	)";
			        require_once('conn/connect.php');
            			mysql_query($insert_aspirante);

				header("Location:sfl_cv_02a.php?id_cuenta=" . $id_cuenta . "");
           }break;
	   
	   case  5: 
	        $d_fch_cad = substr($fec_nac,-2);
	    	$m_fch_cad = substr($fec_nac,5,-3);
	    	$a_fch_cad = substr($fec_nac,0,4);
		    $fec_nac= $d_fch_cad . "-" . $m_fch_cad . "-" . $a_fch_cad;

	    	$up_aspirante = "UPDATE cat_aspirante SET
			paterno ='" . $paterno . "',
			materno ='" . $materno . "',
			nombre='" . $nombre ."',
			fec_nac='" . $fec_nac . "'
	   
			WHERE id_cuenta ='" . $id_cuenta . "'";
			mysql_query($up_aspirante) or die(mysql_error());
           	header("Location:sfl_cv_02a.php?id_cuenta=" . $id_cuenta . "");
			break;
		   	   
}
echo "$fec_nac *** $accion";

?>
