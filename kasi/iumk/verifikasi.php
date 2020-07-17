    <?php
    include_once "../../config/config.php";
    include_once "../../config/auth-kasi.php";

    if (isset($_POST['verif'])) {

        // $dataperaturan = $koneksi->query("SELECT * FROM peraturan_iumk")->fetch_array();
        // $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

        // $peraturan       = $dataperaturan['peraturan'];
        // $nama_camat      = $camat['nama_camat'];
        // $nip             = $camat['nip'];
        // $jabatan         = $camat['jabatan'];

        $id_iumk         = $_POST['id_iumk'];
        $kelengkapan     = $_POST['kelengkapan'];
        $keterangan      = $_POST['keterangan'];

        if ($kelengkapan == "Lengkap") {
            $id_posisi   = 2;
            $status      = "Dalam Proses";
        } else {
            $id_posisi   = 1;
            $status      = "Belum Diproses";
        }

        $submit = $koneksi->query("UPDATE iumk SET
            kelengkapan              = '$kelengkapan',
            keterangan               = '$keterangan',
            id_posisi                = '$id_posisi',
            status                   = '$status'
            WHERE id_iumk            = '$id_iumk'
            ");

        if ($submit) {
            $_SESSION['pesan'] = "Data IUMK Diverifikasi";
            echo "<script>window.location.replace('" . base_url('kasi/iumk') . "');</script>";
        }
    }
    ?>