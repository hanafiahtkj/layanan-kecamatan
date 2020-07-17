<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM role_user WHERE id_role = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_role" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="role" class="col-sm-4 col-form-label">Role</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="role" id="role" value="<?= $row['role'] ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?= $row['keterangan'] ?>" required>
    </div>
</div>