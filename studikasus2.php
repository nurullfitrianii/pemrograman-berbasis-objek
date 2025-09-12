<?php

// Data nilai mahasiswa
$mahasiswa = [
    ["nama" => "Mahasiswa 1", "nilai" => 55],
    ["nama" => "Mahasiswa 2", "nilai" => 76],
    ["nama" => "Mahasiswa 3", "nilai" => 65],
    ["nama" => "Mahasiswa 4", "nilai" => 95],
    ["nama" => "Mahasiswa 5", "nilai" => 59],
    ["nama" => "Mahasiswa 6", "nilai" => 65],
    ["nama" => "Mahasiswa 7", "nilai" => 70],
    ["nama" => "Mahasiswa 8", "nilai" => 66],
    ["nama" => "Mahasiswa 9", "nilai" => 62],
    ["nama" => "Mahasiswa 10", "nilai" => 85]
];

// Menampilkan header
echo "No, Nama, Nilai, Keterangan<br>";
echo "------------------------------------------------<br>";

$no = 1;
foreach ($mahasiswa as $data) {
    $keterangan = "";
    
    // Menggunakan if-else untuk menentukan ganjil atau genap
    if ($data['nilai'] % 2 == 0) {
        $keterangan = "Nilai Angka Genap";
    } else {
        $keterangan = "Nilai Angka Ganjil";
    }
    
    // Menambahkan spasi di antara setiap data
    echo $no . ".&nbsp;&nbsp;&nbsp;" . $data['nama'] . ",&nbsp;&nbsp;&nbsp;" . $data['nilai'] . ",&nbsp;&nbsp;&nbsp;" . $keterangan . "<br>";
    $no++;
}

?>