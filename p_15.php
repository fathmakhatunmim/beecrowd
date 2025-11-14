<?php
$X = intval(fgets(STDIN));
$Y = floatval(fgets(STDIN));

$consumption = ($X/$Y);

echo number_format($consumption , 3 , '.' , '') ." km/l"."\n";





?>