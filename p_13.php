<?php
$input = explode(" ", trim(fgets(STDIN)));


$a = intval($input[0]);
$b = intval($input[1]);
$c = intval($input[2]);

$maiorab = ($a + $b + abs($a- $b))/2;
$m = ($maiorab + $c + abs($maiorab - $c))/2;


echo $m . " eh o maior\n";



?>