<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php">
    Калькулятор
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать">
</form>

<form action="/index.php" method="get">
    <label>
        Числа <input type="text" name="numbers">
    </label>
    <input type="submit" value="OK">
</form>


<?php
$numbers = !empty($_GET['numbers']) ? $_GET['numbers'] : '';

$values = explode(' ', $numbers);

echo implode(" ", $values);

$amount = array_count_values($values);


echo '  //  Наиболее часто встречающееся число: ' . array_search(max($amount), $amount);

foreach ($values as $num) {
    if ($num == 0) {
        unset($values[array_search($num, $values)]);
        $values[] = 0;
    }
}
echo '  //  Переместите все нули в конец строки: ' . implode(" ", $values);


?>

</body>
</html>