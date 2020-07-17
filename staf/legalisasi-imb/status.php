<?php
include '../../config/config.php';
include_once "../../config/auth-staf.php";

$id   = encryptor('decrypt', $_GET['id']);
$s    = $_GET['s'];
$tgl_selesai = date('Y-m-d');

if ($s == "Selesai") {
    $submit = $koneksi->query("UPDATE legalisasi_imb SET tgl_selesai = '$tgl_selesai', id_posisi = 4, keterangan = 'Proses Selesai', status = '$s' WHERE id_imb = '$id'");
} else {
    $submit = $koneksi->query("UPDATE legalisasi_imb SET status = '$s' WHERE id_imb = '$id'");
}

if ($submit) {
    $_SESSION['pesan'] = "Status Legalisasi Permohonan Izin Mendirikan Bangunan Diubah";
    echo "<script>window.location.replace('../legalisasi-imb/');</script>";
}
