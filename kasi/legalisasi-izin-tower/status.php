<?php
include '../../config/config.php';
include_once "../../config/auth-kasi.php";

$id   = encryptor('decrypt', $_GET['id']);
$s    = $_GET['s'];
$tgl_selesai = date('Y-m-d');

if ($s == "Selesai") {
    $submit = $koneksi->query("UPDATE legalisasi_izin_tower SET tgl_selesai = '$tgl_selesai', id_posisi = 4, keterangan = 'Proses Selesai', status = '$s' WHERE id_izin_tower = '$id'");
} else {
    $submit = $koneksi->query("UPDATE legalisasi_izin_tower SET status = '$s' WHERE id_izin_tower = '$id'");
}

if ($submit) {
    $_SESSION['pesan'] = "Status Legalisasi Permohonan Izin Tower Diubah";
    echo "<script>window.location.replace('../legalisasi-izin-tower/');</script>";
}
