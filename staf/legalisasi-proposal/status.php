<?php
include '../../config/config.php';
include_once "../../config/auth-staf.php";

$id   = encryptor('decrypt', $_GET['id']);
$s    = $_GET['s'];
$tgl_selesai = date('Y-m-d');

if ($s == "Selesai") {
    $submit = $koneksi->query("UPDATE legalisasi_proposal SET tgl_selesai = '$tgl_selesai', id_posisi = 4, status = '$s' WHERE id_proposal = '$id'");
} else {
    $submit = $koneksi->query("UPDATE legalisasi_proposal SET status = '$s' WHERE id_proposal = '$id'");
}

if ($submit) {
    $_SESSION['pesan'] = "Status Legalisasi Proposal Diubah";
    echo "<script>window.location.replace('../legalisasi-proposal/');</script>";
}
