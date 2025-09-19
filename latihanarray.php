<?php

// Definisikan kelas (class) untuk objek Mahasiswa
class Mahasiswa
{
    // Properti dari kelas
    private $nama;
    private $kelas;
    private $matkul;
    private $nilai;

    // Metode Setter (untuk mengatur nilai properti)
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function setMatkul($matkul)
    {
        $this->matkul = $matkul;
    }

    public function setNilai($nilai)
    {
        $this->nilai = $nilai;
    }

    // Metode Getter (untuk mengambil nilai properti)
    public function getNama()
    {
        return $this->nama;
    }

    public function getKelas()
    {
        return $this->kelas;
    }

    public function getMatkul()
    {
        return $this->matkul;
    }

    public function getNilai()
    {
        return $this->nilai;
    }

    // Metode untuk percabangan (if else)
    public function getStatusLulus()
    {
        if ($this->nilai >= 70) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
}

// Data Mahasiswa dalam bentuk array
$dataMahasiswa = [
    ['nama' => 'Aditya', 'kelas' => 'SI 2', 'matkul' => 'Pemrograman Berorientasi Objek', 'nilai' => 80],
    ['nama' => 'Shinta', 'kelas' => 'SI 2', 'matkul' => 'Pemrograman Berorientasi Objek', 'nilai' => 75],
    ['nama' => 'Ineu', 'kelas' => 'SI 2', 'matkul' => 'Pemrograman Berorientasi Objek', 'nilai' => 55],
];

// Perulangan (loop) untuk mencetak data setiap mahasiswa
foreach ($dataMahasiswa as $data) {
    // Membuat objek baru dari kelas Mahasiswa
    $mahasiswa = new Mahasiswa();

    // Mengisi data objek menggunakan metode setter
    $mahasiswa->setNama($data['nama']);
    $mahasiswa->setKelas($data['kelas']);
    $mahasiswa->setMatkul($data['matkul']);
    $mahasiswa->setNilai($data['nilai']);

    // Mencetak output ke layar menggunakan metode getter
    echo "Nama : " . $mahasiswa->getNama() . "<br>";
    echo "Kelas : " . $mahasiswa->getKelas() . "<br>";
    echo "Mata Kuliah : " . $mahasiswa->getMatkul() . "<br>";
    echo "Nilai : " . $mahasiswa->getNilai() . "<br>";

    // Mencetak status kelulusan menggunakan percabangan if else
    echo $mahasiswa->getStatusLulus() . "<br><br>";
    
    // Menggunakan tag <hr> dengan style CSS untuk mengatur lebar
    echo "<hr style='width: 17%; margin-left: 0;'>";
}

?>