<?php
	$start = microtime (true);
	echo time ()."<br/>";//Секунды с начала создания Unix 1970
	
	echo microtime(true)."<br/>";//Мили секунды
	
	echo "Time of script".(microtime(true)-$start)."seconds";//Здесь секунд в -5 степени
	
	$time = mktime (12, 35, 23, 12, 7, 2007);//часы, секунды, месяц, день и год
	
	echo "<br/>".date (" Y-m-d  H:i:s", $time); // Дата чтобы даты коректно отражались на русском нужено будет сделать массив реплейс Janiary - Январь
	//Без $time 
	
	$array = getdate ($time); // Переводит в массив
	echo "<br/>";
	print_r($array);
	echo "<br/>".checkdate(2, 28, 2012);
	
?>