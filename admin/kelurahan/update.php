<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id_kelurahan = $_POST['id_kelurahan'];
    $kelurahan    = $_POST['kelurahan'];

    $submit = $koneksi->query("UPDATE kelurahan SET kelurahan = '$kelurahan' WHERE id_kelurahan = '$id_kelurahan'");
    if ($submit) {
        $_SESSION['pesan'] = "Data Kelurahan Diubah";
        echo "<script>window.location.replace('../kelurahan/');</script>";
    }
}
