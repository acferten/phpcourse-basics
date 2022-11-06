<?php

function isIncluded(array $arr, int $n)
{
    foreach ($arr as $element) {
        if ($element === $n) {
            return true;
        }
    }
    return false;
}

function countAmount(array $arr, int $n)
{
    $counter = 0;
    foreach ($arr as $element) {
        if ($element === $n) {
            $counter++;
        }
    }
    return $counter;
}

$n = 5;
$A = [1, 5, 5, 5, 7, 8, 5, 9, 0];

echo "-- элемент $n в массиве    " . var_dump(isIncluded($A, $n));
echo "-- количество элемента $n в массиве" . var_dump(countAmount($A, $n));

