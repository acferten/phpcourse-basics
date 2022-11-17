<?php
if (!isset($_GET)) {
    return 'Ничего не передано!';
}

if (!isset($_GET['operation'])) {
    return 'Не передана операция';
}

if (($_GET['x1'] === '') || ($_GET['x2'] === '')) {
    return 'Аргументы не переданы';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

if (!(is_numeric($x1) && is_numeric($x2))) {
    return "Неверные данные";
}


$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '/':
        if ($x2 == 0) {
            return 'На ноль делить нельзя';
        }
        $result = $x1 / $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;