<?php

$a = intval(fgets(STDIN));
// $year =intval($a /365);//1 year
// $month =intval( $year % 365);//35 
// $d=intval($a % 365);
// $day =intval($d % 30);

// echo"$year  ano(s)" . "\n";
// echo"$month mes(es)". "\n";
// echo"$day dia(s)". "\n";
   $year= intval($a / 365);//2year
    $yearDay = intval($year * 365);//730day
    $yDay= $a - $yearDay;//70day
    $months = intval($yDay /30);//2 month
    // $day = intval($months*30);//60day
    // $d= intval($yDay - $day);//10day
    $d=intval($a % 365);
    $day =intval($d % 30);
     

     echo $year." ano(s)"."\n";
     echo $months." mes(es)"."\n";
     echo $day." dia(s)"."\n"; 

?>