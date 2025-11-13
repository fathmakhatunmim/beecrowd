<?php
// $p1x1 =floatval(fgets(STDIN));
// $p2y1 = floatval(fgets(STDIN));
// $p1x2 = floatval(fgets(STDIN));
// $p2y2 = floatval(fgets(STDIN));

// trim() ব্যবহার করলে লাইনটির শুরু ও শেষের ফাঁকা স্পেস বা newline (\n) মুছে ফেলে।

// explode() ফাংশন " " (space) দিয়ে লাইনটা ভাগ করে একটা array বানায়।

// array_map() প্রতিটি array element-এ floatval() প্রয়োগ করে string → float বানিয়ে দেয়।

// list() ফাংশন array-এর মানগুলোকে আলাদা ভেরিয়েবলে রাখে।

list($p1x1,$p2y2) = array_map('floatval', explode(" ", trim(fgets(STDIN))));
list($p1x2, $p2y1) = array_map('floatval', explode(" ", trim(fgets(STDIN))));


$d = sqrt(pow(($p1x2-$p1x1),2)+ pow(($p2y2-$p2y1),2));
printf("%.4f\n", $d);

?>