<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['simpan'])) {
    $nama_blanko   = $_POST['nama_blanko'];
    $keterangan    = $_POST['keterangan'];

    $cek = $koneksi->query("SELECT * FROM blanko WHERE nama_blanko = '$nama_blanko'")->fetch_array();
    if (!empty($cek)) {
        $_SESSION['pesan'] = "Nama Blanko Sudah Ada !";
        echo "<script>window.history.back();</script>";
    } else {

        // UPLOAD FILE DOKUMEN
        $event_filedoc = "";
        $filedoc      = $_FILES['file']['name'];
        $x_filedoc    = explode('.', $filedoc);
        $ext_filedoc  = end($x_filedoc);
        $nama_filedoc = $x_filedoc[0] . rand(1, 99999) . '.' . $ext_filedoc;
        $tmp_filedoc  = $_FILES['file']['tmp_name'];
        $dir_filedoc  = '../../assets/blanko/';

        move_uploaded_file($tmp_filedoc, $dir_filedoc . $nama_filedoc);
        $event_filedoc .= "Sukses Upload";

        if (!empty($event_filedoc)) {

            $submit = $koneksi->query("INSERT INTO blanko VALUES (null, '$nama_blanko', '$nama_filedoc', '$keterangan')");
            if ($submit) {
                $_SESSION['pesan'] = "Data Blanko Ditambahkan";
                echo "<script>window.location.replace('../blanko/');</script>";
            }
        }
    }
}
