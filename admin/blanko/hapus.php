<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$ambilfile = $koneksi->query("SELECT * FROM blanko WHERE id_blanko = '$id'")->fetch_array();
$file      = $ambilfile['file'];

$hapus = $koneksi->query("DELETE FROM blanko WHERE id_blanko = '$id'");

if ($hapus) {
    unlink('../../assets/blanko/' . $file);
    $_SESSION['pesan'] = "Data Blanko IUMK Dihapus";
    echo "<script>window.location.replace('../blanko/');</script>";
}
