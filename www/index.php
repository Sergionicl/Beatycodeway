<?php
	//Работа с файлами
	/*
	$file = fopen ("a.txt", "a+t"); // Если нет создает файл и записывае в конце
	fwrite ($file, "Example\nText\nNext");
	fclose ($file);
	 * 
	 */
	$file = fopen ("a.txt", "r+t");//Чтение и запись, без плюса просто чтение. "t" для считывания таких символов как"\n"
	while (!feof($file)){
	echo fread ($file, 2)."<br/>"; //Выводится посимвольно
	}
	
	fseek ($file,0); //Перестановка курсора без него не получится читать так как курсор после выполнения вышеуказанных курсор находится в конце
	echo fread ($file,1);
	fclose ($file);
	echo "<hr/>";
	
	/*file_put_contents ("c.txt", "TEST test Test");//Упрощенный вариант работы с файлами. Включает в себя ряд действий
	echo file_get_contents("c.txt")."<br/>"; Почему-то не работает
	 * 
	 */
	echo file_exists ("a.txt")."<br/>";
	echo filesize ("a.txt")."<br/>";
	/*
	rename ("a.txt", "b.txt"); Переименовывает один файл в другой
	 * 
	 */
	 /* unlink ("b.txt"); Удаляет файл из сервера. 
	  * 
	  */
?>