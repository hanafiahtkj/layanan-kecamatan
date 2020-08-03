<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-camat.php";

if (isset($_POST['verif'])) {
    $id_sktu    = $_POST['id_sktu'];
    $nomor_sktu = $_POST['nomor_sktu'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    if ($status == 1) {
        $posisi             = 4;
        $kelengkapan        = 'Lengkap';
        $masa_berlaku_awal  = date('Y-m-d');
        $masa_berlaku_akhir = date('Y-m-d', strtotime('+1 year'));
        $tgl_selesai        = date('Y-m-d');
        $ceksktu = $koneksi->query("SELECT * FROM sktu_baru");
        if (mysqli_num_rows($ceksktu) === 0) {
            $query  = mysqli_query($koneksi, "SELECT max(nomor_urut) AS kode FROM nomor_urut_sktu");
            $data   = mysqli_fetch_array($query);
            $kode   = $data['kode'];
            $nourut = $kode++;
        } else {
            $query  = mysqli_query($koneksi, "SELECT max(nomor_sktu) AS kode FROM sktu_baru");
            $data   = mysqli_fetch_array($query);
            $kode   = $data['kode'];
            $nourut = (int) substr($kode, 5, 3);
            $nourut++;
        }

        $b_romawi   = $bulan_romawi[date('m')];
        $nosktubaru = "513/" . sprintf('%03s', $nourut) . "/SKTU-" . $b_romawi . "/CAM-BU/" . date('Y');
    } else {
        $posisi             = 1;
        $kelengkapan        = 'Tidak Lengkap';
        $masa_berlaku_awal  = null;
        $masa_berlaku_akhir = null;
        $tgl_selesai        = null;
        $nosktubaru         = $nomor_sktu;
    }

    $submit = $koneksi->query("UPDATE sktu_baru SET nomor_sktu = '$nosktubaru', masa_berlaku_awal = '$masa_berlaku_awal', masa_berlaku_akhir = '$masa_berlaku_akhir', kelengkapan = '$kelengkapan', keterangan = '$keterangan', tgl_selesai = '$tgl_selesai', id_posisi = '$posisi' WHERE id_sktu = '$id_sktu'");

    if ($submit) {
        if ($status == 1) {
            $koneksi->query("UPDATE riwayat_tgl_sktu SET nomor_sktu = '$nosktubaru', terakhir_diperpanjang = '$masa_berlaku_akhir' WHERE nomor_sktu = '$nomor_sktu'");
            $koneksi->query("UPDATE lampiran_sktu_file SET nomor_sktu = '$nosktubaru' WHERE nomor_sktu = '$nomor_sktu' AND keterangan = 'Baru'");
        }
        $_SESSION['pesan'] = "Data Permohonan SKTU BARU Telah Diverifikasi";
        echo "<script>window.location.replace('../');</script>";
    }
}
