<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Versions</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="main">
<br><br><br>
<div class= "row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4" style="background-color:lavenderblush;">
		<br>
		<div class="list-group">
		  <a href= "ASPECT%20TEST/" class="list-group-item">Test</a>
		  <a href= "HIPO%20Math%200.2.7%20B/" class="list-group-item">HIPO Math 0.2.7 B</a>
		  <a href= "HIPO%20Math%200.2.7/" class="list-group-item">HIPO Math 0.2.7</a>
		  <a href= "HIPO%20Math%200.2.8/" class="list-group-item">HIPO Math 0.2.8</a>
		  <a href= "HIPO%20Math%200.3.0/" class="list-group-item active">HIPO Math 0.3.0</a>
		</div>
		<br>
		<a href="close_session.php"><button class="btn btn-success">Salir</button></a>
		<br>
	</div>
	<div class="col-sm-4"></div>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>