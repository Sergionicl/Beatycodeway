<?php
   //Строковые переменные
   $string = "This is example";
   
   echo strlen ($string)."<br/>";
   echo strpos ($string, "exa")."<br/>"; //Указать позицию данного выражения в строке
   echo strpos ($string, "is", 4)."<br/>";
   
   if (strpos ($string, "T") === false) echo "T is in"; //Необходимо использовать оператор эквивалентности
   else echo "T isn't";
   
   echo "<br/>".substr($string, 3, 7); //Удалил до 3 символа и после 7. Если поставит -2 - то удалит с конца два элемента. Функция гораздо больше 
   echo str_replace("is", "abc", $string);//Заменяет. Можно массивами str_replace (array("is",))
   
   $str = "<b>XXAA, main font<b/>";
   
   echo "<br/>". htmlspecialchars ($str);//Добавление спец символов безопасных подменяющих HTML
   
   echo "<br/>".strtolower ($string)."<br/>".strtoupper($string);//Верхний и нижний регистры
	
	echo "<br/>".md5 ("123");//Кодирует пароль
	echo "<br/>".trim("   string    sd sd      "); //Пробелы убирают
	
?>