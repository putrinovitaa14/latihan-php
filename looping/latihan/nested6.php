<?php

$star = 5;
$jumlah=5;

for($a = $star; $a > 0; $a--){
    for($i = 1; $i <= $a; $i++){
        echo "&nbsp";
    }
    for($a1 = $star; $a1 >= $a; $a1--){
        echo "*";

    }

    echo "<br>";
}
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}