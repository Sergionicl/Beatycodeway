<?php
//Работа с SESSION
	session_start ();
	$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0; // Конструкция как if else  только меньше
	// Если соответствует, то $_COOKIE["num"] иначе : 0
	$num++;
	$_SESSION["num"] = $num; //Ceccия это не функция как Куки. Она как глобальная переменная
	//Cceccия удаляется через 15 минут
	echo "The user updated this page $num times";
	
	/*session_destroy (); Удаляет ceccию*/
?>