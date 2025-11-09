<?php 
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = floatval(fgets(STDIN));
$d = $b * $c;
echo "NUMBER = $a"."\n";
echo "SALARY = U$ " .number_format($d,2,'.','' ) . "\n";
?>