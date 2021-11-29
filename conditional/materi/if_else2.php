<?php

$kondisi = "Menggunakan Helm";
$kondisi = "Membawa STNK";
$kondisi = "Membawa SIM";


if($kondisi == "Menggunakan Helm" && $kondisi == "Membawa STNK") {
    echo "Surat Lengkap apakah boleh kami cek SIM nya?";
} else {
    echo "Kami cek perlengkapan surat STNK & SIM nya";
}