<?php
$n = 3.14159;
$R = floatval(fgets(STDIN));
$A = $n *($R * $R);
echo "A =" . number_format($A, 4,'.','') . "\n";;
?>