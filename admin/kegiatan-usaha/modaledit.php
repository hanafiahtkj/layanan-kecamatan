<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM kegiatan_usaha WHERE id_kegiatan = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_kegiatan" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="kegiatan_usaha" class="col-sm-6 col-form-label">Kegiatan Usaha</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" value="<?= $row['kegiatan_usaha'] ?>" required>
    </div>
</div>