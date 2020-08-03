<?php
include '../../../../config/config.php';
include_once "../../../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$data       = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_sktu = '$id'")->fetch_array();
$idm        = $data['id_masyarakat'];
$nomor      = $data['nomor_sktu'];
$masa_awal  = $data['masa_berlaku_awal'];
$masa_akhir = $data['masa_berlaku_akhir'];
$fc         = $data['file_count'];

$ambilfile = $koneksi->query("SELECT * FROM lampiran_sktu_file WHERE nomor_sktu = '$nomor' AND keterangan = 'Perpanjangan' AND file_count = '$fc'");

// echo "<pre>";
// var_dump($ambilfile);
// die();

$hapus = $koneksi->query("DELETE FROM sktu_perpanjangan WHERE id_sktu = '$id'");

if ($hapus) {
    foreach ($ambilfile as $row) {
        $idf  = $row['id_file'];
        $file = $row['file'];
        $koneksi->query("DELETE FROM lampiran_sktu_file WHERE id_file = '$idf' AND nomor_sktu = '$nomor' AND keterangan = 'Perpanjangan' AND file_count = '$fc'");
        unlink('../../../../assets/sktu/perpanjangan/' . $file);
        $koneksi->query("UPDATE riwayat_tgl_sktu SET terakhir_diperpanjang = '$masa_awal' WHERE id_masyarakat = '$idm' AND nomor_sktu = '$nomor'");
    }
    $_SESSION['pesan'] = "Data Perpanjangan SKTU Dihapus";
    echo "<script>window.location.replace('../');</script>";
}
