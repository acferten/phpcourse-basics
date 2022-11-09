<?php
$result = null;
$text = $_POST['text'] ?? '';
$email = $_POST['email'] ?? '';

if (!empty($text) && !empty($email)) {
    $datetime = date(DATE_ATOM);
    $isWrote = file_put_contents(
            __DIR__ . '/private/feedback.txt',
            $datetime . PHP_EOL . $text . PHP_EOL . $email . PHP_EOL . PHP_EOL,
            FILE_APPEND
        ) !== false;
    if ($isWrote === false) {
        $result = 'Не удалось отправить сообщение, попробуйте ещё раз.';
    } else {
        $result = 'Ваше сообщение успешно отправлено!';
    }
}
?>

<html>
<head>
    <title>Обратная связь</title>
</head>
<body>
<div style="text-align: center">
    <h1>Форма обратной связи</h1>
    <?php if ($result !== null): ?>
        <div><b><?= $result ?></b></div><br>
    <?php endif; ?>
    <form action="feedback.php" method="post">
        <label for="text">Введите ваш текст:</label><br>
        <input type="email" name="email" required>
        <textarea name="text" id="text" cols="55" rows="5"></textarea><br>
        <input type="submit" value="Отправить">
    </form>
</div>
</body>
</html>