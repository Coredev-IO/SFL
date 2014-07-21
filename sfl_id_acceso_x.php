<?php
session_start();
session_destroy();

$accion = $_GET['accion'];


	require_once('conn/connect.php');
//	require_once('sfl_head_.php');
header("Location:index.php?&accion=" . $accion . "");

?>



</body>
</html>
