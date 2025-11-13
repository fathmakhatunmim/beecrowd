<?php
$even = 0;
$odd = 0;
$positive = 0;
$negative = 0;


for ($i = 0; $i < 5; $i++) {
    $n = intval(fgets(STDIN));

    if ($n % 2 == 0) {
        $even++;
    } else {
        $odd++;
    }

    if ($n > 0) {
        $positive++;
    } elseif ($n < 0) {
        $negative++;
    }
}


echo "$even valor(es) par(es)\n";
echo "$odd valor(es) impar(es)\n";
echo "$positive valor(es) positivo(s)\n";
echo "$negative valor(es) negativo(s)\n";
?>
