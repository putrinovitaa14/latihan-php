<?php

if(isset($_POST['save'])) {


    $nama = $_POST['nama'];

    $jk = $_POST['jk'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    if($jk == "Laki-Laki" && $tb > 170 && $bb <90) {
    }
    else if ($jk == "Perempuan" && $tb > 160 && $bb <75){   
    }
    else{
        echo "Tidak Di Terima";
        }
    }
