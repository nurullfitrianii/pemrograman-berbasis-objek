<?php
class Guru {
    var $nama_nama = array("de", "ce", "ve", "re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 1200000000;
    var $merek = "A";

    public function statusHarga() {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
}

// ✅ Tambahan Class Buku
class Buku {
    var $judul;
    var $pengarang;
    var $penerbit;
    var $tahunTerbit;
    var $harga;
}

// ✅ Tambahan Class Orang
class Orang {
    var $nama;
    var $umur;
    var $jenisKelamin;
    var $alamat;
    var $pekerjaan;
}

// Membuat objek dari class Mobil
$ObjekBMW = new Mobil();   // ini adalah objek BMW dari class Mobil
$ObjekTesla = new Mobil(); // ini adalah objek Tesla dari class Mobil
$ObjekAudi = new Mobil();  // ini adalah objek Audi dari class Mobil

// Membuat objek dari class Buku
$buku1 = new Buku();       // ini adalah objek buku pertama dari class Buku
$buku1->judul = "Pemrograman OOP";
$buku1->pengarang = "Sari Azhariyah";
$buku1->penerbit = "UNSIKA Press";
$buku1->tahunTerbit = 2022;
$buku1->harga = 75000;

// Membuat objek dari class Orang
$orang1 = new Orang();     // ini adalah objek orang pertama dari class Orang
$orang1->nama = "Nurul";
$orang1->umur = 20;
$orang1->jenisKelamin = "Perempuan";
$orang1->alamat = "Subang";
$orang1->pekerjaan = "Mahasiswa";
?>

<?php
class Contoh {
    // Instance Variable (setiap objek punya nilainya sendiri)
    public $nama = "Nurul";   // string
    public $umur = 20;        // integer

    // Static Variable (sama untuk semua objek)
    public static $jurusan = "Sistem Informasi"; // string

    // Method dengan Local Variable
    public function info() {
        $angkatan = 2024; // Local Variable (integer)
        // variabel ini hanya ada di dalam method
    }
}

// Membuat Objek
$mhs1 = new Contoh();   // objek 1
$mhs2 = new Contoh();   // objek 2

// Mengubah nilai instance variable untuk objek ke-2
$mhs2->nama = "Dina";   // string
$mhs2->umur = 22;       // integer
?>

<?php
class Demo {
    // Instance Variables
    public string $nama = "Nurul";   // string
    public int $umur = 20;           // integer

    // Static Variable
    public static int $counter = 0;  // integer

    // Method dengan Local Variable
    public function contohLocal() {
        $localVar = true; // boolean
        echo "Local Variable (boolean): " . ($localVar ? "true" : "false") . "<br>";
    }

    // Method untuk Instance Variable
    public function contohInstance() {
        echo "Instance Variable Nama (string): $this->nama <br>";
        echo "Instance Variable Umur (integer): $this->umur <br>";
    }

    // Method untuk Static Variable
    public function contohStatic() {
        echo "Static Variable Counter (integer): " . self::$counter . "<br>";
        self::$counter++;
    }
}

// Buat objek
$obj1 = new Demo();
$obj2 = new Demo();

// Pemanggilan Local
echo "<h3>Contoh Local Variable</h3>";
$obj1->contohLocal();

// Pemanggilan Instance
echo "<h3>Contoh Instance Variable</h3>";
$obj1->contohInstance();
$obj2->nama = "Budi"; // ubah instance variable
$obj2->umur = 25;
$obj2->contohInstance();

// Pemanggilan Static
echo "<h3>Contoh Static Variable</h3>";
$obj1->contohStatic();
$obj2->contohStatic();
$obj1->contohStatic();
?>
