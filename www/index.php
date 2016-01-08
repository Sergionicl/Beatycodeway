<?php
	echo PHP_VERSION;
	echo"Hi"; //Эта строчка выводит Hi
	define("PI", 3.14);
	echo "</br>";
	echo PI;
	echo "<br/>";
	echo defined ("PI");
	echo "<br/>";
	
	/* Оператор объединения и бэкслэш*/
	$str_1 = "<b>First string</b>";
	$str_2 = "<i>Second string</i>";
	echo "\"".$str_1." ".$str_2 ."\"";
	
	/*Операторы условия*/
	$x = 10;
	$y = 5;
	if($x==$y && $x != 12 && $y == 5 && ($x+5) == 15)
		echo '</br>No!';
	else {
		echo '</br>Ok!';
		echo '</br>All right';
	}
	echo "</br>";
	/*Оператор Switch*/
	$x= 5;
	switch ($x){
		case "Hello" : echo "Это строковая переменная"; break;		
		case 5 : echo "Эта переменная равна 5"; break;
		case 12 : echo "Это переменная равна 12"; break;
		default : "Ничего не подходит";
	}
	
	/*Оператор эквивалентности*/
	$string = "Example";
	$num = o;
	$bool_1 = $string  === true;
	echo "</br>$bool_1 = $string == true;";
	$bool_2 = $num === FALSE;
	echo "</br>";
	echo "$bool_2 = $num === FALSE;";
	
	
/*Циклы*/
for($i=100; $i>=50; $i-=2){
	if($i % 5 == 0) continue;
	if($i <= 88) break;
	echo "</br>Write № $i";	
}
 
 $x = 1;
 
 while ($x <= 10) {
 	if ($x == 7)
		for ($y = 0; $y < 5; $y += 3)
			echo "Anoter iteration - $y </br>";
 	echo "Iteration - $i</br>";
	$x++;
 }
 echo "<br/>";
 $z = 10;
 do {
 	echo "Operatio made one time";
 	$z++;
 } while ($z < 5);
 
 /*Function*/
 function printwords ($word, $x, $y) {
 	$word = math($x, $y);
 	echo "</br>$word";
 }
 function math ($first, $second){
 	$summa = $first + $second;
	return $summa;
 }
 $x = 12;
 $y = 35;
 
 $sum = $x + $y;
 
 printwords($sum, $x, $y);
 
 
 $array = array (12, -3.25, "string", false);
 echo "</br>".$array[1]."</br>".$array[2];
 $array[] = "New Element";
 echo "</br>".$array[4]."<hr/>";
 
 for ($i=0; $i < count($array); $i++) {
 	echo "Elemt of array with index $i = ".$array[$i]."</br>";
 	
 }
 
 $list = array ("age" => 12, "name" => "Alex", "Schoolboy" => true);
 $list["age"] = 10;
 $summa = 0;
 
echo "<hr/>".getAverage (array("first" => 12, "sec"=> 45, "third"=> 23, "forth"=> 55));
 

  function getAverage ($array){
 	foreach($array as $key => $value){
 		$summa += $value;
 		echo $key."<br/>";
 	}
 	
 	return $summa / count ($array);
 }
 
 
 $array1 = array(array(12, 4.43, "string"), array("Example"), array (45, "strong"));
  echo $array1[0][2];
  
  for ($i=0; $i < count($array1); $i++){
  	for ($j=0; $j < count($array1[$i]); $j++){
  		 echo $array1[$i][$j]." ";
		 
		}
	echo "<br/>";
  }
 
?>