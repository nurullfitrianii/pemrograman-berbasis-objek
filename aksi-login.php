// aksi-login.php
<?php
session_start();
include 'koneksi.php'; 

$db = new database();

$username = $_POST['username'];
$password = $_POST['password'];
$cek = $db->login($username, $password);

if($cek){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php?pesan=Selamat%20Datang");
} else {
    header("location:login.php?pesan=gagal");
}
?>