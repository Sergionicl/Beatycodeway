<?php
	function printResult ($result_set){
		echo "The number of zapisey -".$result_set-> num_rows."<br/>";
		while (($row = $result_set-> fetch_assoc())!=false){
			print_r ($row); //Можно только логин echo ($row["login"])
			echo "<br/>";
		}//Вывод записей
	}
	
	$mysqli = new mysqli("localhost", "root", "", "mybase");
	$mysqli-> query ("SET NAMES 'utf8'");//Установить кодировку utf8. Очень важно
	
	
	for ($i=1; $i<10; $i++){
	$mysqli-> query ("INSERT INTO `users` (`login`, `password`, `reg_date`)
	VALUES ('user_$i', '".md5($i)."', '".time()."' )");
	}//Добавляем пользователей для работы

	$result_set = $mysqli-> query ("SELECT `userid`, `login` FROM `users` WHERE `userid` >2 ORDER BY `login` ASC LIMIT 0 , 2" ); // Выделяем нужные элементы по критериям, 
	//упорядочиваем по возсрастанию (ASC, DESC - по убыванию), ограничивает LIMIT 0-с какой начать
	printResult ($result_set);
	
	$result_set = $mysqli -> query ("SELECT `login` FROM `users` WHERE `login` LIKE '%se%' ");//Использование LIKE, чтобы вывести все логины, где встречается "se"
	printResult ($result_set);
	
	$result_set = $mysqli -> query ("SELECT COUNT (`login`) FROM `users` ");//Использование LIKE, чтобы вывести все логины, где встречается "se"
	printResult ($result_set);
	
	
	$mysqli->close ();//Закрываем соединение, чтобы не накопилось количество соединений превышающее допустимое
	hello new branchoook
?>