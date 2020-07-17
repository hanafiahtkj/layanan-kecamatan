<?php
include '../../config/config.php';
include_once "../../config/auth-kasi.php";

$id   = encryptor('decrypt', $_GET['id']);
$s    = $_GET['s'];
$tgl_selesai = date('Y-m-d');

if ($s == "Selesai") {
    $submit = $koneksi->query("UPDATE rekomendasi_pendirian_paud SET tgl_selesai = '$tgl_selesai', id_posisi = 4, keterangan = 'Proses Selesai', status = '$s' WHERE id_rpp = '$id'");
} else {
    $submit = $koneksi->query("UPDATE rekomendasi_pendirian_paud SET status = '$s' WHERE id_rpp = '$id'");
}
if ($submit) {
    $_SESSION['pesan'] = "Status Surat Rekomendasi Pendirian PAUD Diubah";
    echo "<script>window.location.replace('../rpp/');</script>";
}
