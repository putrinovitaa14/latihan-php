<?php

$jumlah=5;
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}