<?php
echo htmlentities(file_get_contents(__FILE__));

$files = scandir(__DIR__ . '/');
foreach ($files as $file) {
    if (is_dir($file)) {
        echo $file . '<br>';
    }
}
