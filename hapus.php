<?php
include_once 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query hapus data
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);

// Redirect ke halaman utama
header('Location: index.php');
exit;
?>
