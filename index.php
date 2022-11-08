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

// Создайте массив с тремя уровнями вложенности. После создания массива добавьте новые элементы на самом глубоком уровне вложенности отдельным выражением.


$article = [
    'title' => 'Название статьи',
    'text' => 'Текст статьи',
    'author' => [
        'first_name' => 'Иван',
        'last_name' => 'Иванов',
        'address' => [
            'street' => 'Ленина',
            'city' => 'Томск'
        ]
    ]
];

$article['author']['address']['house'] = '11'

?>
<html>
<head>
    <title><?= $article['title'] ?></title>
</head>
<body>
<h1><?= $article['title'] ?></h1>
<p><?= $article['text'] ?></p>
<p><?= $article['author']['first_name'] . ' ' . $article['author']['last_name'] ?></p>
<p><?= $article['author']['address']['house'] ?></p>
</body>
</html>

<?php
// Придумайте способ обойтись без использования функции count.

$carsSpeeds = [
    95,
    140,
    78
];

$countOfCars = 0;

foreach ($carsSpeeds as $speed) {
    $countOfCars++;
}
echo $countOfCars;
?>
<?php
//С помощью цикла while создайте массив, содержащий чётные числа от 345

$n = 345;

while ($n < 357) {
    if ($n % 2 == 0) {
        $array[] = $n;
    }
    $n++;
}
var_dump($array);
?>

<?php
// Перевести строку в uppercase

$n = strtoupper('oneoneone');
echo $n;

//Вывести строку в обратную сторону

echo "\n" . strrev($n);
?>

<?php

//напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает true, если переданное значение присутствует в массиве и false - если нет.
//напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает число вхождений числа в массив. Например: для массива [1, 2, 1, 3] число вхождений числа "1" будет равно двум.

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
?>

<?php
//Используя встроенные в PHP функции решите следующие задачи:
//    Есть массив чисел – [1, 3, 2]. Отсортируйте их от меньшего к большему и преобразуйте в строку, в которой значения элементов массива разделяются двоеточиями. В результате должна получиться строка “1:2:3”.
//    Есть массив чисел – [1, 2, 3, 4, 5]. Получите с помощью одной функции массив, в котором будут элементы исходного с 1-го элемента по 3-й. В результате должен получиться массив с числами [2, 3, 4].
//    Удалите все повторы чисел. Выведите их в любом порядке, разделив пробелами.
$array = [1, 3, 2];
asort($array);
$s = implode(":", $array);
echo $s . ' // ';

$array = [1, 2, 3, 4, 5];
var_dump(array_slice($array, 1, 3));

echo ' // ';

$array = [0, 2, 3, 1, 2];
var_dump(array_unique($array));
?>

<!--// форма входа 19 урок-->

<html>
<head>
    <title>Форма входа</title>
</head>
<body>
<form action="/login.php" method="get">
    <label>
        Логин <input type="text" name="login">
    </label>
    <br>
    <label>
        Пароль <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>


<!-- Калькулятор 21 урок -->

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
// 1. Найдите наиболее часто встречающееся число в строке.
//2. Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.
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


<!-- Куки 22 -->

<?php
setcookie('login', 'admin', time() + 20, '/');
echo 'Cookie установлены';
print_r($_COOKIE);
?>

<!--Система авторизации с помощью cookie на PHP-->

<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="/login.php">Авторизуйтесь</a>
<?php else: ?>
    Добро пожаловать, <?= $login ?>
    <br>
    <a href="/logout.php">Выйти</a>
<?php endif; ?>
</body>
</html>

<?php
//Напишите программу, которая выводит свой собственный код.
//Сделайте так, чтобы в этой программе не было упоминания имени самого скрипта (если программа лежит в файле homework.php, то упоминания homework.php не должно быть в исходнике).
//
//Выведите список всех файлов в текущей директории скрипта.
//Создайте теперь в директории со скриптом несколько папок.
//Сделайте так, чтобы в списке, выводимом программой, остались только папки.

echo htmlentities(file_get_contents(__FILE__));
$files = scandir(__DIR__ . '/');
foreach ($files as $file) {
    if (is_dir($file)) {
        echo $file . '<br>';
    }
}
?>

<!-- Загрузка файлов на сервер-->

<?php

if (!empty($_FILES['attachment'])) {

    $file = $_FILES['attachment'];
    $srcFileName = $file['name'];
    $tempFile = $file['tmp_name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;
    $imageSize = getimagesize($tempFile);
    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);


    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif ($file['size'] > 8 * 1024 * 1024) {
        $error = 'Слишком большой размер файла';
    } elseif ($file['error'] == UPLOAD_ERR_INI_SIZE) {
        $error = 'Слишком большой размер файла';
    } elseif ($imageSize[0] > 780 || $imageSize[1] > 1280) {
        $error = 'Слишком большая ширина или высота';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'localhost/uploads/' . $srcFileName;
    }
}
?>

<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <?= $error ?>
<?php elseif (!empty($result)): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="/index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>


<!--26 фотоальбом-->

<html>
<head>
    <title>Фотоальбом</title>
</head>
<body>
<?php require __DIR__ . '/auth.php'; ?>

<?php
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $links[] = '/uploads/' . $fileName;
}
if(empty($links)):?>
    <a href = '/upload.php'>Загрузите фото</a>
<?php endif; ?>
<?php foreach ($links as $link):?>
    <a href="<?= $link ?>"><img src="<?= $link ?>" height="80px"></a>
<?php endforeach; ?>
</body>
</html>