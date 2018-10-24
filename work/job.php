<?php 
echo "Простые числа от 10, до 53: "; # (!Исправлено)
for ($k = 10; $k <= 53; $k++) {
 for($i = 2; $i < $k; $i++) {
 if ($k % $i == 0) continue 2;
 }
 echo "$k ";						# (!Конец испраления)
}

   echo "<hr>";      				# Отделил пункт задачи
  $arr = array (1 => array ( 		# Массив, состоящий из массивов по 3 простых числа
               		"a" => 11, 
              		"b" => 13, 
              		"c" => 17
               ),
               2 => array (
             	 	"a" => 19, 
              	 	"b" => 23, 
             	 	"c" => 29
             	),
               3 => array (
  					"a" => 31, 
               		"b" => 37, 
               		"c" => 41
               		)
              ); 

function trapezium_area ($a, $b, $c) # Функция, которая считает площадь трапеции
{
$ta = (0.5*($a+$b)*$c);
return $ta;
}

$s1 = trapezium_area ($arr[1][a], $arr[1][b], $arr[1][c]);
echo "Площадь 1 трапеции: $s1<br />";
$s2 = trapezium_area ($arr[2][a], $arr[2][b], $arr[2][c]);
echo "Площадь 2 трапеции: $s2<br />";
$s3 = trapezium_area ($arr[3][a], $arr[3][b], $arr[3][c]);
echo "Площадь 3 трапеции: $s3<hr>";
$s = array ($s1, $s2, $s3);

$i = 0;
do {
$max = $s[$i];
++$i;
}

while ($s[$i] < 1400 && ($i < count($s)));
echo "Максимальная площадь трапеции, но не больше 1400 : $max<br />";


	
function exp1 ($x, $y) {  # (!Исправлено)  Функция возведения в степень
  if($y == 0){
    return 1;
  }
  if($y < 0){
    return exp1( 1/$x, -$y); # -$y значит смену знака с отрицательного на положительный
  }
  return $x * exp1($x, $y-1); # (!Конец испраления)  Вызов функции внутри функции
}

function getMin ($arr) {   # (!Исправлено)   Функция нахождения минимума в массиве
	$p = count($arr);    	  # в $p количество переменных в массиве $arr
	$min = $arr[0]; 
	for ($i = 1; $i < $p; $i++) { 
	if ($arr[$i] < $min) { 
	$min = $arr[$i]; 
	}
	}
return $min;
}						  # (!Конец испраления)

$mins1 = getMin (array_values($arr[1])); # (!Исправлено) array_values возвращает числовые ключи, для того, чтобы функция могла 													 посчитать минимум
$mins2 = getMin (array_values($arr[2])); # (!Исправлено)
$mins3 = getMin (array_values($arr[3])); # (!Исправлено)
echo "$mins1, $mins2, $mins3";
 function calculation ($x, $y, $z) # Функция формулы, которая использует написанные ранее формулы
{
$f = ($x * exp1($y, $z) + exp1(exp1($x / $z, $y) % 3, getMin ($x, $y, $z)));
return $f;
}
$f1 = calculation ($arr[1][a], $arr[1][b], $arr[1][c]);
  echo "Вычисление 1 массива по формуле: $f1<br />";
$f2 = calculation ($arr[2][a], $arr[2][b], $arr[2][c]);
  echo "Вычисление 2 массива по формуле: $f2<br />";
$f3 = calculation ($arr[3][a], $arr[3][b], $arr[3][c]);
  echo "Вычисление 3 массива по формуле: $f3<hr>";
