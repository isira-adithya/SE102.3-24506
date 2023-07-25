<?php

$a = 99;
$b = 66;

$a = $a ^ $b;

$b = $a ^ $b;
$a = $a ^ $b;

echo "a = $a\n";
echo "b = $b\n";

?>