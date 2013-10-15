<?php
//******************************************************************************
// printZeroTD($Data)-вывод информации с проверкой на пустоту
//Входные параметры: $Data- входящие данные
//Выходные параметры:
//******************************************************************************
function printZeroTD()
{
$Data = func_get_args(); //определяем данные
$i = func_num_args(); //определяем количество параметров

switch ($i) {
   case 0:
   print "<TD>0</TD>\n";
   break;

   case 1:
	if (is_numeric($Data[0])) {
		if ($Data[0] == 0) {
			print "<TD>0</TD>\n";
		}
		else {
			print "<TD>".$Data[0]."</TD>\n";
		}
	}
	else {
		if (empty($Data[0])) {
			print "<TD>0</TD>\n";
		}
		else {
			print "<TD>".$Data[0]."</TD>\n";
		}

	}
   break;

   case 2:
	if (is_numeric($Data[0])) {
		if ($Data[0] == 0) {
			print "<TD>0</TD>\n";
		}
		else {
			print "<TD> <FONT color={$Data[1]}>".$Data[0]."</FONT></TD>\n";
		}
	}
	else {
		if (empty($Data[0])) {
			print "<TD>0</TD>\n";
		}
		else {
			print "<TD> <FONT color={$Data[1]}>".$Data[0]."</FONT></TD>\n";
		}
	}
   break;

   case 3:
	if (is_numeric($Data[0])) {
		if ($Data[0] == 0) {
			print "<TD>0</TD>\n";
		}
		else {
			print "<TD> <FONT color={$Data[1]}>".$Data[0]."{$Data[2]}</FONT></TD>\n";
		}
	}
	else {
		if (empty($Data[0])) {
			print "<TD>0</TD>\n";
		}
		else {
			print "<TD> <FONT color={$Data[1]}>".$Data[0]."{$Data[2]}</FONT></TD>\n";
		}
	}
   break;
}

}
//******************************************************************************
// printZeroTH($Data)-вывод информации с проверкой на пустоту
//Входные параметры: $Data- входящие данные
//Выходные параметры:
//******************************************************************************
function printZeroTH()
{
$Data = func_get_args(); //определяем данные
$i = func_num_args(); //определяем количество параметров

switch ($i) {
   case 0:
   print "<TH>&nbsp;</TH>\n";
   break;

   case 1:
	if (is_numeric($Data[0])) {
		if ($Data[0] == 0) {
			print "<TH>&nbsp;</TH>\n";
		}
		else {
			print "<TH>".$Data[0]."</TH>\n";
		}
	}
	else {
		if (empty($Data[0])) {
			print "<TH>&nbsp;</TH>\n";
		}
		else {
			print "<TH>".$Data[0]."</TH>\n";
		}

	}
   break;

   case 2:
	if (is_numeric($Data[0])) {
		if ($Data[0] == 0) {
			print "<TH>&nbsp;</TH>\n";
		}
		else {
			print "<TH> <FONT color={$Data[1]}>".$Data[0]."</FONT></TH>\n";
		}
	}
	else {
		if (empty($Data[0])) {
			print "<TH>&nbsp;</TH>\n";
		}
		else {
			print "<TH> <FONT color={$Data[1]}>".$Data[0]."</FONT></TH>\n";
		}
	}
   break;

   case 3:
	if (is_numeric($Data[0])) {
		if ($Data[0] == 0) {
			print "<TH>&nbsp;</TH>\n";
		}
		else {
			print "<TH> <FONT color={$Data[1]}>".$Data[0]."{$Data[2]}</FONT></TH>\n";
		}
	}
	else {
		if (empty($Data[0])) {
			print "<TH>&nbsp;</TH>\n";
		}
		else {
			print "<TH> <FONT color={$Data[1]}>".$Data[0]."{$Data[2]}</FONT></TH>\n";
		}
	}
   break;
}
}

//*******************************************************************************
// inputDate($InputDate)- функция проверки и вывода даты
// Входные параметры: $InputDate-входная дата
// Выходные параметры:
//********************************************************************************
function inputDate($InputDate)
{
  if ($InputDate{0} == "0") {
      $InputDate = substr($InputDate,1);
  }


   //замена различных знаков на точку на точку
   $symbol = array(".", ",", ":", ";", "-", "|", "\\", "/", "~","?"," ");
   $str = str_replace($symbol, "", $InputDate);
return $str;
}

//*******************************************************************************
// TotalAnalize- необходимые пояснения для матрицы
// Входные параметры: $InputDate-входная дата
// Выходные параметры:
//********************************************************************************
function TotalAnalize(){
print("<h1>ИТОГ АНАЛИЗА ВСЕХ ЛИНИЙ ПСИХОМАТРИЦЫ</h1>");
print("<b>Строки :</b> <br>");
print("1 я строка — (1, 4, 7) — целеустремленность, стойкость<br>");
print("2 я строка — (2, 5, 8) — качество семьянина<br>");
print("3 я строка — (3, 6, 9) — стабильность (привычки)<br>");
print("<b>Столбцы: </b> <br>");
print("1 й столбец — (1, 2, 3) — самооценка, индивидуальность,<br>");
print("2 й столбец — (4, 5, 6) — обеспечение семьи,<br>");
print("3 й столбец — (7, 8, 9) — сила таланта.<br>");
print("<b>Диагонали:  </b> <br>");
print("восходящая (плотская) 3, 5, 7 — темперамент в сексуальной сфере (желание),<br>");
print("спадающая (духовная) 1, 5, 9 — духовное начало, стремление к высшему началу (Бог, разум), поиск духовности в партнере.<br>");
print("<h2>количественные характеристики цифр</h2>");
print("<b>цифр нет</b>  — это означает, что качество, за которое они отвечают, отсутствует у человека;<br>");
print("<b>одна цифра</b>  — качество очень слабо развито, что говорит о необходимости развивать его и совершенствовать;<br>");
print("<b>две цифры</b>  — считается, что качество дано в норме, т. е. оно развито, но не доминирует над другими, при желании можно заняться его совершенствованием;<br>");
print("<b>три цифры</b>  — это особый знак, человек включает это качество экстренно, случайно, вдруг;<br>");
print("<b>четыре цифры</b>  — качество развито сильно;<br>");
print("<b>пять цифр</b>  — качество развито максимально сильно, предел!<br>");
print("<b>шесть и более цифр</b>  — наступает перегрузка качества, когда оно начинает меняться на противоположное, т. е. из сильного превращается в слабое.<br>");
print("<i>Внимание! Эта шкала справедлива и для любых линий психоматрицы.</i>");
print("<p></p>");


}

