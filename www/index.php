<?php
	
	$name = $_POST["name"];
	$done = $_POST ["done"];
	
	if (isset($done)){//Спрашивает сработала ли кнопка Submit
		if ($name == "")
			echo "Please insert anything <a href = '/'> Redo</a>";
		else
			header ("Location: index.php");//Перенаправляет на страницы формы. В данном случае не нужна
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Form</title>
</head>

<body>
	<form  name="test" action = "" method = "post">
		 <label> Name: </label> <br/>
		 <input type = "text" name = "name" placeholder="Name" /><br/>
		 <label> Email: </label> <br/>
		 <input type = "text" name = "email" placeholder="mih.lars@mail.ru" /><br/>
		 <label> Massage: </label> <br/>
		 <textarea name = "message" cols="40" rows="5"></textarea><br/>
		 <br/>
		 <input type="submit" name="done" value="Ready"/>
	</form>
	

</body>
</html>