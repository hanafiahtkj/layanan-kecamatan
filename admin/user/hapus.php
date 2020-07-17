<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM user WHERE id_user = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data User Dihapus";
    echo "<script>window.location.replace('../user/');</script>";
}
