<?php
// definisi class Kendaraan
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($x)
    {
        $this->merek = $x;
    }

    function getMerek()
    {
        return $this->merek;
    }

    function setJmlroda($x)
    {
        $this->jumlahRoda = $x;
    }

    function getJmlroda()
    {
        return $this->jumlahRoda;
    }

    function setHarga($y)
    {
        $this->harga = $y;
    }

    function getHarga()
    {
        return $this->harga;
    }
    
    function setWarna($x)
    {
        $this->warna = $x;
    }

    function getWarna()
    {
        return $this->warna;
    }
    
    function setBhnBakar($x)
    {
        $this->bahanBakar = $x;
    }

    function getBhnBakar()
    {
        return $this->bahanBakar;
    }
    
    function setTahun($x)
    {
        $this->tahunPembuatan = $x;
    }

    function getTahun()
    {
        return $this->tahunPembuatan;
    }
    
    function statusHarga()
    {
        if ($this->harga > 30000000) {
            return "Harga mahal";
        } else {
            return "Harga murah";
        }
    }
    
    function dapatSubsidi()
    {
        if ($this->bahanBakar == "Solar") {
            return "Dapat subsidi";
        } else {
            return "Tidak dapat subsidi";
        }
    }
    
    function hargaSecondKendaraan()
    {
        $harga_baru = $this->harga;
        $tahun_sekarang = date("Y");
        $selisih_tahun = $tahun_sekarang - $this->tahunPembuatan;
        
        // Asumsi penyusutan 10% per tahun
        $harga_second = $harga_baru * pow((1 - 0.10), $selisih_tahun);
        
        return "Harga Second: " . number_format($harga_second, 0, ',', '.');
    }
}

// Data array kendaraan
$Data1 = array('Toyota Yaris', '4', '16000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');

// Membuat objek dan mengisi data
for ($i = 1; $i <= 3; $i++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
    ${"kendaraan$i"}->setJmlroda(${"Data$i"}[1]);
    ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
    ${"kendaraan$i"}->setWarna(${"Data$i"}[3]);
    ${"kendaraan$i"}->setBhnBakar(${"Data$i"}[4]);
    ${"kendaraan$i"}->setTahun(${"Data$i"}[5]);
}

// Menampilkan data kendaraan
for ($i = 1; $i <= 3; $i++) {
    echo "Kendaraan$i" . "<br>";
    echo "Merek: " . ${"kendaraan$i"}->getMerek() . "<br>";
    echo "Jumlah Roda: " . ${"kendaraan$i"}->getJmlroda() . "<br>";
    echo "Harga: " . number_format(${"kendaraan$i"}->getHarga(), 0, ',', '.') . "<br>";
    echo "Warna: " . ${"kendaraan$i"}->getWarna() . "<br>";
    echo "Bahan Bakar: " . ${"kendaraan$i"}->getBhnBakar() . "<br>";
    echo "Tahun: " . ${"kendaraan$i"}->getTahun() . "<br>";
    echo "Status Harga: " . ${"kendaraan$i"}->statusHarga() . "<br>";
    echo "Subsidi: " . ${"kendaraan$i"}->dapatSubsidi() . "<br>";
    echo ${"kendaraan$i"}->hargaSecondKendaraan() . "<br><br>";
}
?>