<?php

// PROGRAM PENGHITUNG BESARAN ANGSURAN HUTANG

// --- INPUT DATA ---
$besaran_pinjaman = 1000000;
$besar_bunga_persen = 10;
$lama_angsuran_bulan = 5;
$keterlambatan_hari = 40;

// Ketentuan Denda Keterlambatan
$denda_persen_per_hari = 0.15;

// --- PROSES PERHITUNGAN ---

// 1. Hitung total pinjaman
// Rumus: Besaran Pinjaman + (Besaran Pinjaman * Besar Bunga %)
$total_pinjaman = $besaran_pinjaman + ($besaran_pinjaman * $besar_bunga_persen / 100);

// 2. Hitung besaran angsuran per bulan
// Rumus: Total Pinjaman / Lama Angsuran
$besaran_angsuran = $total_pinjaman / $lama_angsuran_bulan;

// 3. Hitung denda keterlambatan
// Rumus: Besaran Angsuran * Denda % per hari * Hari Keterlambatan
$denda_keterlambatan = $besaran_angsuran * ($denda_persen_per_hari / 100) * $keterlambatan_hari;

// 4. Hitung besaran pembayaran yang harus dibayar
// Rumus: Besaran Angsuran + Denda Keterlambatan
$besaran_pembayaran = $besaran_angsuran + $denda_keterlambatan;

// --- TAMPILAN OUTPUT ---

echo "<h1>Program Penghitung Besaran Angsuran Hutang</h1>";
echo "<h2>TOKO PEGADAIAN SYARIAH</h2>";
echo "Jl Keadilan No 16<br>";
echo "Telp. 72353459<br><br>";

echo "Besaran Pinjaman : Rp. " . number_format($besaran_pinjaman, 0, ',', '.');
echo "<br>";
echo "Besar Bunga (%) : " . $besar_bunga_persen;
echo "<br><br>";

echo "Total Pinjaman : Rp. " . number_format($total_pinjaman, 0, ',', '.');
echo "<br>";
echo "Lama angsuran (bulan): " . $lama_angsuran_bulan;
echo "<br>";
echo "Besaran angsuran : Rp. " . number_format($besaran_angsuran, 0, ',', '.');
echo "<br><br>";

echo "Keterlambatan Angsuran (Hari): " . $keterlambatan_hari;
echo "<br>";
echo "Denda Keterlambatan : " . number_format($denda_keterlambatan, 0, ',', '.');
echo "<br>";
echo "Besaran Pembayaran : " . number_format($besaran_pembayaran, 0, ',', '.');
echo "<br>";
?>