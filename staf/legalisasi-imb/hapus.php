<?php
include '../../config/config.php';
include_once "../../config/auth-staf.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM legalisasi_imb WHERE id_imb = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Legalisasi Permohonan Izin Mendirikan Bangunan Dihapus";
    echo "<script>window.location.replace('../legalisasi-imb/');</script>";
}
