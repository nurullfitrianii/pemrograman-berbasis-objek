<!DOCTYPE html>
<html>
<head>
<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
<h2>Menampilkan data dari database</h2>
</div>

<div class="nav-menu">
    <div class="nav-container">
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <li class="dropdown">
                <a href="#">Data Master</a>
                <ul>
                    <li><a href="index.php?page=data_user">Data User</a></li>
                    <li><a href="index.php?page=data_barang">Data Barang</a></li>
                    <li><a href="index.php?page=data_customer">Data Customer</a></li>
                    <li><a href="index.php?page=data_supplier">Data Supplier</a></li>
                </ul>
            </li>
            
            <li class="dropdown">
                <a href="#">Data Transaksi</a>
                <ul>
                    <li><a href="index.php?page=transaksi_pembelian">Transaksi Pembelian</a></li>
                    <li><a href="index.php?page=transaksi_penjualan">Transaksi Penjualan</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Laporan</a>
                <ul>
                    <li><a href="index.php?page=laporan_barang">Laporan Data Barang</a></li>
                    <li><a href="index.php?page=laporan_customer">Laporan Data Customer</a></li>
                    <li><a href="index.php?page=laporan_supplier">Laporan Data Supplier</a></li>
                    <li><a href="index.php?page=laporan_pembelian">Laporan Transaksi Pembelian</a></li>
                    <li><a href="index.php?page=laporan_penjualan">Laporan Transaksi Penjualan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="container">

<a href="index.php">Lihat Semua Data</a>

<h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td><input type="text" name="pekerjaan"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>

</div>
 </body>
</html>