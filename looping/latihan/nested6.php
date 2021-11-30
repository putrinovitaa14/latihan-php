<?php
for( $a= 4; $a > 0; $a--){
    for($i = 1; $i <= $a; $i++){
        echo "  ";
    }for($a1 = 5; $a1 > $a; $a1--){
        echo"*";
    }for($a2 = 4; $a2>$a; $a2--){
        echo"*";
    }
    echo"<br>";
}

for($b=0; $b <= 4; $b++){
    for($j=1; $j <= $b; $j++){
        echo"  ";
    }for($b1=5; $b1 > $b; $b1--){
        echo"*";
    }for($b2=4; $b2 > $b; $b2--){
        echo"*";
    }
    echo"<br>";
}
?>