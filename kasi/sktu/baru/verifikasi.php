<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-kasi.php";

if (isset($_POST['verif'])) {
    $id_sktu       = $_POST['id_sktu'];

    // AMBIL DASAR HUKUM SKTU
    $dataperaturan = $koneksi->query("SELECT * FROM peraturan_sktu")->fetch_array();

    // AMBIL CAMAT
    $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

    $peraturan       = $dataperaturan['peraturan'];
    $nama_camat      = $camat['nama_camat'];
    $nip             = $camat['nip'];
    $jabatan         = $camat['jabatan'];
    $kelengkapan     = $_POST['kelengkapan'];
    $keterangan      = $_POST['keterangan'];

    if ($kelengkapan == "Lengkap") {
        $id_posisi   = 2;
        $status      = "Dalam Proses";
    } else {
        $id_posisi   = 1;
        $status      = "Belum Diproses";
    }

    $submit = $koneksi->query("UPDATE sktu_baru SET
            peraturan                = '$peraturan',
            nama_camat               = '$nama_camat',
            nip                      = '$nip',
            jabatan                  = '$jabatan',
            kelengkapan              = '$kelengkapan',
            keterangan               = '$keterangan',
            id_posisi                = '$id_posisi',
            status                   = '$status'
            WHERE id_sktu            = '$id_sktu'
            ");


    if ($submit) {
        $_SESSION['pesan'] = "Data SKTU Diverifikasi";
        echo "<script>window.location.replace('" . base_url('kasi/sktu') . "');</script>";
    }
}
