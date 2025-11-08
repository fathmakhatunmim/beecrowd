<?php

// fgets(STDIN) → ইনপুট নেয়
// trim() → extra space/newline কেটে দেয়
// intval() → ইনপুটকে integer বানায়


$A = intval(fgets(STDIN));
$B = intval(fgets(STDIN));
$X = $A + $B;
echo "X = $X";
?>