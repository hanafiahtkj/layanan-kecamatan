<?php
include '../../config/config.php';
include_once "../../config/auth-staf.php";

$id   = encryptor('decrypt', $_GET['id']);
$s    = $_GET['s'];
$tgl_selesai = date('Y-m-d');

if ($s == "Selesai") {
    $submit = $koneksi->query("UPDATE ahli_waris SET tgl_selesai = '$tgl_selesai', id_posisi = 4, keterangan = 'Proses Selesai', status = '$s' WHERE id_ahli_waris = '$id'");
} else {
    $submit = $koneksi->query("UPDATE ahli_waris SET status = '$s' WHERE id_ahli_waris = '$id'");
}
if ($submit) {
    $_SESSION['pesan'] = "Status Surat Pernyataan Ahli Waris Diubah";
    echo "<script>window.location.replace('../ahli-waris/');</script>";
}
