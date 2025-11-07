<?php
// index.php
session_start(); 

// Pengecekan status login (WAJIB)
if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    header('location:login.php?pesan=belum_login');
    exit;
}

include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
// Baris ini tidak diperlukan karena sudah ada di kelas Database:
// $koneksi=mysqli_connect("localhost","root","","belajar_oop"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>

<a href="tambah_data.php">
    <button>Tambah Data</button>
</a>

<div style="margin-left: 365px; margin-top: 5px; margin-bottom: 5px;">
    <form action="cari_data.php" method="get">
        <input type="text" name="cari" placeholder="Cari Nama Barang">
        <input type="submit" value="Cari">
    </form>
</div>

<table border="1"> 
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Barang</th>
        <th>Stok</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach($data_barang as $row){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo "BRG" . str_pad($row['id_barang'], 3, '0', STR_PAD_LEFT); ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['stok']; ?></td>
        <td><?php echo $row['harga_beli']; ?></td>
        <td><?php echo $row['harga_jual']; ?></td>
        <td>
            <a href="edit_data.php?id_barang=<?php echo $row['id_barang']; ?>&action=edit">Edit</a>
            <a href="proses_barang.php?id_barang=<?php echo $row['id_barang']; ?>&action=delete">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

<br>
<a href="logout.php">
    <button>Keluar Aplikasi</button>
</a>

</body>
</html>