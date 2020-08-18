<?php
include_once "../../../config/config.php";
include_once "../../../config/bulan.php";
include_once "../../../config/auth-camat.php";

if (isset($_POST['verif'])) {
    $id_sktu    = $_POST['id_sktu'];
    $nomor_sktu = $_POST['nomor_sktu'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    $tes = explode('/', $nomor_sktu);
    $ambil = [
        'kode' => $tes[0],
        'no'   => $tes[1],
        'cam'  => $tes[3]
    ];
    $nobulanromawi = "SKTU-" . $bulan_romawi[date('m')];
    $tahunsekarang = date('Y');
    $nomorsktubaru = $ambil['kode'] . "/" . $ambil['no'] . "/" . $nobulanromawi . "/" . $ambil['cam'] . "/" . $tahunsekarang;

    // echo "<pre>";
    // var_dump($nomorsktubaru);
    // die();

    if ($status == 1) {
        $posisi             = 4;
        $kelengkapan        = 'Lengkap';
        $masa_berlaku_awal  = date('Y-m-d');
        $masa_berlaku_akhir = date('Y-m-d', strtotime('+1 year'));
        $tgl_selesai        = date('Y-m-d');
        $nosktuppj          = $nomorsktubaru;

        $submit = $koneksi->query("UPDATE sktu_perpanjangan SET nomor_sktu = '$nosktuppj', masa_berlaku_awal = '$masa_berlaku_awal', masa_berlaku_akhir = '$masa_berlaku_akhir', tgl_selesai = '$tgl_selesai', kelengkapan = '$kelengkapan', keterangan = '$keterangan', id_posisi = '$posisi' WHERE id_sktu = '$id_sktu'");
    } else {
        $posisi             = 1;
        $kelengkapan        = 'Tidak Lengkap';
        $nosktuppj          = $nomor_sktu;

        $submit = $koneksi->query("UPDATE sktu_perpanjangan SET nomor_sktu = '$nosktuppj', masa_berlaku_awal = null, masa_berlaku_akhir = null, tgl_selesai = null, kelengkapan = '$kelengkapan', keterangan = '$keterangan', id_posisi = '$posisi' WHERE id_sktu = '$id_sktu'");
    }

    if ($submit) {
        if ($status == 1) {
            $koneksi->query("UPDATE riwayat_tgl_sktu SET nomor_sktu = '$nosktuppj', terakhir_diperpanjang = '$masa_berlaku_akhir' WHERE     nomor_sktu = '$nomor_sktu'");
        }
        $_SESSION['pesan'] = "Data Permohonan Perpanjangan SKTU Telah Diverifikasi";
        echo "<script>window.location.replace('../');</script>";
    }
}
