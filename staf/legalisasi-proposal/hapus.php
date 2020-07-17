<?php
include '../../config/config.php';
include_once "../../config/auth-staf.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM legalisasi_proposal WHERE id_proposal = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Legalisasi Proposal Dihapus";
    echo "<script>window.location.replace('../legalisasi-proposal/');</script>";
}
