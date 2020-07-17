<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['aktif'])) {
    $id = encryptor('decrypt', $_POST['id']);

    $submit = $koneksi->query("UPDATE camat SET status = 'Non-Aktif'");
    if ($submit) {
        $koneksi->query("UPDATE camat SET status = 'Aktif' WHERE id_camat = '$id'");
        echo "<script>window.location.replace('../camat/');</script>";
    }
}
