<?php
	if(!isset($_POST['submit'])){
		echo "Error...";
	}
	// Retrieve data
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$comment = $_POST['comment'];

	// Validate data
	if(empty($name) || empty($visitor_email)){
		echo "Nombre y correo es obligatorio";
		exit;
	}
	
	$email_subject = "HIPO: Dudas o Preguntas";
	$email_body = "Reciviste un mensaje de: $name.\n$comment";
	
	$to = "rochakarla@hotmail.com";
	$email_from = "rochakarla@hotmail";
	
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	header("location:index.php");
?>