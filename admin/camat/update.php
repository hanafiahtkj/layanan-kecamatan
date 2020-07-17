<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id_camat      = $_POST['id_camat'];
    $nama_camat    = $_POST['nama_camat'];
    $nip           = $_POST['nip'];
    $jabatan       = $_POST['jabatan'];
    $periode_awal  = $_POST['periode_awal'];
    $periode_akhir = $_POST['periode_akhir'];

    $submit = $koneksi->query("UPDATE camat SET nama_camat = '$nama_camat', nip = '$nip', jabatan = '$jabatan', periode_awal_jabatan = '$periode_awal', periode_akhir_jabatan = '$periode_akhir' WHERE id_camat = '$id_camat'");
    if ($submit) {
        $_SESSION['pesan'] = "Data Camat Diubah";
        echo "<script>window.location.replace('../camat/');</script>";
    }
}
