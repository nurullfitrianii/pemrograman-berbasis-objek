<?php

// Data simulasi
$adaKartu = true; // true jika memiliki kartu member, false jika tidak
$totalBelanja = 334000;

// Variabel untuk menampung hasil
$diskon = 0;
$totalBayar = 0;

// Cek apakah ada kartu member menggunakan switch case
switch ($adaKartu) {
    case true:
        // Jika memiliki kartu member, cek total belanja
        switch (true) {
            case ($totalBelanja > 100000):
                $diskon = 15000;
                break;
            case ($totalBelanja > 50000):
                $diskon = 5000;
                break;
            case ($totalBelanja > 10000):
                $diskon = 500;
                break;
            default:
                $diskon = 0;
                break;
        }
        break;
    
    case false:
        // Jika tidak memiliki kartu member
        switch (true) {
            case ($totalBelanja > 100000):
                $diskon = 5000;
                break;
            default:
                $diskon = 0;
                break;
        }
        break;
}

// Menghitung total bayar
$totalBayar = $totalBelanja - $diskon;

// Menampilkan output
echo "Apakah ada kartu member: " . ($adaKartu ? "ya" : "tidak") . "<br>";
echo "Total belanjaan: " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";

?>