<?php
include_once("matrix_model.php");
include_once("row_column.php");

//получение массива из строки-даты рождения
$strDate = inputDate($_REQUEST["Date"]);
$ArrayDate1 = str_split($strDate);

print("<h1>Расчет дополнительных цифр в психоматрице</h1>");
print("<h2>Ход самого события в момент его свершения</h2>");
print(strrev($strDate)."<br>");
print("<p></p>");
//Первое число
$Number1 = array_sum($ArrayDate1);
$Number2 = array_sum(str_split($Number1));
$Number3 = $Number1 - 2 * array_sum(array_slice($ArrayDate1, 0, 1));
$Number4 = array_sum(str_split($Number3));
print("<h2>Причины,вызвавшие события или определившие его ход</h2>");
print($Number3 ." и ". $Number4."<br>");
print("<p></p>");
print("<h2>Результат или конечная цель события</h2>");
print($Number1 ." и ". $Number2."<br>");
print("<p></p>");

$ArrayN1 = str_split($Number1);
$ArrayN2 = str_split($Number2);
$ArrayN3 = str_split($Number3);
$ArrayN4 = str_split($Number4);


$ArraySum = array_merge($ArrayDate1,$ArrayN1, $ArrayN2, $ArrayN3, $ArrayN4);
$ArrayMatrix = array_count_values(array_values($ArraySum));
print("<p></p>");
TotalAnalize();
DrawMatrix($ArrayMatrix);

 ?>