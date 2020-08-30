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

<div class="form-group">
    <label for="ketentuan" class="col-sm-4 col-form-label">Ketentuan</label>
    <div class="col-sm-12">
        <select name="ketentuan" id="ketentuan" class="form-control" required>
            <option value="Wajib" <?php if ($row['ketentuan'] == "Wajib") {
                                        echo "selected";
                                    } ?>>Wajib</option>
            <option value="Tidak Wajib" <?php if ($row['ketentuan'] == "Tidak Wajib") {
                                            echo "selected";
                                        } ?>>Tidak Wajib</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
    <div class="col-sm-12">
        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Boleh Dikosongkan"><?= $row['deskripsi']; ?></textarea>
    </div>
</div>