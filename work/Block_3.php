<?php
function invert ($a, $b, $c) { // функция, которая переворачивает подстроку $b
$d = strrev($b);
return $a . $d. $c;
}
echo "1) ";
echo invert (abcd, bc, e);
echo "<hr />";
$array[] = array ("a" => 3); // без использовании функции
$array[] = array ("a" => 2, "b" => 8);
$array[] = array ("a" => 5, "b" => 2,"c" => 7);
$array[] = array ("a" => 4, "b" => 10);
foreach ($array as $key => $arr) {
$a[$key] = $arr['a'];
}
array_multisort($a, $array);
echo "2) ";
var_dump ($array);
echo "<hr />";

/*
function cmp($i)
{
foreach ($i as $key => $arr) {
    $a[$key]  = $arr['a'];
}
array_multisort($a, $i);
}*/

?>