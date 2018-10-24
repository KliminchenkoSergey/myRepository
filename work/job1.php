<?php 
class BaseClass { # Базовый класс, в котором хранятся следующие методы: 1) Возведение в степень; 2) Нахождение минимального числа;
public function exp1($x, $y)
{
    $sum = 1;
    for ($i = 0; $i < $y; $i++)
        $sum *= $x;
    return $sum;
}

public function getMin ($x, $y, $z) 
{
        if ($x < $y && $x < $z) {
            return $x;
        } 
        else if ($y < $x && $y < $z) {
            return $y;
        } 
        else {
            return $z; 
}
}
}
class SecondClass extends BaseClass { # Класс, который наследует базовый класс используя его методы
 function calculation1 ($x, $y, $z) # Метод, который считает следующую формулу f=(a*b^c+(((a/c)^b)%3)^min(a,b,c))
{
$f = ($x * $this->exp1($y, $z) + $this->exp1($this->exp1($x / $z, $y) % 3, $this->getMin ($x, $y, $z)));
return $f;
}
}
class ThirdClass extends BaseClass { # Класс, который наследует базовый класс используя его методы
public function calculation2($x, $y, $z) { # Метод, который считает следующую формулу f2=((a+b)^c*(a/c)^min(a,b,c))
    $f2 = ($this->exp1($x + $y, $this->exp1($z * ($x / $z), $this->getMin($x, $y, $z))));
    return $f2;
     }
}

$res1 = new SecondClass ();
$res2 = new ThirdClass ();
echo "Результат 1 формулы: {$res1 -> calculation1(3, 2, 1)}<br />";
echo "Результат 2 формулы: {$res2 -> calculation2(3, 2, 1)}";
?>