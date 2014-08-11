<?php
    require_once('conn/connect.php');
    require_once('sfl_security_id_.php');
    $id_cuenta = $_POST['id_cuenta'];
    $accion = $_POST['accion'];
    $id_aspirante = $_POST['id_aspirante'];
    $calle = $_POST['calle'];
    $num_ext = $_POST['num_ext'];
    $num_int = $_POST['num_int'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
    $id_del_mun= $_POST['id_del_mun'];
    $id_estado = $_POST['id_estado'];
    $id_cat_zonas = $_POST['id_cat_zonas'];


if ((!$id_estado)||(!$id_del_mun)||(!$calle)||(!$num_ext)||(!$colonia)||(!$cp)) {

    $accion = 1;
    header("Location:sfl_cv_02a.php?accion=" . $accion . "&paterno=" . $paterno . "&id_cuenta=" . $id_cuenta ."&id_estado=" . $id_estado . "&id_del_mun=" . $id_del_mun ."&calle=" . $calle ."&num_ext=" . $num_ext ."&colonia=" . $colonia ."&cp=" . $cp ."");
 }
   else {
      
            $up_aspirante = "UPDATE cat_aspirante SET
            id_estado ='" . $id_estado . "',
            id_del_mun ='" . $id_del_mun . "',
            zona='" . $id_cat_zonas ."',
            calle ='" . $calle . "',
            num_ext ='" . $num_ext . "',
            num_int ='" . $num_int . "',
            colonia ='" . $colonia. "',
            cp ='" . $cp . "'
            WHERE id_cuenta ='" . $id_cuenta . "'";
            mysql_query($up_aspirante) or die(mysql_error());
          
            }       
    header("Location:sfl_cv_03.php?id_cuenta=" . $id_cuenta . "");
    
?>
