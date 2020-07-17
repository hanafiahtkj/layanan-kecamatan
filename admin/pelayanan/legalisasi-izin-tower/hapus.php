<?php
include '../../../config/config.php';
include_once "../../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM legalisasi_izin_tower WHERE id_izin_tower = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Legalisasi Permohonan Izin Tower Dihapus";
    echo "<script>window.location.replace('../legalisasi-izin-tower/');</script>";
}
