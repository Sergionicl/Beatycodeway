<html> 
	<head> 
		<title>Book-O-Rama Book Entry Results</title> 
	</head> 
	<body> 
		<h1>Book-O-Rama Book Entry Result</h1>
		<?php
			//Create short variable names
			$isbn = $_POST['isbn'];
			$author = $_POST['author'];
			$title = $_POST['title'];
			$price = $_POST['price'];
		
			if (!$isbn || !$author || !$price || !$title) {
				echo "You can not entered all the required details Please go back and try again.";
			exit;
			}
			
			if (!get_magic_quotes_gpc()){
				$isbn = stripslashes($isbn);
				$author = stripslashes($autor);
				$title = stripslashes($title);
				$price = doubleval($price);
			}
			
			@$db = new mysqli('localhost', 'bookorama', 'bookorama123 ', 'books');
			
			if (mysqli_connect_errno()){
				echo "Error: Could not connect to database.</br>"
				."Please try again later.";
				exit;
			}
			
			$query = "insert into books values 
			('".$isbn.".', '".$author.".', '".$title."', '".$price."')";
			$result = $db->query ($query);
			
			
			/*
			 * They are useful for spedding up execution when you are performing large number of the same 
			 * query with different data. They also protect against SQL injection-style attack.
			 * $query = "insert into books values(?,?,?,?)";
			 * $stmt = $db->prepare ($query);
			 * $stml ->bind_param ("sssd", $isb, $author, $title, $price);
			 * $stml -> execute9();
			 * echo $stmt ->affected_rows.'book inserted into database.';
			 * $stmt->close();
			 * 
			 * 
			 * */
			
			
			if ($result) {
				echo $db->affeced_rows."book inserted into database.";
			}
			else {
				echo "An error has occured. The item was not added.";
			}
				
			$db->close();			

		?>
	</body> 
</html> 