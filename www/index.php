<?php

	//Проверка переменной, ее удаление, проверка на введеную информацию, либо на тип данных
	$x = 12;
	
	if(	isset ($x)){
	 echo "The variale is here";
	echo "<br/>";
	}
	else echo "The variable is not here";
	unset ($x);
	echo "The variale is not here";
	echo "<br/>";
	$x = "15.2";
	
	echo "Is numeric -".is_numeric($x)."<br/>"; // Проверяет содержит ли переменная цифры (выше хотя она строковая она содержит цифры)
	echo "Is Intager -".is_integer($x)."<br/>"; // Проверяет относится ли переменная к типу целые числа (нет она введена через двойные кавычки она не является строковой)
	echo "Is Double -".is_double($x)."<br/>";// Проверит относится ли переменная к типу двойных с запитой
	echo "Is String -".is_string($x)."<br/>";// Проверит относится ли переменная к типу строковых
	echo "Is Boolean -".is_bool($x)."<br/>";// Проверит относится ли переменная к Логическим
	echo "Is Scalar -".is_scalar($x)."<br/>";// Проверит относится ли переменная к Скалярным (не массивам)
	echo "Is Null -".is_scalar($x)."<br/>";// Проверит заложено ли что-нибудь в переменную , например "$null";
	echo "Is Array -".is_array($x)."<br/>";
	echo "Type - ".gettype($x)."<br/>";

?>