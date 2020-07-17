<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM camat WHERE id_camat = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_camat" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="nama_camat" class="col-sm-4 col-form-label">Nama Camat</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="nama_camat" id="nama_camat" value="<?= $row['nama_camat'] ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="nip" class="col-sm-4 col-form-label">NIP</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="nip" id="nip" value="<?= $row['nip'] ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $row['jabatan'] ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="periode_awal" class="col-sm-6 col-form-label">Periode Awal Jabatan</label>
    <div class="col-sm-12">
        <input type="date" class="form-control" name="periode_awal" id="periode_awal" value="<?= $row['periode_awal_jabatan'] ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="periode_akhir" class="col-sm-6 col-form-label">Periode Akhir Jabatan</label>
    <div class="col-sm-12">
        <input type="date" class="form-control" name="periode_akhir" id="periode_akhir" value="<?= $row['periode_akhir_jabatan'] ?>" required>
    </div>
</div>