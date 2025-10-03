<?php
// Class Induk - Tabungan
class Tabungan {
    protected $nama;
    protected $saldo;
   
    // Constructor
    public function __construct($nama, $saldoAwal) {
        $this->nama = $nama;
        $this->saldo = $saldoAwal;
    }
   
    // Method untuk setor tunai
    public function setorTunai($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Setor tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else {
            echo "Jumlah setor harus positif!\n";
        }
    }
   
    // Method untuk tarik tunai
    public function tarikTunai($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "Tarik tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else if ($jumlah > $this->saldo) {
            echo "Saldo tidak mencukupi!\n";
        } else {
            echo "Jumlah tarik harus positif!\n";
        }
    }
   
    // Method untuk menampilkan info
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "\n";
        echo "Saldo: Rp " . number_format($this->saldo, 0, ',', '.') . "\n";
    }
   
    // Getter untuk saldo
    public function getSaldo() {
        return $this->saldo;
    }
}
 
// Class Anak - Siswa1
class Siswa1 extends Tabungan {
    private $uangMilik;
   
    public function __construct($nama, $saldoAwal) {
        parent::__construct($nama, $saldoAwal);
        $this->uangMilik = $saldoAwal;
    }
   
    // Siswa1 hanya bisa mengakses uang miliknya sendiri
    public function tarikTunai($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->uangMilik) {
            $this->saldo -= $jumlah;
            $this->uangMilik -= $jumlah;
            echo "Siswa1 - Tarik tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else if ($jumlah > $this->uangMilik) {
            echo "Siswa1 - Tidak dapat menarik! Anda hanya bisa mengakses uang Anda sendiri (Rp " . number_format($this->uangMilik, 0, ',', '.') . ")\n";
        } else {
            echo "Jumlah tarik harus positif!\n";
        }
    }
   
    public function setorTunai($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            $this->uangMilik += $jumlah;
            echo "Siswa1 - Setor tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else {
            echo "Jumlah setor harus positif!\n";
        }
    }
   
    public function tampilkanInfo() {
        echo "\n=== Info Siswa 1 ===\n";
        parent::tampilkanInfo();
        echo "Uang Milik Sendiri: Rp " . number_format($this->uangMilik, 0, ',', '.') . "\n";
    }
}
 
// Class Anak - Siswa2
class Siswa2 extends Tabungan {
    private $uangMilik;
   
    public function __construct($nama, $saldoAwal) {
        parent::__construct($nama, $saldoAwal);
        $this->uangMilik = $saldoAwal;
    }
   
    // Siswa2 sama seperti Siswa1
    public function tarikTunai($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->uangMilik) {
            $this->saldo -= $jumlah;
            $this->uangMilik -= $jumlah;
            echo "Siswa2 - Tarik tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else if ($jumlah > $this->uangMilik) {
            echo "Siswa2 - Tidak dapat menarik! Anda hanya bisa mengakses uang Anda sendiri (Rp " . number_format($this->uangMilik, 0, ',', '.') . ")\n";
        } else {
            echo "Jumlah tarik harus positif!\n";
        }
    }
   
    public function setorTunai($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            $this->uangMilik += $jumlah;
            echo "Siswa2 - Setor tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else {
            echo "Jumlah setor harus positif!\n";
        }
    }
   
    public function tampilkanInfo() {
        echo "\n=== Info Siswa 2 ===\n";
        parent::tampilkanInfo();
        echo "Uang Milik Sendiri: Rp " . number_format($this->uangMilik, 0, ',', '.') . "\n";
    }
}
 
// Class Anak - Siswa3
class Siswa3 extends Tabungan {
   
    public function __construct($nama, $saldoAwal) {
        parent::__construct($nama, $saldoAwal);
    }
   
    // Siswa3 bisa mengakses semua uang di tabungan (termasuk milik siswa lain)
    public function tarikTunai($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "Siswa3 - Tarik tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . " (bisa akses semua saldo)\n";
        } else if ($jumlah > $this->saldo) {
            echo "Siswa3 - Saldo tidak mencukupi!\n";
        } else {
            echo "Jumlah tarik harus positif!\n";
        }
    }
   
    public function setorTunai($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Siswa3 - Setor tunai berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "\n";
        } else {
            echo "Jumlah setor harus positif!\n";
        }
    }
   
    public function tampilkanInfo() {
        echo "\n=== Info Siswa 3 ===\n";
        parent::tampilkanInfo();
        echo "(Dapat mengakses semua saldo tabungan)\n";
    }
}
 
// ============= MAIN PROGRAM =============
echo "╔════════════════════════════════════════════╗\n";
echo "║          SISTEM TABUNGAN SEKOLAH           ║\n";
echo "╚════════════════════════════════════════════╝\n";
 
// Membuat objek siswa dengan saldo awal
$siswa1 = new Siswa1("Budi", 50000);
$siswa2 = new Siswa2("Ani", 30000);
$siswa3 = new Siswa3("Citra", 20000);
 
