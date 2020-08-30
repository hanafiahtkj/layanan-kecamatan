<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['simpan'])) {
    $nama_lampiran = $_POST['nama_lampiran'];
    $ketentuan     = $_POST['ketentuan'];
    $deskripsi     = $_POST['deskripsi'];

    $cek = $koneksi->query("SELECT * FROM lampiran_iumk WHERE nama_lampiran = '$nama_lampiran'")->fetch_array();
    if (!empty($cek)) {
        $_SESSION['pesan'] = "Nama Lampiran Sudah Ada !";
        echo "<script>window.history.back();</script>";
    } else {

        $submit = $koneksi->query("INSERT INTO lampiran_iumk VALUES (null, '$nama_lampiran', '$ketentuan', '$deskripsi')");
        if ($submit) {
            $_SESSION['pesan'] = "Data Lampiran IUMK Ditambahkan";
            echo "<script>window.location.replace('../lampiran-iumk/');</script>";
        }
    }
}
