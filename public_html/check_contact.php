<?php
	session_start();

	unset($_SESSION['message']);

	$user_name= htmlspecialchars(trim($_POST['username']));
	$email = htmlspecialchars(trim($_POST['email']));
	$message = htmlspecialchars(trim($_POST['message']));

	$_SESSION['username'] = $username;
	$_SESSION['email'] = $email;
	$_SESSION['message'] = $message;

	if(strlen($message) <= 1) {
		$_SESSION['error_message'] = "Введите сообщение";
	}
	else if (strlen($from) < 5 || strpos($from, "@") == false) {
		$_SESSION['error_message'] = "не";
	}
	else {
		$subject =  "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset= utf8\r\n";
		mail("artemper33@mail.ru", $subject, $message);
	}