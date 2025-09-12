<?php
// Membuat class
class Kendaraan {
    var $merek;
    var $jumlahRoda;
    var $harga;
    var $warna;
    var $bahanBakar;
    var $tahun;

    // Setter methods
    function setMerek($x) {
        $this->merek = $x;
    }

    function setJumlahRoda($x) {
        $this->jumlahRoda = $x;
    }

    function setHarga($x) {
        $this->harga = $x;
    }

    function setWarna($x) {
        $this->warna = $x;
    }

    function setBahanBakar($x) {
        $this->bahanBakar = $x;
    }

    function setTahun($x) {
        $this->tahun = $x;
    }
}

// Membuat objek pertama
$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Toyota Yaris');
$kendaraan1->setJumlahRoda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setWarna('Merah');
$kendaraan1->setBahanBakar('Premium');
$kendaraan1->setTahun(2005);

// Membuat objek kedua
$kendaraan2 = new Kendaraan();
$kendaraan2->setMerek('Honda Scoopy');
$kendaraan2->setJumlahRoda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna('Putih');
$kendaraan2->setBahanBakar('Premium');
$kendaraan2->setTahun(2004);

// Membuat objek ketiga
$kendaraan3 = new Kendaraan();
$kendaraan3->setMerek('Isuzu Panther');
$kendaraan3->setJumlahRoda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna('Hitam');
$kendaraan3->setBahanBakar('Solar');
$kendaraan3->setTahun(2003);

// Menampilkan data
function tampilkanData($objek) {
    echo $objek->merek . "<br>";
    echo $objek->jumlahRoda . "<br>";
    echo $objek->harga . "<br>";
    echo $objek->warna . "<br>";
    echo $objek->bahanBakar . "<br>";
    echo $objek->tahun . "<br><br>";
}

tampilkanData($kendaraan1);
tampilkanData($kendaraan2);
tampilkanData($kendaraan3);
?>
