<?php

class Kendaraan {
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 10000000;
    public $merek;
    public $tahunPembuatan = 2004;

    public function statusHarga() {
        if ($this->harga > 5000000) {
            $status = "Harga Kendaraan Mahal";
        } else {
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }

    public function statusSubsidi() {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
}

// Instansiasi kelas
$objekKendaraan = new Kendaraan();
echo "Jumlah Roda: " . $objekKendaraan->jumlahRoda . "<br/>";
echo "Status Harga: " . $objekKendaraan->statusHarga() . "<br/>";
echo "Status Subsidi: " . $objekKendaraan->statusSubsidi() . "<br/>";
echo "<br>";

// Objek 1
$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;
echo "Status Harga: " . $objekKendaraan1->statusHarga() . "<br/>";
echo "<br>";

// Objek 2
$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
echo "Status BBM: " . $objekKendaraan2->statusSubsidi() . "<br/>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>