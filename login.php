<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';


if ($login != 'admin') {
    $response = "Пользователь не найден";
} else {
    if ($password != 'Pa$$w0rd') {
        $response = "Неправильный пароль";
    }
    else $response = "Авторизация прошла успешно";

}
?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $response ?>
</p>
</body>
</html>