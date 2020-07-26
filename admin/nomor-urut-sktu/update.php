<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id         = $_POST['id_no'];
    $nomor_urut = $_POST['nomor_urut'];

    $submit = $koneksi->query("UPDATE nomor_urut_sktu SET nomor_urut = '$nomor_urut' WHERE id_no = '$id'");
    if ($submit) {
        $_SESSION['pesan'] = "Nomor Urut SKTU Diubah";
        echo "<script>window.location.replace('../nomor-urut-sktu/');</script>";
    }
}
