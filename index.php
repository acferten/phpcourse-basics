<?php

$n = 345;

while ($n < 357) {
    if ($n % 2 == 0) {
        $array[] = $n;
    }
    $n++;
}
var_dump($array);
