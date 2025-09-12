<?php
class kendaraan
{
    var $jumlahRoda;
     var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    // Method untuk cek status harga
    function statusHarga()
    {
        if ($this->harga > 40000000)
            $status = "Mahal";
        else
            $status = "Murah";
        
        return $status;
    }

    // Method untuk set merek
    function setMerek($x)
    {
        $this->merek = $x;
    }

    // Method untuk set harga
    function setHarga($x)
    {
        $this->harga = $x;
    }
}

// Membuat objek baru
$kendaraan1 = new kendaraan();
$kendaraan1->setMerek("Yamaha MIO");
$kendaraan1->setHarga(10000000);

// Menampilkan status harga
echo $kendaraan1->statusHarga();
?>
