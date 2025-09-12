<?php

class Kendaraan {
    public $harga;
    public $tahun_pembuatan;
    public $bahan_bakar;
    public $plat_nomor;
    
    public $status_harga;
    public $status_bbm;
    public $harga_bekas;
    public $jumlah_pajak;
    public $hari_operasi;

    public function __construct($harga, $tahun_pembuatan, $bahan_bakar, $plat_nomor) {
        $this->harga = $harga;
        $this->tahun_pembuatan = $tahun_pembuatan;
        $this->bahan_bakar = $bahan_bakar;
        $this->plat_nomor = $plat_nomor;
    }

    public function calculate_properties() {
        // Kondisi untuk Status Harga
        if ($this->harga > 5000000) {
            $this->status_harga = "Mahal";
        } else {
            $this->status_harga = "Murah";
        }

        // Kondisi untuk Status BBM
        if ($this->bahan_bakar === "Premium" && $this->tahun_pembuatan < 2005) {
            $this->status_bbm = "Mendapat Subsidi";
        } else {
            $this->status_bbm = "Tidak Mendapat Subsidi";
        }

        // Kondisi untuk Harga Bekas
        if ($this->tahun_pembuatan > 2005) {
            $this->harga_bekas = $this->harga * (1 - 0.20);
        } elseif ($this->tahun_pembuatan >= 2000 && $this->tahun_pembuatan <= 2005) {
            $this->harga_bekas = $this->harga * (1 - 0.30);
        } else {
            $this->harga_bekas = $this->harga * (1 - 0.40);
        }

        // Kondisi untuk Jumlah Pajak
        if ($this->tahun_pembuatan <= 2017) {
            $this->jumlah_pajak = $this->harga * 0.025;
        } else {
            $this->jumlah_pajak = 0; // Or based on other rules if any
        }
        
        // Kondisi untuk Hari Operasi
        if ($this->plat_nomor % 2 === 0) {
            $this->hari_operasi = "Selasa, Kamis, Sabtu";
        } else {
            $this->hari_operasi = "Senin, Rabu, Jumat, Minggu";
        }
    }

    public function display_output() {
        echo "Status Harga: " . $this->status_harga . "<br>";
        echo "Status BBM: " . $this->status_bbm . "<br>";
        echo "Harga Bekas: " . number_format($this->harga_bekas, 0, ',', '.') . "<br>";
        echo "Jumlah Pajak: " . number_format($this->jumlah_pajak, 0, ',', '.') . "<br>";
        echo "Hari Operasi: " . $this->hari_operasi;
    }
}

// Contoh penggunaan
$mobil = new Kendaraan(5000000, 1999, "Premium", 1234); 
$mobil->calculate_properties();

// Menampilkan hasil
$mobil->display_output();

?>