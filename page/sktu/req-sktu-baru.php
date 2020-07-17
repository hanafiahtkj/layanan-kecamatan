<?php
include '../../config/config.php';
include '../../config/bulan.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM sktu_baru WHERE id_sktu = '$id'");
$row  = $data->fetch_array();

$po  = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
?>

<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th width="30%">Tanggal Permohonan</th>
            <td width="2%">:</td>
            <td>
                <?=
                    date('d', strtotime($row['tgl'])) . " " . $bln[date('m', strtotime($row['tgl']))] . " " . date('Y', strtotime($row['tgl']));
                ?>
            </td>
        </tr>
        <tr>
            <th width="30%">Nama Pemohon</th>
            <td width="2%">:</td>
            <td><?= $row['nama_pemohon'] ?></td>
        </tr>
        <tr>
            <th width="30%">No. Telpon</th>
            <td width="2%">:</td>
            <td><?= $row['no_telp'] ?></td>
        </tr>
        <tr>
            <th width="30%">Nama Perusahaan</th>
            <td width="2%">:</td>
            <td><?= $row['nama_perusahaan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Alamat Perusahaan</th>
            <td width="2%">:</td>
            <td><?= $row['alamat_perusahaan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Nama Pimpinan Perusahaan</th>
            <td width="2%">:</td>
            <td><?= $row['nama_pimpinan_perusahaan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Alamat Kediaman</th>
            <td width="2%">:</td>
            <td><?= $row['alamat_kediaman'] ?></td>
        </tr>
        <tr>
            <th width="30%">Kegiatan Usaha</th>
            <td width="2%">:</td>
            <td><?= $row['kegiatan_usaha'] ?></td>
        </tr>
        <tr>
            <th width="30%">Kelengkapan</th>
            <td width="2%">:</td>
            <td><?= $row['kelengkapan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Keterangan</th>
            <td width="2%">:</td>
            <td><?= $row['keterangan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Tanggal Selesai</th>
            <td width="2%">:</td>
            <td>
                <?php
                if ($row['tgl_selesai'] == "0000-00-00" or is_null($row['tgl_selesai'])) {
                    echo "-";
                } else {
                    echo date('d', strtotime($row['tgl_selesai'])) . " " . $bln[date('m', strtotime($row['tgl_selesai']))] . " " . date('Y', strtotime($row['tgl_selesai']));
                }
                ?>
            </td>
        </tr>
        <tr>
            <th width="30%">Posisi Berkas</th>
            <td width="2%">:</td>
            <td><?= $po['posisi'] ?></td>
        </tr>
        <tr>
            <th width="30%">Status</th>
            <td width="2%">:</td>
            <td>
                <?php
                if ($row['status'] == "Belum Diproses") {
                    echo "<span class='badge badge-danger'>" . $row['status'] . "</span>";
                } elseif ($row['status'] == "Dalam Proses") {
                    echo "<span class='badge badge-warning'>" . $row['status'] . "</span>";
                } else {
                    echo "<span class='badge badge-success'>" . $row['status'] . "</span>";
                }
                ?>
            </td>
        </tr>
    </table>

    <div style="margin-top: 5%;">
        <center>
            <u>
                <h1 style="font-weight: bold;">Lampiran</h1>
            </u>
        </center>
        <div class="table-responsive">
            <table class="table table-striped">
                <?php
                $lampiran = $koneksi->query("SELECT * FROM lampiran_sktu_file as ls LEFT JOIN lampiran_sktu as l ON ls.id_lampiran = l.id_lampiran WHERE ls.nomor_sktu = '$row[nomor_sktu]' AND ls.keterangan = 'Baru'");
                foreach ($lampiran as $file) {
                ?>
                    <tr>
                        <th width="30%"><?= $file['nama_lampiran']; ?></th>
                        <td width="2%">:</td>
                        <td>
                            <img class="profile-user-img img-fluid" style="width: auto; height: auto;" src="<?= base_url() ?>/assets/sktu/<?= $file['file'] ?>" alt="User profile picture">
                        </td>
                    </tr>

                <?php } ?>

            </table>
        </div>
    </div>

</div>