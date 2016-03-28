<!--http://paiza.jp/challenges/practice-->


<?php
$line_size = fgets(STDIN, 256);
 
for( $i = 0; $i < $line_size ; $i++){
    $year = fgets(STDIN, 256);
    $year = rtrim($year);
    //うるう年判定
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
          echo $year." is a leap year\n";
    } else {
          echo $year." is not a leap year\n";
    }
}
?>
