<?php

$gk = 4500000;
$pajak = 112500;
$bpjs = 200000;
$infak = 50000;
$trans = 10000;
$b = 24;

$bonus = $trans * $b;
$potongan = $pajak + $bpjs + $infak;
$pokok = $pokok + $bonus;
$pkk = $pokok + $bonus;


echo "Gaji Kotor : Rp. $gk";
echo "<br>";
echo "Potongan : Rp. $potongan";
echo "<br>";
echo "Bunos Transportasi : Rp. $bonus ";
echo "<br>";
echo "Gaji Bersih : Rp.$pokok";
echo "<br>";
?>