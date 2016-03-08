<?php

//Multiple Select 

$sql = "SELECT orders.orderid, orders.amount, orders.date
FROM customers, orders
WHERE customers.name = 'Putin'
AND customers.customerid = orders.customerid";

//Finding Rows That join 
$sql = "SELECT customers.customerid, customers.name, orders.orderid
FROM customers 
LEFT JOIN orders
ON customers.customerid = orders.customerid;
";

/* Группировка
Данные в табличке вот такие
маша - попугай
света - кошка
маша - хомяк
юля - собака
света - собака
маша - рыбки

Из этой таблички видно, что
у Маши есть попугай, хомяк и рыбки,
у Светы кошка и собака,
а у Юли только собака.
Так вот есть задача вывести всех людей из таблицы и чтобы возле каждого показывалось, какие животные у него есть.
*/
//Делаем вот такой запр
SELECT `name`, GROUP_CONCAT(`pet`) as `pet`
FROM `test`
GROUP BY `name`

/* Результат получается такой
маша - попугай,хомяк,рыбки
света- кошка,собака
юля - собака 
 * 
 */


?>