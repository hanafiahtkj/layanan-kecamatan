<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['reset'])) {
    $id    = $_POST['id_no'];

    $submit = $koneksi->query("UPDATE nomor_urut_iumk SET nomor_urut = '001' WHERE id_no = '$id'");
    if ($submit) {
        $_SESSION['pesan'] = "Nomor Urut IUMK Telah Direset Ulang Menjadi 001";
        echo "<script>window.location.replace('../nomor-urut-iumk/');</script>";
    }
}
