<?php
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