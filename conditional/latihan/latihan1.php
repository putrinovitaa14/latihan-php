<?php

$kondisi = "Menggunakan Helm";
$kondisi = "Membawa STNK";
$kondisi = "Membawa SIM";


if($kondisi == "Menggunakan Helm") {
    echo "Kami cek perlengkapan surat stnk & sim nya";
} elseif ($kondisi = "Menggunakan Helm" && $kondisi = "Membawa STNK") {
    echo "Surat Lengkap Boleh kami cek SIM nya?";
} elseif ($kondisi = "Menggunakan Helm" && $kondisi = "Membawa SIM" && $kondisi = "Membawa STNK") {
    echo "Selamat Berkendara Hati-Hati di Jalan";
}
else {
    echo "Anda Kami Tilang";
}