<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id_lampiran   = $_POST['id_lampiran'];
    $nama_lampiran = $_POST['nama_lampiran'];
    $keterangan    = $_POST['keterangan'];
    $ketentuan     = $_POST['ketentuan'];
    $deskripsi     = $_POST['deskripsi'];

    $submit = $koneksi->query("UPDATE lampiran_sktu SET nama_lampiran = '$nama_lampiran', keterangan = '$keterangan', ketentuan = '$ketentuan', deskripsi = '$deskripsi' WHERE id_lampiran = '$id_lampiran'");
    if ($submit) {
        $_SESSION['pesan'] = "Data Lampiran SKTU Diubah";
        echo "<script>window.location.replace('../lampiran-sktu/');</script>";
    }
}
