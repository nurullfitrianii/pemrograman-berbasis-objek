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

<?php 
// Tentukan halaman yang akan ditampilkan, defaultnya 'data_user' 
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'data_user';
?>

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

<?php 
// Menampilkan notifikasi CRUD
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "<p class='notif'>Data berhasil di input.</p>";
    }else if($pesan == "update"){
        echo "<p class='notif'>Data berhasil di update.</p>";
    }else if($pesan == "hapus"){
        echo "<p class='notif'>Data berhasil di hapus.</p>";
    }
}


// LOGIKA TAMPILAN KONTEN BERDASARKAN MENU YANG DIKLIK
if ($currentPage == 'data_user') {
    // KONTEN DATA USER 
?>

<br/>
<a class="tombol" href="input.php">+ Tambah Data Baru</a>

<h3>Data user</h3>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Opsi</th>
    </tr>
    <?php 
    include 'koneksi.php';
    $no = 1;
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM user");
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['pekerjaan']; ?></td>
        <td>
            <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
            <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>      
        </td>
    </tr>
    <?php } ?>
</table>

<?php
} else {
    // TAMPILAN PLACEHOLDER UNTUK MENU LAIN
    $pageTitle = ucwords(str_replace('_', ' ', $currentPage));
    echo "<h3>Halaman " . $pageTitle . "</h3>";
    echo "<p>Konten untuk menu <b>$pageTitle</b> akan muncul di sini.</p>";
}
?>

</div>
</body>
</html>