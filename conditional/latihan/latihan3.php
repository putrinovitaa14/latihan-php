<?php 

$nama = "Ratna";
$status = "Sekretaris";
$keluarga = 1;



echo "Nama Pekerja : ". $nama ."<br>";
echo "Status : ". $status ."<br>";

if($status == "Manager"){
    $gaji = 4500000;
    echo "Gaji Pokok : ". $gaji;
    $transportasi = 50000;
    $lembur = 50000;
    $jam = 45;
}

else if($status == "Sekretaris"){
    $gaji = 3500000;
    echo "Gaji Pokok : ".$gaji;
    $transportasi = 35000;
    $lembur = 45000;
    $jam = 35;
}

else {
    "Status Tidak Ada";
}

echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : ". $bpjs ."<br>";
$pajak = $gaji * 0.025;
echo "Pajak : ". $pajak ."<br>";

echo "<hr>";

$totalpotongan = $bpjs + $pajak;
echo "Total Potongan : ". $totalpotongan ."<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan : ". $tunjangan ."<br>";
$lembur = $lembur * $jam;
echo "Lembur : ". $lembur ."<br>";
$transportasi = $transportasi * 24;
echo "Transportasi : ". $transportasi ."<br>";


echo "<hr>";

$bonus = $tunjangan + $lembur + $transportasi;
echo "Bonus : ". $bonus ."<br>";

echo "<hr>";

$gajibersih = ( $gaji - $totalpotongan ) + $bonus;
echo "Gaji Bersih : ". $gajibersih ."<br>";

?>