//*******************************************************************************
// DrawMatrix($ArrayMatrix)- функция рисования матрицы
// Входные параметры: $InputDate-входная дата
// Выходные параметры:
//********************************************************************************
function DrawMatrix($ArrayMatrix){
  global $array_row1,$array_row2,$array_row3;
  global $array_column1,$array_column2,$array_column3;
  global $array_top,$array_bottom;
  global $digit1,$digit2,$digit3,$digit4,$digit5,$digit6,$digit7,$digit8,$digit9;

  print "<table align=\"center\" class=\"matrix\">\n";
  print "  <tr>\n";
    printZeroTD(Digit(1,$ArrayMatrix[1]));
    printZeroTD(Digit(4,$ArrayMatrix[4]));
    printZeroTD(Digit(7,$ArrayMatrix[7]));
    $row1 = $ArrayMatrix[1]+$ArrayMatrix[4]+$ArrayMatrix[7];
    printZeroTH($row1);
  print "  </tr>\n";
  print "  <tr>\n";
    printZeroTD(Digit(2,$ArrayMatrix[2]));
    printZeroTD(Digit(5,$ArrayMatrix[5]));
    printZeroTD(Digit(8,$ArrayMatrix[8]));
    $row2 = $ArrayMatrix[2]+$ArrayMatrix[5]+$ArrayMatrix[8];
    printZeroTH($row2);
  print "  </tr>\n";
  print "  <tr>\n";
    printZeroTD(Digit(3,$ArrayMatrix[3]));
    printZeroTD(Digit(6,$ArrayMatrix[6]));
    printZeroTD(Digit(9,$ArrayMatrix[9]));
    $row3 = $ArrayMatrix[3]+$ArrayMatrix[6]+$ArrayMatrix[9];
    printZeroTH($row3);
  print "  </tr>\n";
  print "  <tr>\n";
    $column1 = $ArrayMatrix[1]+$ArrayMatrix[2]+$ArrayMatrix[3];
    $column2 = $ArrayMatrix[4]+$ArrayMatrix[5]+$ArrayMatrix[6];
    $column3 = $ArrayMatrix[7]+$ArrayMatrix[8]+$ArrayMatrix[9];
    $diagonal_top = $ArrayMatrix[3]+$ArrayMatrix[5]+$ArrayMatrix[7];
    $diagonal_bottom = $ArrayMatrix[1]+$ArrayMatrix[5]+$ArrayMatrix[9];

    printZeroTH($column1);
    printZeroTH($column2);
    printZeroTH($column3);
  print "  </tr>\n";
  print "</table>";

  print("<H1>Характеристика человека</H1>");
  print($array_row1[$row1]);
  print "<p></p> ";
  print($array_row2[$row2]);
  print "<p></p> ";
  print($array_row3[$row3]);
  print "<p></p> ";
  print($array_column1[$column1]);
  print "<p></p> ";
  print($array_column2[$column2]);
  print "<p></p> ";
  print($array_column3[$column3]);
  print "<p></p> ";
  print($array_top[$diagonal_top]);
  print "<p></p> ";
  print($array_bottom[$diagonal_bottom]);
  print "<p></p> ";
  print("<h2>Характеристики цифр, входящих в матрицу</h2>");

  fillZero(&$ArrayMatrix);

  print($digit1[$ArrayMatrix[1]]);
  print "<p></p> ";
  print($digit2[$ArrayMatrix[2]]);
  print "<p></p> ";
  print($digit3[$ArrayMatrix[3]]);
  print "<p></p> ";
  print($digit4[$ArrayMatrix[4]]);
  print "<p></p> ";
  print($digit5[$ArrayMatrix[5]]);
  print "<p></p> ";
  print($digit6[$ArrayMatrix[6]]);
  print "<p></p> ";
  print($digit7[$ArrayMatrix[7]]);
  print "<p></p> ";
  print($digit8[$ArrayMatrix[8]]);
  print "<p></p> ";
  print($digit9[$ArrayMatrix[9]]);
  print "<p></p> ";

}

//*******************************************************************************
// Digit($digit, $count)- функция подсчета кол-ва значений
// Входные параметры: $InputDate-входная дата
// Выходные параметры:
//********************************************************************************
function Digit($digit, $count){
$i = 0;
$str = "";
while($i<$count){
    $str = $str.$digit;
    $i++;
}

return $str;
}

//*******************************************************************************
// fillZero(&$ArrayMatrix)- функция подсчета кол-ва значений
// Входные параметры: $InputDate-входная дата
// Выходные параметры:
//********************************************************************************
function fillZero(&$ArrayMatrix){

$i = 1;
  while ($i<10){
    if(!array_key_exists($i,$ArrayMatrix)) $ArrayMatrix[$i] = 0;
    $i++;
  }
}
?>