<?php

include ('koneksi.php');
$koneksi = new Database();

$action = $_GET['action'];

if($action == "add"){
    $koneksi->tambah_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
    header('location:index.php?pesan=sukses_tambah');
}

else if($action == "edit"){
    $id_barang = $_POST['id_barang'];
    $koneksi->edit_data($id_barang,$_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
    header('location:index.php?pesan=sukses_ubah');
}

else if($action == "delete"){
    $id_barang = $_GET['id_barang'];
    $koneksi->delete_data($id_barang);
    header('location:index.php?pesan=sukses_hapus');
}

else if($action == "search"){
    $nama_barang = $_POST['nama_barang'];
    header('location:cari_data.php?cari=' . urlencode($nama_barang));
}

?>