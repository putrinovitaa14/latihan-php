<?php
$siswa = [
    ['nama'=> 'Novy', 'jk' => 'Perempuan', 'umur' => '17 Tahun'],
    ['nama'=> 'Dinar', 'jk' => 'Laki-Laki', 'umur' => '17 Tahun'],
    ['nama'=> 'Dimas', 'jk' => 'Laki-Laki', 'umur' => '17 Tahun'],
    ['nama'=> 'Putri', 'jk' => 'Perempuan', 'umur' => '16 Tahun'],
    ['nama'=> 'Sumiati', 'jk' => 'Perempuan', 'umur' => '16 Tahun'],
       
];
foreach($siswa as $data){
    echo "Nama : ". $data['nama'] . "<br>";
    echo "Jenis Kelamin : ". $data['jk'] . "<br>";
    echo "Umur : ". $data['umur'] . "<br>";
    echo "<hr>";
}
?>