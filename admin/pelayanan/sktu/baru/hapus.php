<?php
include '../../../../config/config.php';
include_once "../../../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$data  = $koneksi->query("SELECT * FROM sktu_baru WHERE id_sktu = '$id'")->fetch_array();
$nomor = $data['nomor_sktu'];

$ambilfile = $koneksi->query("SELECT * FROM lampiran_sktu_file WHERE nomor_sktu = '$nomor' AND keterangan = 'Baru'");

$hapus = $koneksi->query("DELETE FROM sktu_baru WHERE id_sktu = '$id'");

if ($hapus) {
    foreach ($ambilfile as $row) {
        $file = $row['file'];
        $koneksi->query("DELETE FROM lampiran_sktu_file WHERE nomor_sktu = '$nomor' AND keterangan = 'Baru'");
        unlink('../../../../assets/sktu/' . $file);
        $koneksi->query("DELETE FROM riwayat_tgl_sktu WHERE nomor_sktu = '$nomor'");
    }
    $_SESSION['pesan'] = "Data SKTU Dihapus";
    echo "<script>window.location.replace('../');</script>";
}
