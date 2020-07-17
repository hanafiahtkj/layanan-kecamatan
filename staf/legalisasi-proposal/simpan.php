<?php
include_once "../../config/config.php";
include_once "../../config/auth-staf.php";

if (isset($_POST['simpan'])) {
    $nama           = $_POST['nama'];
    $judul_proposal = $_POST['judul_proposal'];
    $tgl_permohonan = $_POST['tgl_permohonan'];
    $id_posisi      = $_POST['id_posisi'];
    $status         = $_POST['status'];

    if ($status == "Selesai") {
        $tgl_selesai = $_POST['tgl_selesai'];
        $submit = $koneksi->query("INSERT INTO legalisasi_proposal VALUES (null, '$nama', '$judul_proposal', '$tgl_permohonan', '$tgl_selesai', 4, '$status')");
    } else {
        $submit = $koneksi->query("INSERT INTO legalisasi_proposal VALUES (null, '$nama', '$judul_proposal', '$tgl_permohonan', null, '$id_posisi', '$status')");
    }

    if ($submit) {
        $_SESSION['pesan'] = "Data Legalisasi Proposal Ditambahkan";
        echo "<script>window.location.replace('../legalisasi-proposal/');</script>";
    }
}
