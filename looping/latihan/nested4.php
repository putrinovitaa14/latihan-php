<?php

$j = 5;

for($a=1; $a <= 5; $a++){
    for($b = 5; $b >= $a; $b-=1){
    }
    for($c=1; $c <= $a; $c++){
        echo '*';
    }
    echo "<br/>";
}

?>