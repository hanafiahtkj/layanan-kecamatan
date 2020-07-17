<?php
include '../../config/config.php';
include_once "../../config/auth-staf.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM rekomendasi_pendirian_paud WHERE id_rpp = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Surat Rekomendasi Pendirian PAUD Dihapus";
    echo "<script>window.location.replace('../rpp/');</script>";
}
