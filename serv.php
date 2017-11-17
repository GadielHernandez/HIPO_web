<?php
	$conect = @mysql_connect("localhost","root","") or die("No se encontró el servidor");
	//$conect = @mysql_connect("localhost","hipomath_admin","seahorse9%") or die("No se encontró el servidor");
	mysql_select_db("logindb",$conect)or die("No se encontró la base de datos");
?>