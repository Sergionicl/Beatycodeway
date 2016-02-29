<?php
	/* $mysqli = @new mysqli("localhost", "root", "", "books");
	if (mysqli_connect_errno()){
		die(mysqli_connect_error());
	}
	$mysqli -> query ('SET NAMES "utf8"');
	
	//Подготовленные запросы более безопасны
	
	$sql = "SELECT  `name` FROM  `customers` WHERE  `customerid` =?";
	$stmt = $mysqli->prepare($sql);
	$customerid = 3;
	// указываем параметр запроса
	$stmt->bind_param('i', $customerid);
	$stmt->execute();
	// привязка переменных к подготовленному запросу для размещения результата
	$stmt->bind_result($name);
	while($stmt->fetch()){ echo $name.'<br />';}
	$mysqli->close();
	 * 
	 */	

	$mysqli = @new mysqli("localhost", "root", "", "books");
	if (mysqli_connect_errno()){
		die(mysqli_connect_error());
	}
	$mysqli -> query ('SET NAMES "utf8"');
	
	$sql = "INSERT INTO `customers`(`customerid`, `name`, `address`, `city`) 
		VALUE (?, ?, ?, ?)";
	$stmt = $mysqli->prepare($sql);
	$customerid = "";
	$name = "Putin";
	$address = "Zaraevo";
	$city = "Moscow";
	
	$stmt -> bind_param ('isss', $customerid, $name, $address, $city);
	$stmt -> execute();
	echo "It is ok";
	
	$mysqli->close();
?>