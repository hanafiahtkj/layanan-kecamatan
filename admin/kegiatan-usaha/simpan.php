<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['simpan'])) {
    $kegiatan_usaha = $_POST['kegiatan_usaha'];

    $cek = $koneksi->query("SELECT * FROM kegiatan_usaha WHERE kegiatan_usaha = '$kegiatan_usaha'")->fetch_array();
    if (!empty($cek)) {
        $_SESSION['pesan'] = "Kegiatan Usaha Sudah Ada !";
        echo "<script>window.history.back();</script>";
    } else {

        $submit = $koneksi->query("INSERT INTO kegiatan_usaha VALUES (null, '$kegiatan_usaha')");
        if ($submit) {
            $_SESSION['pesan'] = "Data Kegiatan Usaha Ditambahkan";
            echo "<script>window.location.replace('../kegiatan-usaha/');</script>";
        }
    }
}
