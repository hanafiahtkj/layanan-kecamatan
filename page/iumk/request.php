<?php
include '../../config/config.php';
include '../../config/bulan.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'");
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
                    date('d', strtotime($row['tanggal'])) . " " . $bln[date('m', strtotime($row['tanggal']))] . " " . date('Y', strtotime($row['tanggal']));
                ?>
            </td>
        </tr>
        <tr>
            <th width="30%">Nomor IUMK</th>
            <td width="2%">:</td>
            <td>
                <?php
                if ($row['id_posisi'] != 4) {
                    echo "-";
                } else {
                    echo $row['nomor_iumk'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <th width="30%">Nama Pemohon</th>
            <td width="2%">:</td>
            <td><?= $row['nama_pemohon'] ?></td>
        </tr>
        <tr>
            <th width="30%">Nomor KTP</th>
            <td width="2%">:</td>
            <td><?= $row['nomor_ktp'] ?></td>
        </tr>
        <tr>
            <th width="30%">Alamat</th>
            <td width="2%">:</td>
            <td><?= $row['alamat'] ?></td>
        </tr>
        <tr>
            <th width="30%">No. Telepon</th>
            <td width="2%">:</td>
            <td><?= $row['no_telp'] ?></td>
        </tr>
        <tr>
            <th width="30%">Nama Perusahaan</th>
            <td width="2%">:</td>
            <td><?= $row['nama_perusahaan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Bentuk Perusahaan</th>
            <td width="2%">:</td>
            <td><?= $row['bentuk_perusahaan'] ?></td>
        </tr>
        <tr>
            <th width="30%">NPWP</th>
            <td width="2%">:</td>
            <td><?= $row['npwp'] ?></td>
        </tr>
        <tr>
            <th width="30%">Kegiatan Usaha</th>
            <td width="2%">:</td>
            <td><?= $row['kegiatan_usaha'] ?></td>
        </tr>
        <tr>
            <th width="30%">Sarana Usaha</th>
            <td width="2%">:</td>
            <td><?= $row['sarana_usaha'] ?></td>
        </tr>
        <tr>
            <th width="30%">Alamat Usaha</th>
            <td width="2%">:</td>
            <td><?= $row['alamat_usaha'] . ' No. ' . $row['no_rumah'] . ' Rt. ' . $row['rt'] . ' Rw. ' . $row['rw'] . ' Kelurahan ' . $row['kelurahan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Jumlah Modal Usaha</th>
            <td width="2%">:</td>
            <td><?= "Rp. " . number_format($row['jumlah_modal_usaha'], '0', ',', '.') . " -," ?></td>
        </tr>
        <tr>
            <th width="30%">Nomor Pendaftaran</th>
            <td width="2%">:</td>
            <td><?= $row['nomor_pendaftaran'] ?></td>
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
        <tr>
            <th width="30%">Keterangan</th>
            <td width="2%">:</td>
            <td><?= $row['keterangan'] ?></td>
        </tr>
        <tr>
            <th width="30%">Foto</th>
            <td width="2%">:</td>
            <td>
                <img class="profile-user-img img-fluid" style="width: 4cm; height: 6cm;" src="<?= base_url() ?>/assets/iumk_foto_pemohon/<?= $row['foto_pemohon'] ?>" alt="User profile picture">
            </td>
        </tr>

    </table>

    <div style="margin-top: 5%;">
        <center>
            <h1 style="font-weight: bold;">Lampiran</h1>
        </center>
        <table class="table table-striped">
            <?php
            $lampiran = $koneksi->query("SELECT * FROM lampiran_iumk_file as ls LEFT JOIN lampiran_iumk as l ON ls.id_lampiran = l.id_lampiran WHERE ls.id_iumk = '$id'");
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
                            <embed src="<?= base_url('assets/iumk/' . $file['file']) ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />

                        <?php else : ?>
                            <img class="profile-user-img img-fluid" style="width: auto; height: auto;" src="<?= base_url() ?>/assets/iumk/<?= $file['file'] ?>" alt="File Belum Dilampirkan">
                        <?php endif ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</div>
<!-- <div class="card">
    <div class="card-body" style="background-color: whitesmoke;">


        <dl class="row">
            <dt class="col-sm-4">Tanggal Permohonan</dt>
            <dd class="col-sm-8">
                <?=
                    date('d', strtotime($row['tanggal'])) . " " . $bln[date('m', strtotime($row['tanggal']))] . " " . date('Y', strtotime($row['tanggal']));
                ?>
            </dd>

            <dt class="col-sm-4">Nama Pemohon</dt>
            <dd class="col-sm-8"><?= $row['nama_pemohon']; ?></dd>

            <dt class="col-sm-4">Nomor KTP</dt>
            <dd class="col-sm-8"><?= $row['nomor_ktp']; ?></dd>

            <dt class="col-sm-4">Alamat</dt>
            <dd class="col-sm-8"><?= $row['alamat']; ?></dd>

            <dt class="col-sm-4">No. Telepon</dt>
            <dd class="col-sm-8"><?= $row['no_telp']; ?></dd>

            <dt class="col-sm-4">Nama Perusahaan</dt>
            <dd class="col-sm-8"><?= $row['nama_perusahaan']; ?></dd>

            <dt class="col-sm-4">Bentuk Perusahaan</dt>
            <dd class="col-sm-8"><?= $row['bentuk_perusahaan']; ?></dd>

            <dt class="col-sm-4">NPWP</dt>
            <dd class="col-sm-8"><?= $row['npwp']; ?></dd>

            <dt class="col-sm-4">Kegiatan Usaha</dt>
            <dd class="col-sm-8"><?= $row['kegiatan_usaha']; ?></dd>

            <dt class="col-sm-4">Sarana Usaha</dt>
            <dd class="col-sm-8"><?= $row['sarana_usaha']; ?></dd>

            <dt class="col-sm-4">Alamat Usaha</dt>
            <dd class="col-sm-8"><?= $row['alamat_usaha']; ?></dd>

            <dt class="col-sm-4">Jumlah Modal Usaha</dt>
            <dd class="col-sm-8"><?= "Rp. " . number_format($row['jumlah_modal_usaha'], '0', ',', '.') . " -," ?></dd>

            <dt class="col-sm-4">Nomor Pendaftaran</dt>
            <dd class="col-sm-8"><?= $row['nomor_pendaftaran']; ?></dd>

            <dt class="col-sm-4">Tanggal Selesai</dt>
            <dd class="col-sm-8">
                <?php
                if ($row['tgl_selesai'] == "0000-00-00" or is_null($row['tgl_selesai'])) {
                    echo "-";
                } else {
                    echo date('d', strtotime($row['tgl_selesai'])) . " " . $bln[date('m', strtotime($row['tgl_selesai']))] . " " . date('Y', strtotime($row['tgl_selesai']));
                }
                ?>
            </dd>

            <dt class="col-sm-4">Posisi Berkas</dt>
            <dd class="col-sm-8"><?= $po['posisi']; ?></dd>

            <dt class="col-sm-4">Status</dt>
            <dd class="col-sm-8">
                <?php
                if ($row['status'] == "Belum Diproses") {
                    echo "<span class='badge badge-danger'>" . $row['status'] . "</span>";
                } elseif ($row['status'] == "Dalam Proses") {
                    echo "<span class='badge badge-warning'>" . $row['status'] . "</span>";
                } else {
                    echo "<span class='badge badge-success'>" . $row['status'] . "</span>";
                }
                ?>
            </dd>

            <dt class="col-sm-4">Keterangan</dt>
            <dd class="col-sm-8"><?= $row['keterangan']; ?></dd>
        </dl>

    </div>
</div> -->