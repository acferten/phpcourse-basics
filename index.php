<?php
$array = [1, 3, 2];
asort($array);
$s = implode(":", $array);
echo $s . ' // ';

$array = [1, 2, 3, 4, 5];
var_dump(array_slice($array, 1, 3));

echo ' // ';

$array = [0, 2, 3, 1, 2];
var_dump(array_unique($array));