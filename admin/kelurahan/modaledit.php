<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM kelurahan WHERE id_kelurahan = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_kelurahan" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="kelurahan" class="col-sm-4 col-form-label">Nama Kelurahan</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= $row['kelurahan'] ?>" required>
    </div>
</div>