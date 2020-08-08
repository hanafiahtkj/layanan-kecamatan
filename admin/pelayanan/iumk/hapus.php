<?php
include '../../../config/config.php';
include_once "../../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$data   = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'")->fetch_array();
$nomor  = $data['nomor_iumk'];
$foto   = $data['foto_pemohon'];
$status = $data['status'];

$ambilfile = $koneksi->query("SELECT * FROM lampiran_iumk_file WHERE id_iumk = '$id'");

$hapus = $koneksi->query("DELETE FROM iumk WHERE id_iumk = '$id'");

if ($hapus) {

    if ($status == "Selesai" and $nomor != '-') {
        // no urut sktu--
        $ceknoiumk  = $koneksi->query("SELECT * FROM nomor_urut_iumk")->fetch_array();
        $nourut     = $ceknoiumk['nomor_urut'];
        $nokurang = $nourut - 1;

        if ($nokurang < '009') {
            $nourutbaru = '00' . $nokurang;
        } elseif ($nnokurang < '099') {
            $nourutbaru = '0' . $nokurang;
        } else {
            $nourutbaru = $nokurang;
        }
        $submit = $koneksi->query("UPDATE nomor_urut_iumk SET nomor_urut = '$nourutbaru'");
        //-- no urut sktu--
    }

    unlink('../../../assets/iumk_foto_pemohon/' . $foto);
    foreach ($ambilfile as $row) {
        $file = $row['file'];
        $koneksi->query("DELETE FROM lampiran_iumk_file WHERE id_iumk = '$id'");
        unlink('../../../assets/iumk/' . $file);
    }
    $_SESSION['pesan'] = "Data IUMK Dihapus";
    echo "<script>window.location.replace('../iumk/');</script>";
}
