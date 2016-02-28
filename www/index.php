<?php
	$mysqli = @new mysqli("localhost", "root", "", "books");
	if (mysqli_connect_errno()){
		die(mysqli_connect_error());
	}
	$mysqli -> query ('SET NAMES "utf8"');
	
	//Подготовленные запросы более безопасные
	
	$sql = "SELECT  `name` FROM  `customers` WHERE  `customerid` =?";
	$stmt = $mysqli->prepare($sql);
	$customerid = 3;
	// указываем параметр запроса
	$stmt->bind_param('i', $customerid);
	$stmt->execute();
	// привязка переменных к подготовленному запросу для размещения результата
	$stmt->bind_result($name);
	while($stmt->fetch()){ echo $name.'<br />';}
?>