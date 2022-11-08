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