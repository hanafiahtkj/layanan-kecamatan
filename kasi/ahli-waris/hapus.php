<?php
include '../../config/config.php';
include_once "../../config/auth-kasi.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM ahli_waris WHERE id_ahli_waris = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Surat Pernyataan Ahli Waris Dihapus";
    echo "<script>window.location.replace('../ahli-waris/');</script>";
}
