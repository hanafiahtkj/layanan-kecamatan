<?php
include_once "../../config/config.php";
include_once "../../config/auth-kasi.php";

if (isset($_POST['edit'])) {
    $id_proposal    = $_POST['id_proposal'];
    $tgl_permohonan = $_POST['tgl_permohonan'];
    $nama           = $_POST['nama'];
    $judul_proposal = $_POST['judul_proposal'];
    $id_posisi      = $_POST['id_posisi'];
    $status         = $_POST['status'];

    if ($status == "Selesai") {
        $tgl_selesai = $_POST['tgl_selesai'];
        $submit = $koneksi->query("UPDATE legalisasi_proposal SET tgl_permohonan = '$tgl_permohonan', nama = '$nama', judul_proposal = '$judul_proposal', tgl_selesai = '$tgl_selesai', id_posisi = 4,  status = '$status' WHERE id_proposal = '$id_proposal'");
    } else {
        $submit = $koneksi->query("UPDATE legalisasi_proposal SET tgl_permohonan = '$tgl_permohonan', nama = '$nama', judul_proposal = '$judul_proposal', tgl_selesai = null, id_posisi = '$id_posisi',  status = '$status' WHERE id_proposal = '$id_proposal'");
    }

    if ($submit) {
        $_SESSION['pesan'] = "Data Legalisasi Proposal Diubah";
        echo "<script>window.location.replace('../legalisasi-proposal/');</script>";
    }
}
