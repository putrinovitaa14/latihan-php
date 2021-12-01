<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Pendaftaran TNI</legend>
        <form action="proses2.php" method="post">
            <table>
                <tr>
                    <th style="text-align: left">Masukan Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" size="50" />
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left">Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki" /> L 
                        <input type="radio" name="jk" value="Perempuan" /> P  
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left">Tinggi Badan</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="tb" min="170" max="200" placeholder="Tinggi Badan" />
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left">Berat Badan</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="tb" min="30" max="60" placeholder="Berat Badan" />
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save">Daftar</button>
                        <button type="reset">Bersihkan Formulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>