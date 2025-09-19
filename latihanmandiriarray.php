<?php

class Kredit
{
    private $pinjaman;
    private $bunga_persen;
    private $lama_angsuran;

    public function setPinjaman($pinjaman)
    {
        $this->pinjaman = $pinjaman;
    }

    public function setBungaPersen($bunga_persen)
    {
        $this->bunga_persen = $bunga_persen;
    }

    public function setLamaAngsuran($lama_angsuran)
    {
        $this->lama_angsuran = $lama_angsuran;
    }

    public function getPinjaman()
    {
        return $this->pinjaman;
    }

    public function getBungaPersen()
    {
        return $this->bunga_persen;
    }

    public function getLamaAngsuran()
    {
        return $this->lama_angsuran;
    }

    public function hitungDanTampilkanAngsuran()
    {
        if ($this->pinjaman <= 0 || $this->lama_angsuran <= 0) {
            echo "Besaran pinjaman dan lama angsuran harus lebih dari nol.";
            return;
        }

        $angsuran_pokok = $this->pinjaman / $this->lama_angsuran;
        $nama_angsuran = ["pertama", "kedua", "ketiga", "keempat", "kelima"];

        $bunga_saat_ini = 100000;
        $penurunan_bunga = 20000;

        // Header baru
        echo "<h1><b>TOKO PEGADAIAN SYARIAH</b></h1>";
        echo "Jl Keadilan No 16<br>";
        echo "Telp 732746238<br><br>";
        
        echo "Program Penghitung Besaran Angsuran Hutang<br>";
        echo "Besaran Pinjaman : Rp." . number_format($this->pinjaman, 0, ',', '.') . ";<br>";
        echo "Masukan Besaran Bunga (%) : " . $this->bunga_persen . "<br>";
        echo "Lama Angsuran (bulan) : " . $this->lama_angsuran . "<br><br>";

        for ($i = 0; $i < $this->lama_angsuran; $i++) {
            $total_angsuran = $angsuran_pokok + $bunga_saat_ini;
            echo "Angsuran " . $nama_angsuran[$i] . " : " . number_format($angsuran_pokok, 0, ',', '.') . " + " . number_format($bunga_saat_ini, 0, ',', '.') . " = " . number_format($total_angsuran, 0, ',', '.') . "<br>";
            $bunga_saat_ini -= $penurunan_bunga;
        }
    }
}

$kredit = new Kredit();

$kredit->setPinjaman(1000000);
$kredit->setBungaPersen(10);
$kredit->setLamaAngsuran(5);

$kredit->hitungDanTampilkanAngsuran();
?>