<?php

	//Функции для массивов
   $array = array (12, 17, 5, 23, 56);
   echo count($array)."<br/>";
   sort ($array); 
   print_r($array); //.Функция для разработчиков
   echo "<br/>";
   rsort ($array);
   print_r($array); 
   echo "<br/>";
   
   asort ($array); // asort () сортирует значения массивов и привязывает ключи
   print_r($array); 
   echo "<br/>";
   arsort ($array);
   print_r($array); 
   echo "<br/>";
	
	ksort ($array); // ksort () сортирует значения массивов по ключам
   print_r($array); 
   echo "<br/>";
   krsort ($array);
   print_r($array); 
   echo "<br/>";
   
   shuffle ($array);//Перемешивает элементы массива
   print_r ($array);
   echo "<br/>";
   
   echo in_array(23, $array); // Ищет в массиве элемент. Если существует вывводит true или 1
   echo "<br/>";
   
   $arr_1 = array (12, 123, 64);
   $arr_2 = array (32, 43, 435);
   
   $arr_3 = array_merge ($arr_1, $arr_2); //Объединение в один массив
   print_r ($arr_3);
   echo "<br/>";
   
   $arrDone = array (1, 2, 3, 4, 5, 6, 7, 8,);
  $arrDone = array_slice ($arrDone, 1, -2); // Аналог strsub(), только с массивом. Здесь первый элемент откидываем и с конца два
   print_r ($arrDone);
?>