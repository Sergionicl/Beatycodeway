<?php
	session_start();
	if ($GET["send"]==1)
	echo "You have send on email ".$_SESSION["to"];
?>