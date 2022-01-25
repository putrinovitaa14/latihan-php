<?php
            if (isset($_POST['proses'])) {
                $destinasi = $_POST['destinasi'];
                if ($destinasi == '1') {
                    ?>
                    <form action="" method="post">
                    <h2 align="center">Bukit Bintang</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Pembayaran</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="kirim" value="Kirim"></td>
                    </tr>
                  </table>
                    </form>
                  
    
          <?php
                } elseif ($destinasi == '2') { ?>
                <form action="" method="post">
                  <h2 align="center">Pantai Sadrana</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Pantai Sadrana</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="submit" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
          <?php } elseif ($destinasi == '3') { ?>
            <form action="" method="post">
                  <h2 align="center">Candi Borobudur</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
          <?php } elseif ($destinasi == '4') { ?>
            <form action="" method="post">
                  <h2 align="center">Candi Prambanan</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
          <?php } elseif ($destinasi == '5') { ?>
            <form action="" method="post">
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Keraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
          <?php } elseif ($destinasi == '6') { ?>
            <form action="" method="post">
                  <h2 align="center">Malioboro</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
         <?php } elseif ($destinasi == '7') { ?>
            <form action="" method="post">
                  <h2 align="center">Pendopo Lawas -> Cafe</h2>
                  <h3 align="center">Silahkan Pilih Menu Makanan dan Minuman</h3>
                  <table align="center" cellpadding="6">
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Makanan</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Nasi Goreng</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Ayam Bakar</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Sosis Bakar</td>
                      <td>Rp. 13.000</td>
                    </tr>
                    <tr>
                      <th>Minuman</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Cappucino</td>
                      <td>Rp. 13.000</td>
                    </tr>
                    <tr>
                      <td>Jus Alpukat</td>
                      <td>Rp. 11.000</td>
                    </tr>
                    <tr>
                      <td>Lemon Tea</td>
                      <td>Rp. 12.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  </form>
                  <form action="" method="post">
                  <div  class="cafe">
                        <select name="pilih">
                        <option selected>-- Pilih Menu --</option>
                        <option value="1">Nasi Goreng</option>
                        <option value="2">Ayam Bakar</option>
                        <option value="3">Sosis Bakar</option>
                        <option value="4">Cappucino</option>
                        <option value="5">Jus Alpukat</option>
                        <option value="6">Lemon Tea</option>
                      </select>
                     <input type="number" name="jumlah" placeholder="Pesan berapa">
                     <input type="number" name="bayar" placeholder="Bayar">
                     <input type="submit" name="cafe" value="Kirim">
                  </div>
                  </form>
         <?php } elseif ($destinasi == '8') { ?>
            <form action="" method="post">
                  <h2 align="center">Goa Pindul</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Goa Pindul</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="goa" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                    
          <?php }
            }
            if (isset($_POST['kirim'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 10000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?> 
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['submit'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 15000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
         <?php
            }
            if (isset($_POST['ok'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 50000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['ya'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 5000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['goa'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 100000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $totalakhir = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $totalakhir = $total - $diskon;
                } else {
                    $diskon = 0;
                    $totalakhir = $total;
                }
                $kembalian = $bayar - $totalakhir; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['cafe'])) {
                $pilih = $_POST['pilih'];
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                if ($pilih == 1) {
                    $total = $jumlah * 15000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 2) {
                    $total = $jumlah * 10000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 3) {
                    $total = $jumlah * 13000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 4) {
                    $total = $jumlah * 13000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 5) {
                    $total = $jumlah * 11000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                } elseif ($pilih == 6) {
                    $total = $jumlah * 12000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $totalakhir = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $totalakhir = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $totalakhir = $total;
                    }
                }
                $kembalian = $bayar - $totalakhir; ?>
               <table align="center">
                 <tr>
                   <td>Total Bayar</td>
                   <td>:</td>
                   <td><?php echo $totalakhir; ?></td>
                 </tr>
                 <tr>
                   <td>Diskon</td>
                   <td>:</td>
                   <td><?php echo $diskon1; ?></td>
                 </tr>
                 <tr>
                   <td>Uang Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $bayar; ?></td>
                 </tr>
                 <tr>
                   <td>Kembalian</td>
                   <td>:</td>
                   <td><?php echo $kembalian; ?></td>
                 </tr>
               </table>
          <?php
            }
          ?>