foreach ($s as $key => &$value) {
  if ($value % 2 !=0) # Проверка нечетности
  echo "Это нечетное число: $value <br />"; # Отметка о нечетности числа
else
  echo "$value<br />";
unset($value); # Удалил перечисленные переменные
}
echo "<hr>";
echo "<table cellspacing='2' border='1' cellpadding='5' width='600'>
<tr> <th>a</th> <th>b</th> <th>c</th> <th>s</th> <th>f</th> <th>Нечетный</th> </tr> 
<tr> <td>{$arr[1][a]}</td> <td>{$arr[1][b]}</td> <td>{$arr[1][c]}</td> <td>{$s1}</td> <td>{$f1}</td> <td></td> </tr> 
<tr> <td>{$arr[2][a]}</td> <td>{$arr[2][b]}</td> <td>{$arr[2][c]}</td> <td>{$s2}</td> <td>{$f2}</td> <td></td> </tr> 
<tr> <td>{$arr[3][a]}</td> <td>{$arr[3][b]}</td> <td>{$arr[3][c]}</td> <td>{$s3}</td> <td>{$f3}</td> <td></td> </tr> 
</table><hr>"; # Таблица
/*
class FirstClass { # Первый класс, в котором функция возведения в степень
function exp1 ($x, $y) {
  if($y == 0){
    return 1;
  }
  if($y < 0){
    return exp1( 1/$x, -$y);
  }
  return $x * exp1($x, $y-1);
  $this -> xy = $x, $y;
}

function getMin ($arr) {
	$p = count($arr);
	$min = $arr[0]; 
	for ($i = 1; $i < $p; $i++) { 
	if ($arr[$i] < $min) { 
	$min = $arr[$i]; 
	}
	}
return $min;
}

}
$myroom - new FirstClass();
$myroom -> exp1()
*/
/*
$res = new FirstClass();
echo "Результат возведения в степень 10 в 5 = {$res -> exp1(10, 5)}";
echo "<hr>";
class SecondClass { # Второй класс, в котором исчисляется функция используемая выше
	function calculation ($x, $y, $z) 
	{
		$f = 	($x * exp1($y, $z) + exp1(exp1($x / $z, $y) % 3, getMin ($x, $y, $z)));
		return $f;
	}
}
$res = new SecondClass();
echo "Реультат по формуле выше с переменными (5, 2, 5) f = {$res -> calculation(5, 2, 5)}";
echo "<hr>";

class ThirdClass { # Третий класс, в котором исчисляется функция которая дается в задании
	function calculation2 ($x, $y, $z) 
	{
		$f2 = 	(exp1($x + $y, exp1($z * ($x / $z), getMin($x, $y, $z))));
		return $f2;
	}
}
$res = new ThirdClass();
echo "Реультат по формуле f2 c переменными (3, 2, 1) f2 = {$res -> calculation2(3, 2, 1)}";
echo "<hr>";
class HelpClass {   # Класс, имеющий в себе 3 предыдущие функции
	 function exp1 ($x, $y) 
	{
	 	$pow = pow($x, $y);
		return ($pow);
	}

	function calculation ($x, $y, $z) 
	{
		$f = 	($x * exp1($y, $z) + exp1(exp1($x / $z, $y) % 3, getMin ($x, $y, $z)));
		return $f;
	}
	function calculation2 ($x, $y, $z) 
	{
		$f2 = 	(exp1($x + $y, exp1($z * ($x / $z), getMin($x, $y, $z))));
		return $f2;
	}
  }
	*/

/*
$arr = array(145, 21, 46, 213, 114, 7, 84, 91, 302, 501, 37);
$cnt = count($arr);
$min = $max = $arr[0]; 
$index_min = $index_max = 0; 

 // а вот и цикл 
for ($i = 1; $i < $cnt; $i++) { 
if ($arr[$i] > $max) { 
$index_max = $i; 
$max = $arr[$i]; 
} else 
if ($arr[$i] < $min) { 
$index_min = $i; 
 $min = $arr[$i]; 
} 
} 

echo "Максимальное число \$arr[$index_max] = $max<br>"; 
echo "Минимальное число \$arr[$index_min] = $min<br>"; 
function exp1 ($x, $y){  # (!Исправлено)  Функция возведения в степень
  if($y == 0){
    return 1;
  }
  if($y < 0){
    return exp1( 1/$x, -$y); # -$y значит смену знака с отрицательного на положительный
  }
  return $x * exp1($x, $y-1); # (!Конец испраления)  Вызов функции внутри функции
}

function getMin ($s){  # (!Исправлено)  Функция возведения в степень
$min = $s[0]; 
for ($i  = 1; $i < 4; $i++) {
if ($s[i] < $) {
	$min = $s[i];
 }
}
}

  	for ($k = 10; $k <= 53; $k++) {
 for($i = 2; $i < $k; $i++) {
 if ($k % $i == 0) continue 2;
 }
 */
?>