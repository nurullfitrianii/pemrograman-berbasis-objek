<?php

class Employee {
    protected $nama;
    protected $gaji;
    protected $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getGaji() {
        return $this->gaji;
    }

    public function getLamaKerja() {
        return $this->lamaKerja;
    }

    public function hitungGaji() {
        return $this->gaji;
    }
}
 
class Programmer extends Employee {
    public function hitungGaji() {
        $bonus = 0;
        if ($this->lamaKerja >= 1 && $this->lamaKerja <= 10) {
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
        } elseif ($this->lamaKerja > 10) {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }
        return $this->gaji + $bonus;
    }
}

class Direktur extends Employee {
    public function hitungGaji() {
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;
        return $this->gaji + $bonus + $tunjangan;
    }
}

class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stokBarang;
    private $penjualan;

    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stokBarang, $penjualan) {
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stokBarang = $stokBarang;
        $this->penjualan = $penjualan;
    }

    public function hitungGaji() {
        $persentase = ($this->penjualan / $this->stokBarang) * 100;
        if ($persentase > 70) {
            $bonus = 0.10 * $this->hargaBarang * $this->penjualan;
        } else {
            $bonus = 0.03 * $this->hargaBarang * $this->penjualan;
        }
        return $this->gaji + $bonus;
    }
}


$prog = new Programmer("Budi", 5000000, 5);
echo "Programmer " . $prog->getNama() . " gaji: Rp " . number_format($prog->hitungGaji(), 0, ',', '.') . "<br>";

$dir = new Direktur("Andi", 10000000, 3);
echo "Direktur " . $dir->getNama() . " gaji: Rp " . number_format($dir->hitungGaji(), 0, ',', '.') . "<br>";

$pgw = new PegawaiMingguan("Sari", 2000000, 2, 50000, 100, 80);
echo "Pegawai Mingguan " . $pgw->getNama() . " gaji: Rp " . number_format($pgw->hitungGaji(), 0, ',', '.') . "<br>";
?>