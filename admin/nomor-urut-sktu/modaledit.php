<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM nomor_urut_sktu WHERE id_no = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_no" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="no_urut" class="col-sm-4 col-form-label">Nomor Urut SKTU</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="nomor_urut" id="no_urut" value="<?= $row['nomor_urut'] ?>" minlength="3" maxlength="3" required>
        <small style="font-style: italic; color: red;">*Nomor urut harus 3 digit</small>
    </div>
</div>