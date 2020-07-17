<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['simpan'])) {
    $kelurahan = $_POST['kelurahan'];

    $cek = $koneksi->query("SELECT * FROM kelurahan WHERE kelurahan = '$kelurahan'")->fetch_array();
    if (!empty($cek)) {
        $_SESSION['pesan'] = "Nama Kelurahan Sudah Ada !";
        echo "<script>window.history.back();</script>";
    } else {

        $submit = $koneksi->query("INSERT INTO kelurahan VALUES (null, '$kelurahan')");
        if ($submit) {
            $_SESSION['pesan'] = "Data Kelurahan Ditambahkan";
            echo "<script>window.location.replace('../kelurahan/');</script>";
        }
    }
}
