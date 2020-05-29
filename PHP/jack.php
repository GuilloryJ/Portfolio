<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
	{
		echo "Thank you for contacting me. I'll get back to you soon!";
		$name = $_POST["name"];
		$emailAddress = $_POST["emailAddress"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$toEmail = "buscow@gmail.com";
		$mailHeaders = "From: " . $name . "<". $emailAddress .">\r\n";
		mail($toEmail, $subject, $message, $mailHeaders);
}
?>