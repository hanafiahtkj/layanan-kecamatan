<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM legalisasi_proposal WHERE id_proposal = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_proposal" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="tgl_permohonan" class="col-sm-6 col-form-label">Tanggal Permohonan</label>
    <div class="col-sm-12">
        <input type="date" class="form-control" name="tgl_permohonan" id="tgl_permohonan" required value="<?= $row['tgl_permohonan'] ?>">
    </div>
</div>

<div class="form-group">
    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $row['nama'] ?>">
    </div>
</div>

<div class="form-group">
    <label for="judul_proposal" class="col-sm-4 col-form-label">Judul Proposal</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="judul_proposal" id="judul_proposal" required value="<?= $row['judul_proposal'] ?>">
    </div>
</div>

<div class="form-group">
    <label for="posisi" class="col-sm-4 col-form-label">Posisi</label>
    <div class="col-sm-12">
        <select name="id_posisi" id="posisi" class="form-control" required>
            <?php
            $posisi = $koneksi->query("SELECT * FROM posisi_berkas ORDER BY id_posisi ASC");
            foreach ($posisi as $po) {
            ?>
                <option value="<?= $po['id_posisi'] ?>" <?php if ($row['id_posisi'] == $po['id_posisi']) {
                                                            echo "selected";
                                                        } ?>><?= $po['posisi'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="status" class="col-sm-4 col-form-label">Status</label>
    <div class="col-sm-12">
        <select name="status" id="" class="form-control status" data-placeholder="Pilih">
            <option value="Belum Diproses" <?php if ($row['status'] == "Belum Diproses") {
                                                echo "selected";
                                            } ?>>Belum Diproses</option>
            <option value="Dalam Proses" <?php if ($row['status'] == "Dalam Proses") {
                                                echo "selected";
                                            } ?>>Dalam Proses</option>
            <option value="Selesai" <?php if ($row['status'] == "Selesai") {
                                        echo "selected";
                                    } ?>>Selesai</option>
        </select>
    </div>
</div>

<?php if ($row['tgl_selesai'] == "0000-00-00" or is_null($row['tgl_selesai'])) { ?>
    <div class="form-group row tglselesai" id="tglselesai" style="display: none;">
    </div>
<?php } else { ?>
    <div class="form-group">
        <label for="tgl_selesai" class="col-sm-4 col-form-label">Tanggal Selesai</label>
        <div class="col-sm-12">
            <input type="date" class="form-control" name="tgl_selesai" value="<?= $row['tgl_selesai']; ?>" required>
        </div>
    </div>
<?php } ?>

<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    $('.status').on('change', function() {
        if (this.value == "Selesai") {
            $(".tglselesai").slideDown("fast");
            $(".tglselesai").append('<label for="tgl_selesai" class=col-sm-4 col-form-label">Tanggal Selesai</label><div class="col-sm-12"><input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" required></div>');
        } else {
            $(".tglselesai").slideUp("fast");
            $(".tglselesai").empty();
        }
    });
</script>