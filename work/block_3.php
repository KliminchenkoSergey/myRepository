<?php
$str = 'abcdbce';
$substr = 'bc';
echo "Оригинал: $str<br />\n";
function invert ($a, $b) { // функция, которая переворачивает подстроку $b
if ($a != abcdbce){ // я добавил исключение, которое не даст работать функции, если не использовать именно этот пример abcd
throw new BadFunctionCallException ("Вы ввели строку отличную от abcdbce");
}
$c = strrev($b);

substr_count($a, $b); //!Исправлено  считает, сколько раз подстрока $b, входит в строку $a (эта функция не используется)
echo substr_replace($a, $c, strpos($a, $b, 3), -1); // !Исправлено я использовал встроенную функцию strpos, т.к. подстрока 'bc' появляется вначале строки, которую нам не нужно инвертировать
}
echo "1) ";
invert ($str, $substr);
echo "<hr />";
$array[] = array ("a" => 3); // без использовании функции
$array[] = array ("a" => 2, "b" => 8);
$array[] = array ("a" => 5, "b" => 2,"c" => 7);
$array[] = array ("a" => 4, "b" => 10);
function cmp($i) // !Исправлено Функция, которая сортирует по индексу "a" весь массив
{
foreach ($i as $key => $arr) {
    $a[$key]  = $arr['a'];
}
array_multisort($a, $i);
var_dump ($i);
}
echo "2) ";
cmp ($array);
echo "<hr />";

?>