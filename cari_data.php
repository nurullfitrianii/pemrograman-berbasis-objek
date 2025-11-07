<?php
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
    header("location:login.php?pesan=belum_login");
    exit;
}

include('koneksi.php');
$db = new database();

$nama_barang_cari = isset($_GET['cari']) ? $_GET['cari'] : '';

if (!empty($nama_barang_cari)) {
    $data_barang = $db->cari_data($nama_barang_cari);
    $pesan = "Hasil pencarian untuk: **" . htmlspecialchars($nama_barang_cari) . "**";
} else {
    header("location:index.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian</title>
</head>
<body>
    <div style="margin: 20px;">
        <a href="index.php">Kembali ke Beranda</a>
        <br><br>
        
        <form method="post" action="proses_barang.php?action=search" style="display: inline-block;">
            <input type="text" name="nama_barang" placeholder="Cari Nama Barang" value="<?php echo htmlspecialchars($nama_barang_cari); ?>">
            <input type="submit" value="Cari">
        </form>
        <a href="logout.php" style="margin-left: 20px;">
            <button>Keluar Aplikasi</button>
        </a>
        
        <br>
        <h3><?php echo $pesan; ?></h3>

        <table border="1" style="border-collapse: collapse; width: 80%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Barang</th>
                    <th>Stok</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if(!empty($data_barang)){
                    foreach($data_barang as $row){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo "BRG" . str_pad($row['id_barang'], 3, '0', STR_PAD_LEFT); ?></td> 
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo number_format($row['harga_beli'], 0, ',', '.'); ?></td>
                    <td><?php echo number_format($row['harga_jual'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="edit_data.php?id_barang=<?php echo $row['id_barang']; ?>">Edit</a> | 
                        <a href="proses_barang.php?id_barang=<?php echo $row['id_barang']; ?>&action=delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>Data barang tidak ditemukan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="logout.php">
            <button>Keluar Aplikasi</button>
        </a>
    </div>
</body>
</html>