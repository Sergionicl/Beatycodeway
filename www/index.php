<?php

	// Отрпавка сообщений. PHP не отравляет. Он всего лишь передает информацию приложению sandmail
	$message = "This is the simlist message in the worrls";
	$to = "lavrinzhuk@mail.ru";
	$from = "ok2002@mail.ru";
	$subject = "Theme of suject";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; 
	charset = utf-8 \r\n"; // Важно иначе сообщение не будет корректно обрабатываться. Можно указать не plain, a html От кого направлено и кому можно ответить
	
	mail ($to, $subject, $message, $headers);
?>