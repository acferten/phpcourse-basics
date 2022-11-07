<?php
$numbers = !empty($_GET['numbers']) ? $_GET['numbers'] : '';

$values = explode(' ', $numbers);

print_r($values);

$amount = array_count_values($values);
echo '  //  Числа, которые встречаются 2 и более раз: ';
foreach ($amount as $n => $value) {
    if ($value >= 2) {
        echo $n . ' ';
    }
}

echo '      ///////    ';

$max_value1 = max($values);
echo 'Первое число: ' . $max_value1;
unset($values[array_search(max($values), $values)]);
$max_value2 = max($values);
echo '   Второе число: ' . $max_value2;
echo '   Максимальное произведение: ' . $max_value1*$max_value2;

?>
<html>
<head>
    <title>Blank</title>
</head>
<body>
<p>

</p>
</body>
</html>