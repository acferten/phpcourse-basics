<!--какой-то прошлый урок-->

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

<!--Авторизация с куки 22-->

<?php
require __DIR__ . '/auth.php';


if (!empty($_COOKIE)) {
    $login = $_COOKIE['login'] ?? '';;
    $password = $_COOKIE['password'] ?? '';;
    if (checkAuth($login, $password)) {
        header('Location: /index.php');
    }
}

if (!empty($_POST)) {
    require __DIR__ . '/auth.php';


    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>
<?php if (isset($error)): ?>
    <span style="color: red;">
    <?= $error ?>
</span>
<?php endif; ?>
<form action="/login.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>


