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
