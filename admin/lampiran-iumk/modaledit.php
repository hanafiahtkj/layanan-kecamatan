<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM lampiran_iumk WHERE id_lampiran = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_lampiran" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="nama_lampiran" class="col-sm-4 col-form-label">Nama Lampiran</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="nama_lampiran" id="nama_lampiran" value="<?= $row['nama_lampiran'] ?>" required>
    </div>
</div>