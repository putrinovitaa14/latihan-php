<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan If Bersarang</title>
</head>
<center>
        <h2>Menu Cafe</h2>
        <h4>Silahkan Pilih Menu</h4>
    </center>
<body>
<center>
    <form method = "POST" action = "">
        <table>
            <table>
                <tr>
                   <td>Jenis Menu</td>
                   <td>:</td>
                   <td><input type='text' name='jenis'></td>
                </tr>
                 <tr>
                    <td>Pilih Menu</td>
                    <td>:</td>
                    <td><input type='text' name='menu'></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type='number' name='jumlah'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="KIRIM"></td>
                </tr>
            </table>
        </table>
    </form>
</center>
</body> 
</html>

<?php

if (isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];

    if ($jenis == 'makanan') {
        if ($menu1 == 'nasi goreng') {
            $harga = 10000;
            $total = $harga * $jumlah;
        } elseif ($menu1 == 'mie goreng') {
            $harga = 15000;
            $total = $harga * $jumlah;
        }
        if ($menu1 == 'ayam goreng') {
            $harga = 20000;
            $total = $harga * $jumlah;
        } else {
            echo 'Menu tidak ada';
        }
    } elseif ($jenis == 'minuman') {
        if ($menu1 = 'jus') {
            $harga = 12000;
            $total = $harga * $jumlah;
        }
        if ($menu1 = 'teh botol') {
            $harga = 7000;
            $total = $harga * $jumlah;
        }
        if ($menu1 = 'thai tea') {
            $harga = 15000;
            $total = $harga * $jumlah;
        } else {
            echo 'Menu tidak ada';
        }
    } else {
        echo 'Pesanan Tidak Tersedia';
    }

    $total = $harga * $jumlah;
    if ($total >= 50000) {
        $diskon = $total * 0.4;
    } else {
        $diskon = 0;
    }

    $total_bayar = $total - $diskon;
    echo "Jenis Pesanan : $jenis <br>";
    echo "Nama Pesanan : $menu <br>";
    echo "Jumlah : $jumlah <br>";
    echo "Total : $total <br>";
    echo "Diskon : $diskon <br>";
    echo "Total Bayar : $total_bayar <br>";
}
?>