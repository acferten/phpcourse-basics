<?php
function minimalNumber(float $a, float $b, float $c)
{
    return min($a, $b, $c);
}

function multiTo2(&$x, &$y)
{
    $x *= 2;
    $y *= 2;
}

function numbers($a)
{
    if ($a == 0) {
        echo ' // Числа от 0 до n ' . 0;
        return 0;
    }
    numbers($a - 1);
    echo ', ' . $a;
}

$x = 13.97;
$c = 5.5;
$v = 8.5;


echo 'Минимальное число: ' . minimalNumber($x, $c, $v);
multiTo2($c, $v);
echo ' // Умножение на 2: ' . $c . '--' . $v;
numbers(5)

?>