<?php
include '../../config/config.php';
include '../../config/bulan.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_sktu = '$id'");
$row  = $data->fetch_array();

$po  = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
?>

<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <th width="30%">Diperpanjang Pada</th>
            <td width="2%">:</td>
            <td>
                <?=
                    date('d', strtotime($row['tgl'])) . " " . $bln[date('m', strtotime($row['tgl']))] . " " . date('Y', strtotime($row['tgl']));
                ?>
            </td>
        </tr>
        <tr>
            <th width="30%">Nomor SKTU</th>
            <td width="2%">:</td>
            <td><?= $row['nomor_sktu']; ?></td>
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
            <td><?= $row['alamat_perusahaan'] . ' No. ' . $row['no_rumah'] . ' Rt. ' . $row['rt'] . ' Rw. ' . $row['rw'] . ' Kelurahan ' . $row['kelurahan'] ?></td>
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
            <th width="30%">Masa Berlaku</th>
            <td width="2%">:</td>
            <td>
                <?php if (!empty($row['masa_berlaku_awal']) && !empty($row['masa_berlaku_akhir'])) {
                    echo
                        date('d', strtotime($row['masa_berlaku_awal'])) . " " . $bln[date('m', strtotime($row['masa_berlaku_awal']))] . " " . date('Y', strtotime($row['masa_berlaku_awal'])) . " S/D " .
                            date('d', strtotime($row['masa_berlaku_akhir'])) . " " . $bln[date('m', strtotime($row['masa_berlaku_akhir']))] . " " . date('Y', strtotime($row['masa_berlaku_akhir']));
                } else {
                    echo "-";
                }
                ?>
            </td>
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
                $lampiran = $koneksi->query("SELECT * FROM lampiran_sktu_file as ls LEFT JOIN lampiran_sktu as l ON ls.id_lampiran = l.id_lampiran WHERE ls.id_sktu = '$id' AND ls.keterangan = 'Perpanjangan'");
                foreach ($lampiran as $file) {
                ?>
                    <tr>
                        <th width="30%"><?= $file['nama_lampiran']; ?></th>
                        <td width="2%">:</td>
                        <td>
                            <?php
                            $nama_lamp      = explode('.', $file['file']);
                            $format_lamp    = end($nama_lamp);
                            if ($format_lamp == 'pdf') :
                            ?>
                                <embed src="<?= base_url('assets/sktu/perpanjangan/' . $file['file']) ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />

                            <?php else : ?>
                                <img class="profile-user-img img-fluid" style="width: auto; height: auto;" src="<?= base_url() ?>/assets/sktu/perpanjangan/<?= $file['file'] ?>" alt="File Belum Dilampirkan">
                            <?php endif ?>
                        </td>
                    </tr>

                <?php } ?>

            </table>
        </div>
    </div>

</div>