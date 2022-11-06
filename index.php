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