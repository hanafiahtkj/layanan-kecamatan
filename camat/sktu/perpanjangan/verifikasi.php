<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-camat.php";

if (isset($_POST['verif'])) {
    $id_sktu    = $_POST['id_sktu'];
    $nomor_sktu = $_POST['nomor_sktu'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];
    if ($status == 1) {
        $posisi = 4;
        $kelengkapan = 'Lengkap';
        $masa_berlaku_awal  = date('Y-m-d');
        $masa_berlaku_akhir = date('Y-m-d', strtotime('+1 year'));
        $tgl_selesai        = date('Y-m-d');
    } else {
        $posisi = 1;
        $kelengkapan = 'Tidak Lengkap';
        $masa_berlaku_awal  = null;
        $masa_berlaku_akhir = null;
        $tgl_selesai        = null;
    }

    $submit = $koneksi->query("UPDATE sktu_perpanjangan SET masa_berlaku_awal = '$masa_berlaku_awal', masa_berlaku_akhir = '$masa_berlaku_akhir', tgl_selesai = '$tgl_selesai', kelengkapan = '$kelengkapan', keterangan = '$keterangan', id_posisi = '$posisi' WHERE id_sktu = '$id_sktu'");

    if ($submit) {
        $koneksi->query("UPDATE riwayat_tgl_sktu SET terakhir_diperpanjang = '$masa_berlaku_akhir' WHERE nomor_sktu = '$nomor_sktu'");
        $_SESSION['pesan'] = "Data Permohonan Perpanjangan SKTU Telah Diverifikasi";
        echo "<script>window.location.replace('../');</script>";
    }
}
