<?php
	//setcookie("num", 10, time()+30);
	echo $_COOKIE["num"]."<br/>";
	
	if (isset ($_COOKIE["num"]))
		echo "COKI is";
	else
		echo "COOKIE isn't";
?>