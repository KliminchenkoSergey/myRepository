<?php
function square($num)
{
   $square = $num * $num;
   return $square;
}	

$num =7;
$square = square($num);
echo $square;

function getMin ( $p ) {
 
	$res = min($p);
 
    return $res;
 }
$p[0] = 30;
$p[1] = 1;
$p[2] = 2;
$p[3] = 40;
$z = getMin ( $p );
echo $z;
?>