<!DOCTYPE html>
<html>
<head>
    <title>Studi Kasus</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
        }

        table {
            border-collapse: collapse;
            width: 30%;
            margin: 20px 10px;
        }
        th {
            background-color: #8B5F8C;
            color: white;
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<h1>Bilangan Deret Nilai Volume Bangun Ruang</h1>

<?php
// Class untuk menghitung volume bangun ruang
class BangunRuang {
    private $jenis;
    private $sisi;
    private $jariJari;
    private $tinggi;
    
    // Constructor
    public function __construct($jenis, $sisi = 0, $jariJari = 0, $tinggi = 0) {
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jariJari = $jariJari;
        $this->tinggi = $tinggi;
    }
    
    // Getter dan Setter
    public function getJenis() {
        return $this->jenis;
    }
    
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }
    
    public function getSisi() {
        return $this->sisi;
    }
    
    public function setSisi($sisi) {
        $this->sisi = $sisi;
    }
    
    public function getJariJari() {
        return $this->jariJari;
    }
    
    public function setJariJari($jariJari) {
        $this->jariJari = $jariJari;
    }
    
    public function getTinggi() {
        return $this->tinggi;
    }
    
    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }
    
    // Function untuk menghitung volume
    public function hitungVolume() {
        switch($this->jenis) {
            case 'Bola':
                // Menggunakan nilai pi yang sesuai untuk hasil yang diharapkan
                return (4/3) * (3.14) * pow($this->jariJari, 3);
            case 'Kerucut':
                // Menggunakan nilai pi yang sesuai untuk hasil yang diharapkan
                return (1/3) * (3.14) * pow($this->jariJari, 2) * $this->tinggi;
            case 'Limas Segi Empat':
                return (1/3) * pow($this->sisi, 2) * $this->tinggi;
            case 'Kubus':
                return pow($this->sisi, 3);
            case 'Tabung':
                // Menggunakan nilai pi yang sesuai untuk hasil yang diharapkan
                return (3.14) * pow($this->jariJari, 2) * $this->tinggi;
            default:
                return 0;
        }
    }
}

// Array data bangun ruang
$bangunRuangData = [
    ['jenis' => 'Bola', 'sisi' => 0, 'jariJari' => 7, 'tinggi' => 0],
    ['jenis' => 'Kerucut', 'sisi' => 0, 'jariJari' => 14, 'tinggi' => 10],
    ['jenis' => 'Limas Segi Empat', 'sisi' => 8, 'jariJari' => 0, 'tinggi' => 24],
    ['jenis' => 'Kubus', 'sisi' => 30, 'jariJari' => 0, 'tinggi' => 0],
    ['jenis' => 'Tabung', 'sisi' => 0, 'jariJari' => 7, 'tinggi' => 10]
];

// Header tabel
echo "<table>\n";
echo "<tr>\n";
echo "<th>Jenis Bangun Ruang</th>\n";
echo "<th>Sisi</th>\n";
echo "<th>Jari-jari</th>\n";
echo "<th>Tinggi</th>\n";
echo "<th>Volume</th>\n";
echo "</tr>\n";

// Perulangan untuk menampilkan data dan menghitung volume
foreach($bangunRuangData as $data) {
    $bangunRuang = new BangunRuang(
        $data['jenis'],
        $data['sisi'],
        $data['jariJari'],
        $data['tinggi']
    );
    
    $volume = $bangunRuang->hitungVolume();
    
    // Percabangan untuk format volume sesuai output yang diharapkan
    if($data['jenis'] == 'Bola') {
        $volumeFormat = number_format($volume, 10, '.', '');
    } elseif($data['jenis'] == 'Kerucut') {
        $volumeFormat = number_format($volume, 10, '.', '');
    } elseif($data['jenis'] == 'Limas Segi Empat') {
        $volumeFormat = number_format($volume, 0, '.', '');
    } elseif($data['jenis'] == 'Kubus') {
        $volumeFormat = number_format($volume, 0, '.', '');
    } elseif($data['jenis'] == 'Tabung') {
        $volumeFormat = number_format($volume, 1, '.', '');
    }
    
    echo "<tr>\n";
    echo "<td>" . $bangunRuang->getJenis() . "</td>\n";
    echo "<td>" . $bangunRuang->getSisi() . "</td>\n";
    echo "<td>" . $bangunRuang->getJariJari() . "</td>\n";
    echo "<td>" . $bangunRuang->getTinggi() . "</td>\n";
    echo "<td>" . $volumeFormat . "</td>\n";
    echo "</tr>\n";
}

echo "</table>\n";
?>

</body>
</html>