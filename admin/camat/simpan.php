<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['simpan'])) {
    $nama_camat    = $_POST['nama_camat'];
    $nip           = $_POST['nip'];
    $jabatan       = $_POST['jabatan'];
    $periode_awal  = $_POST['periode_awal'];
    $periode_akhir = $_POST['periode_akhir'];

    $submit = $koneksi->query("INSERT INTO camat VALUES (null, '$nama_camat', '$nip', '$jabatan', '$periode_awal', '$periode_akhir', 'Non-Aktif')");
    if ($submit) {
        $_SESSION['pesan'] = "Data Camat Ditambahkan";
        echo "<script>window.location.replace('../camat/');</script>";
    }
}
