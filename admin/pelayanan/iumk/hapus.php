<?php
include '../../../config/config.php';
include_once "../../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$data  = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'")->fetch_array();
$nomor = $data['nomor_iumk'];
$foto  = $data['foto_pemohon'];

$ambilfile = $koneksi->query("SELECT * FROM lampiran_iumk_file WHERE nomor_iumk = '$nomor'");

$hapus = $koneksi->query("DELETE FROM iumk WHERE id_iumk = '$id'");

if ($hapus) {
    unlink('../../../assets/iumk_foto_pemohon/' . $foto);
    foreach ($ambilfile as $row) {
        $file = $row['file'];
        $koneksi->query("DELETE FROM lampiran_iumk_file WHERE nomor_iumk = '$nomor'");
        unlink('../../../assets/iumk/' . $file);
    }
    $_SESSION['pesan'] = "Data IUMK Dihapus";
    echo "<script>window.location.replace('../iumk/');</script>";
}
