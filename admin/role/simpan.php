<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['simpan'])) {
    $role       = $_POST['role'];
    $keterangan = $_POST['keterangan'];

    $cek = $koneksi->query("SELECT * FROM role_user WHERE role = '$role'")->fetch_array();
    if (!empty($cek)) {
        $_SESSION['pesan'] = "Data Role Sudah Ada !";
        echo "<script>window.history.back();</script>";
    } else {

        $submit = $koneksi->query("INSERT INTO role_user VALUES (null, '$role', '$keterangan')");
        if ($submit) {
            $_SESSION['pesan'] = "Data Role Ditambahkan";
            echo "<script>window.location.replace('../role/');</script>";
        }
    }
}