// Gabungkan dalam array untuk kemudahan akses
$daftarSiswa = [$siswa1, $siswa2, $siswa3];
 
echo "\n【 SALDO AWAL 】\n";
foreach ($daftarSiswa as $siswa) {
    $siswa->tampilkanInfo();
}
 
echo "\n" . str_repeat("=", 50) . "\n";
echo "【 SIMULASI TRANSAKSI 】\n";
echo str_repeat("=", 50) . "\n";
 
// Test 1: Siswa1 setor dan tarik uangnya sendiri
echo "\n--- Test 1: Siswa1 transaksi normal ---\n";
$siswa1->setorTunai(20000);
$siswa1->tarikTunai(30000);
$siswa1->tampilkanInfo();
 
// Test 2: Siswa1 mencoba tarik lebih dari uangnya sendiri
echo "\n--- Test 2: Siswa1 tarik melebihi uang miliknya ---\n";
$siswa1->tarikTunai(50000); // Harusnya ditolak
$siswa1->tampilkanInfo();
 
// Test 3: Siswa2 transaksi normal
echo "\n--- Test 3: Siswa2 transaksi normal ---\n";
$siswa2->setorTunai(15000);
$siswa2->tarikTunai(20000);
$siswa2->tampilkanInfo();
 
// Test 4: Siswa3 setor tunai
echo "\n--- Test 4: Siswa3 setor tunai ---\n";
$siswa3->setorTunai(25000);
$siswa3->tampilkanInfo();
 
// Test 5: Siswa3 tarik tunai (bisa akses semua saldo)
echo "\n--- Test 5: Siswa3 tarik dengan akses penuh ---\n";
$totalSaldo = $siswa1->getSaldo() + $siswa2->getSaldo() + $siswa3->getSaldo();
echo "Total Saldo Tabungan Saat Ini: Rp " . number_format($totalSaldo, 0, ',', '.') . "\n";
$siswa3->tarikTunai(40000); // Bisa, karena siswa3 akses semua
$siswa3->tampilkanInfo();
 
// Tampilkan saldo akhir semua siswa
echo "\n" . str_repeat("=", 50) . "\n";
echo "【 SALDO AKHIR SEMUA SISWA 】\n";
echo str_repeat("=", 50) . "\n";
foreach ($daftarSiswa as $siswa) {
    $siswa->tampilkanInfo();
}
 
$totalSaldoAkhir = $siswa1->getSaldo() + $siswa2->getSaldo() + $siswa3->getSaldo();
echo "\n╔════════════════════════════════════════════╗\n";
echo "║  TOTAL SALDO TABUNGAN: Rp " . number_format($totalSaldoAkhir, 0, ',', '.') . str_repeat(" ", 15 - strlen(number_format($totalSaldoAkhir, 0, ',', '.'))) . "║\n";
echo "╚════════════════════════════════════════════╝\n";
 
// Tambahan: Input manual menggunakan fgets
echo "\n\n" . str_repeat("=", 50) . "\n";
echo "【 MODE INTERAKTIF - COBA SENDIRI 】\n";
echo str_repeat("=", 50) . "\n";
 
echo "\nPilih siswa untuk melakukan transaksi:\n";
echo "1. Siswa 1 (Budi)\n";
echo "2. Siswa 2 (Ani)\n";
echo "3. Siswa 3 (Citra)\n";
echo "Pilihan (1-3): ";
 
$pilihan = trim(fgets(STDIN));
 
$siswaAktif = null;
switch($pilihan) {
    case "1":
        $siswaAktif = $siswa1;
        echo "\nAnda memilih Siswa 1 (Budi)\n";
        break;
    case "2":
        $siswaAktif = $siswa2;
        echo "\nAnda memilih Siswa 2 (Ani)\n";
        break;
    case "3":
        $siswaAktif = $siswa3;
        echo "\nAnda memilih Siswa 3 (Citra)\n";
        break;
    default:
        echo "\nPilihan tidak valid!\n";
        exit;
}
 
echo "\nPilih jenis transaksi:\n";
echo "1. Setor Tunai\n";
echo "2. Tarik Tunai\n";
echo "Pilihan (1-2): ";
 
$jenisTransaksi = trim(fgets(STDIN));
 
echo "Masukkan jumlah (Rp): ";
$jumlah = (int)trim(fgets(STDIN));
 
if ($jenisTransaksi == "1") {
    $siswaAktif->setorTunai($jumlah);
} else if ($jenisTransaksi == "2") {
    $siswaAktif->tarikTunai($jumlah);
} else {
    echo "Jenis transaksi tidak valid!\n";
    exit;
}
 
echo "\n--- Informasi Setelah Transaksi ---\n";
$siswaAktif->tampilkanInfo();
 
echo "\n【 PROGRAM SELESAI 】\n";
?>