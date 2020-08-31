<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id_blanko   = $_POST['id_blanko'];
    $nama_blanko = $_POST['nama_blanko'];
    $keterangan  = $_POST['keterangan'];

    $ambilfile = $koneksi->query("SELECT * FROM blanko WHERE id_blanko = '$id_blanko'")->fetch_array();
    $filelama  = $ambilfile['file'];

    // UPLOAD FILE DOKUMEN
    $event_filedoc = "";

    if (!empty($_FILES['file']['name'])) {

        $filedoc      = $_FILES['file']['name'];
        $x_filedoc    = explode('.', $filedoc);
        $ext_filedoc  = end($x_filedoc);
        $nama_filedoc = $x_filedoc[0] . rand(1, 99999) . '.' . $ext_filedoc;
        $tmp_filedoc  = $_FILES['file']['tmp_name'];
        $dir_filedoc  = '../../assets/blanko/';

        move_uploaded_file($tmp_filedoc, $dir_filedoc . $nama_filedoc);
        if (file_exists($dir_filedoc . $filelama)) {
            unlink($dir_filedoc . $filelama);
        }
        $event_filedoc .= "Sukses Upload";
    } else {
        $nama_filedoc = $ambilfile['file'];
        $event_filedoc .= "Foto Tidak Diubah";
    }

    if (!empty($event_filedoc)) {

        $submit = $koneksi->query("UPDATE blanko SET nama_blanko = '$nama_blanko', file = '$nama_filedoc', keterangan = '$keterangan' WHERE id_blanko = '$id_blanko'");
        if ($submit) {
            $_SESSION['pesan'] = "Data Blanko Diubah";
            echo "<script>window.location.replace('../blanko/');</script>";
        }
    }
}
