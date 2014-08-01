<html>
<head>
	
<?php
require_once('sfl_tit.php');
?>
  <link type="text/css" href="css/sfl_style.css" rel="stylesheet" />
  <link type="text/css" href="css/menu.css" rel="stylesheet" />


  <link type="text/css" href="css/bootstrap.css" rel="stylesheet"/>
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="resources/js/api.js"></script>


  
  <script type="text/javascript" src="css/menu.js"></script>
  <script type="text/javascript" src="controller.js"></script>



	<title>
	</title>
<br>
<?php
require_once('sfl_functions.php');
?>




</head>
<body>

<?php
  require_once('sfl_menu_01.php');
?>

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><img src="images/sfl_head_int_15.jpg" width="900" height="180" border="0"></td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="10" border="0"></td>
  </tr>
  <tr>
    <td>

<?php
  require_once('sfl_menu_02.php');
?>

    </td>
  </tr>
  <tr>
    <td height="10"><img src="images/spacer.gif" width="1" height="20" border="0"></td>
  </tr>
</table>






	<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Vacantes
</button>

<!-- Modal -->
 <div class="col-md-5">  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <h4 class="modal-title" id="myModalLabel">VACANTES</h4>
        </div>
        <div class="modal-body">
          <div id="api"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>







<?php
  require_once('sfl_footer.php');
?>


</body>
</html>





