<?php

	session_start ();
	if (isset ($_POST["send"])){
		$from = htmlspecialchars ($_POST["from"]);
		$to = htmlspecialchars ($_POST ["to"]);
		$subject = htmlspecialchars ($_POST ["subject"]);
		$message = htmlspecialchars ($_POST ["message"]);
		
	
	//Чтобы при повторном нажатии форма не обнулялась
		$_SESSION ["from"] = $from;
		$_SESSION ["to"] = $to;
		$_SESSION ["subject"] = $subject;
		$_SESSION ["message"] = $message;
		
		$error_from = "";
		$error_to = "";
		$error_subject = "";
		$error_message = "";
		$error = false;
		if ($from == "" || !preg_match("/@/", $from)){
			$error_from = "Insert correct email";
			$error = true;
		}
		if ($to == "" || !preg_match ("/@/", $to)){
			$error_to = "Insert correct email";
			$error = true;
		}
		if (strlen($subject) == 0) {
			$error_subject = "Insert subject of massage";
			$error = true;
		}
		if (strlen($message) == 0) {
			$error_message = "Insert message <br/>";
			$error = true;
		}
		if (!$error){
			$subject = "?utf-8?8?".base64_encode($subject)."?=";
			$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
			mail ($to, $subject, $message, $headers);
			header ("Location: sucess.php?send=1");
			exit;
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>  Feed back</title>

</head>
<body>
<h2>Feed back</h2>
	<form name ="feedback" action="" method= "post">
		<label>From:</label><br/>
		<input type = "text" name = "from" value="<?=$_SESSION ["from"]?>"/> <!--Здесь вместо /echo используется /=  -->
		<span style="color: red"><?=$error_from?></span><br/>
		<label>To:</label><br/>
		<input type = "text" name = "to" value="<?=$_SESSION ["to"]?>"/>
		<span style="color: red"><?=$error_to?></span><br/>
		<label>Subject:</label><br/>
		<input type = "text" name = "subject" value="<?=$_SESSION["subject"]?>"/>
		<span style="color: red"><?=$error_subject?></span><br/>
		<label>Message:</label><br/>
		<textarea  name = "message" cols="30" rows = "20" /><?=$_SESSION["message"]?></textarea><br/>
		<span style="color: red"><?=$error_message?></span>
		<input type="submit" name = "send" value = "send"/>
		
	</form>

</body>
</html>

