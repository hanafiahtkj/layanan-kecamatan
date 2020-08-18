<?php
include '../../../../config/config.php';
include_once "../../../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$data   = $koneksi->query("SELECT * FROM sktu_baru WHERE id_sktu = '$id'")->fetch_array();
$nomor  = $data['nomor_sktu'];
$status = $data['status'];

$ambilfile = $koneksi->query("SELECT * FROM lampiran_sktu_file WHERE id_sktu = '$id' AND keterangan = 'Baru'");

$hapus = $koneksi->query("DELETE FROM sktu_baru WHERE id_sktu = '$id'");

if ($hapus) {

    if ($status == "Selesai") {
        // no urut sktu--
        $ceknosktu  = $koneksi->query("SELECT * FROM nomor_urut_sktu")->fetch_array();
        $nourut     = $ceknosktu['nomor_urut'];
        $nokurang = $nourut - 1;

        if ($nokurang < '009') {
            $nourutbaru = '00' . $nokurang;
        } elseif ($nnokurang < '099') {
            $nourutbaru = '0' . $nokurang;
        } else {
            $nourutbaru = $nokurang;
        }
        $submit = $koneksi->query("UPDATE nomor_urut_sktu SET nomor_urut = '$nourutbaru'");
        //-- no urut sktu--
    }

    foreach ($ambilfile as $row) {
        $file = $row['file'];
        $koneksi->query("DELETE FROM lampiran_sktu_file WHERE id_sktu = '$id' AND keterangan = 'Baru'");
        unlink('../../../../assets/sktu/' . $file);
    }
    $koneksi->query("DELETE FROM riwayat_tgl_sktu WHERE id_sktu = '$id'");
    $_SESSION['pesan'] = "Data SKTU Dihapus";
    echo "<script>window.location.replace('../');</script>";
}
