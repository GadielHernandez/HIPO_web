<?php
	include 'serv.php';
	include 'parts/header.php';
	if(isset($_SESSION['user'])){
		echo '<script> window.location="panel.php"; </script>';
	}
?>

<style type="text/css">
	body{
		background: url('images/login_bg.png');
		background-color: rgb(163,207,96);
		background-repeat: repeat-x;
		height: 200%;
		width: 100%;
	}
</style>

	<div class="login-page">
		<div class="form">
			<h2>HipoMath!</h2>
			<form class="login-form" method="post" action="validar.php">
				    <input type="text" placeholder="username" name="user" autocomplete="off" required>
				    <input type="password" placeholder="password" name="pw" autocomplete="off" required>
				<button  name="login" value="Entrar">login</button>
			</form>
		</div>
	</div>

</body>
</html>