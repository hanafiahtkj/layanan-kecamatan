<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id_role    = $_POST['id_role'];
    $role       = $_POST['role'];
    $keterangan = $_POST['keterangan'];

    $submit = $koneksi->query("UPDATE role_user SET role = '$role', keterangan = '$keterangan' WHERE id_role = '$id_role'");
    if ($submit) {
        $_SESSION['pesan'] = "Data Role Diubah";
        echo "<script>window.location.replace('../role/');</script>";
    }
}
