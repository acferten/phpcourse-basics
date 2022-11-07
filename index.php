<?php
setcookie('login', 'admin', time()+20, '/');
echo 'Cookie установлены';
print_r($_COOKIE);
?>
