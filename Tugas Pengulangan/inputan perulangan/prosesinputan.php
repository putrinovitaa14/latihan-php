<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Inputan</title>
</head>
<body bgcolor="aqua">
<fieldset>
    <center>
    <h1>Proses Pengulangan Inputan Angka</h1>
        <form action="inputan.php" method="post">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        1. > Segitiga Siku-Siku < 
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        2. > Segitiga Sama kaki Terbalik <
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        3. > Segita siku siku  ( Kebalikan dari no 1 ) <
                    </td>
                </tr>
                <tr>
                    <td>Pilih</td>
                    <td>:</td>
                    <td><input type="number" name="pilih"></td>
                </tr>
                <tr>
                    <td>Input Bilangan Angka</td>
                    <td>:</td>
                    <td><input type="number" name="input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" value="KEMBALI">
                    </td>
                </tr>
            </table>
    </form>
</center>
<?php

if (isset($_POST['kirim'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['input'];

    if ($pilih == 1) {
        echo '<h3>Segitiga Siku-Siku<h3/>';
        for ($i = 1; $i <= $angka; ++$i) {
            for ($a = 1; $a <= $i; ++$a) {
                echo '&nbsp';
                echo "$a";
            }
            echo '<br>';
        }

        echo '</center>';
    } elseif ($pilih == 2) {
        echo '<center>';
        echo '<h3>Segitiga Sama Kaki Terbalik</h3>';
        for ($j = $angka; $j >= 1; --$j) {
            for ($v = $angka; $v > $j; --$v) {
                echo ' ';
            }
            for ($c = 1; $c <= $j; ++$c) {
                echo "$c ";
            }
            echo '<br>';
        }
        echo '</center>';
    } elseif ($pilih == 3) {
        echo '<h3>Segitiga siku siku ( Kebalikan dari no 1 ) </h3>';
        for ($i = $angka; $i >= 1; --$i) {
            for ($p = $angka; $p >= $i; --$p) {
                echo "$p &nbsp";
            }
            echo '<br>';
        }
    }
}
?>
</fieldset>
</body>
</html>