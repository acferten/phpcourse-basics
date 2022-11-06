<!--переменной $c поменяйте значения этих-->
<!--переменных (в $a будет 5, а в $b будет 3)-->

<?php $a = 3;
$b = 5;
$c = 0;
echo "| a: $a\n";
echo "b: $b\n";
$c = $a;
$a = $b;
$b = $c;
echo "| a: $a\n";
echo "b: $b | ";
?>

<!--Проделайте тоже самое, но без использования -->
<!--третьей переменной, при условии что в качестве -->
<!--значений могут быть только целые числа-->

<?php
$a = 3;
$b = 5;
echo "// | a: $a\n";
echo "b: $b\n";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "| a: $a\n";
echo "b: $b\n |";
?>

<!--С помощью функции var_dump() -->
<!--получите результаты следующих выражений:-->

<?php
echo '=== !1,  ' . var_dump(!1);
echo '=== !0,  ' . var_dump(!0);
echo '=== !true,  ' . var_dump(!true);
echo '=== 2 && 3,  ' . var_dump(2 && 3);
echo '=== 5 && 0,  ' . var_dump(5 && 0);
echo '=== 3 || 0,  ' . var_dump(3 || 0);
echo '=== 5 / 1,  ' . var_dump(5 / 1);
echo '=== 1 / 5,  ' . var_dump(1 / 5);
echo "=== 5 + '5string',  " . var_dump(5 + '5string');
echo "=== '5'==5,  " . var_dump('5' == 5);
echo "=== '05' == 5,  " . var_dump('05' == 5);
echo "=== '05' == '5',  " . var_dump('05' == '5');

//Попробуйте следующие условия:
//
//    if ('string') {echo 'Условие выполнилось';}
//    if (0) {echo 'Условие выполнилось';}
//    if (null) {echo 'Условие выполнилось';}
//    if (5) {echo 'Условие выполнилось';}
//
//Объясните результат.
//
//С помощью тернарного оператора определите, является ли число чётным или нечётным и выведите результат.

if ('string') {
    echo ' string: Условие выполнилось ';
}

if (0) {
    echo '0: Условие выполнилось ';
}
if (null) {
    echo 'null: Условие выполнилось ';
}
if (5) {
    echo '5: Условие выполнилось ';
}

$two = 5 % 2 == 0 ? 'Четное ' : 'Нечетное ';
echo $two;

//    Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.
//    Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2.
//    Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного). Реализуйте с помощью рекурсии.
//    Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения. И да, тут тоже нужно реализовать с помощью рекурсии (чтобы лучше с ней познакомиться, несмотря на то что вариант с циклом проще).

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
numbers(5);
?>

<!--// Самостоятельно создайте архитектуру, описанную в статье: сделайте шапку, сайдбар, контент и футер в отдельных файлах.-->
<!--// Сделайте минимум 4 переменные для каждого из этих блоков в файле index.php и выведете их внутри этих файлов.-->
<!--// Изучите официальную документацию по include и изучите как можно использовать выражения вида-->
<!---->
<!--// $var = include 'file.php'-->

<?php

$header = '<p>HeaDER</p>';
$sidebar = '<p>SIdeBAR</p>';
$content = '<p>CONTeNT</p>';
$footer = '<p>fOoTER</p>';

$file = include 'file.php';

echo $file;
require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';