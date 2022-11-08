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