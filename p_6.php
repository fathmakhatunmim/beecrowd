<?php
$a = intval(fgets(STDIN));
if( $a >= 365 && $a < 730){

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

}
else if ($a >= 730){
    $year= intval($a / 365);//2year
    $yearDay = intval($year * 365);//730day
    $yDay= $a - $yearDay;//70day
    $months = intval($yDay /30);//2 month
    $day = intval($months*30);//60day
    $d= intval($yDay - $day);//10day
     

     echo $year." ano(s)"."\n";
     echo $months." mes(es)"."\n";
     echo $d." dia(s)"."\n"; 

}


elseif($a >= 30){
    $months= intval($a / 30);
    $day = intval($a - 30);
    echo "0 ano(s)\n";
    echo $months." mes(es)"."\n";
    echo $day." dia(s)"."\n";  
}




?>