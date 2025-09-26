<?php

class kendaraan {
    public $merk;
    public $harga;
    
    public function __construct($merk, $harga) {
        $this->merk = $merk;
        $this->harga = $harga;
    }
    
    public function getInfoDasar() {
        $harga_rupiah = number_format($this->harga * 1000000, 0, ',', '.');
        return "Merk: {$this->merk}, Harga: Rp {$harga_rupiah}";
    }
}

class pesawat extends kendaraan {
    private $tinggiMaks; 
    private $kecepatanMaks; 
    
    public function __construct($merk, $harga, $tinggiMaks, $kecepatanMaks) {
        parent::__construct($merk, $harga); 
        $this->tinggiMaks = $tinggiMaks;
        $this->kecepatanMaks = $kecepatanMaks;
    }
    public function setTinggiMaks($tinggi) {
        $this->tinggiMaks = $tinggi;
    }
    public function setKecepatanMaks($kecepatan) {
        $this->kecepatanMaks = $kecepatan;
    }
    public function bacaTinggiMaks() {
        return $this->tinggiMaks;
    }
    public function bacaKecepatanMaks() {
        return $this->kecepatanMaks;
    }
    public function biayaOperasional() {
        $hargaRp = $this->harga * 1000000;
        $persentase = 0.05;

        $tinggi = $this->tinggiMaks;
        $kecepatan = $this->kecepatanMaks;
    
        if ($tinggi > 5000 && $kecepatan > 800) {
             $persentase = 0.30;
        } 
        else if ($tinggi >= 3000 && $tinggi <= 5000 && $kecepatan >= 500 && $kecepatan <= 800) {
            $persentase = 0.20;
        } 
        else if ($tinggi < 3000 && $kecepatan < 500) {
            $persentase = 0.10;
        } 
        
        $biaya = $hargaRp * $persentase;
        
        return number_format($biaya, 0, ',', '.');
    }
}

$data_pesawat = [
    new pesawat("Boeing 737", 2000, 7500, 650),
    new pesawat("Boeing 747", 3500, 5800, 750),
    new pesawat("Cassa", 750, 3500, 500)
];

echo "<h2>Output Biaya Operasional Pesawat</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<thead>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Merk Pesawat</th>";
echo "<th>Harga Dasar (Rp)</th>";
echo "<th>Tinggi Maks (feet)</th>";
echo "<th>Kecepatan Maks (km/jam)</th>";
echo "<th>Biaya Operasional (Rp)</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$i = 1;
foreach ($data_pesawat as $p) {
    $biaya = $p->biayaOperasional();
    $harga_rupiah = number_format($p->harga * 1000000, 0, ',', '.');

    echo "<tr>";
    echo "<td>{$i}.</td>";
    echo "<td>{$p->merk}</td>";
    echo "<td align='right'>{$harga_rupiah}</td>";
    echo "<td align='right'>{$p->bacaTinggiMaks()}</td>";
    echo "<td align='right'>{$p->bacaKecepatanMaks()}</td>";
    echo "<td align='right'><b>{$biaya}</b></td>";
    echo "</tr>";
    
    $i++;
}

echo "</tbody>";
echo "</table>";

?>