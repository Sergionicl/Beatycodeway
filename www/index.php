<?php
	/* Работа с правами доступа. Сделал скриншот о таблице прав*/
	echo __FILE__; // Где находится файл
	echo "<br/>";
	echo fileperms (__FILE__); //Права доступа к файлу, но Windows не выведет, только UNIX
	chmod (__FILE__, 0777); //Изменение прав, здесь все пользователи могут и писать и читать
?>