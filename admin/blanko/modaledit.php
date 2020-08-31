<?php
include '../../config/config.php';
$id   = encryptor('decrypt', $_POST['id']);
$data = $koneksi->query("SELECT * FROM blanko WHERE id_blanko = '$id'");
$row  = $data->fetch_array();
?>

<input type="text" name="id_blanko" value="<?= $id ?>" hidden>

<div class="form-group">
    <label for="nama_lampiran" class="col-sm-4 col-form-label">Nama Blanko</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="nama_blanko" id="nama_blanko" required value="<?= $row['nama_blanko']; ?>">
    </div>
</div>

<div class="form-group">
    <label for="nama_lampiran" class="col-sm-4 col-form-label">File</label>
    <div class="col-sm-12">
        <div class="custom-file">
            <input type="file" class="custom-file-input val_file" name="file">
            <label class="custom-file-label"><i>Upload File Dengan Format PDF</i></label>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
    <div class="col-sm-12">
        <textarea class="form-control alamat" name="keterangan" id="keterangan" rows="3" required><?= $row['keterangan']; ?></textarea>
    </div>
</div>

<script>
    $(function() {
        // EVENT ON ENTER IN TEXT AREA
        $('.alamat').on('keydown', function(e) {
            if (e.keyCode == 13 && !e.shiftKey) {
                e.preventDefault();
                return false;
            }
        });

        // VALIDASI FILE UPLOAD
        $('.val_file').on('change', function() {
            var nf = this.files[0].name;
            var ext = this.files[0].type;

            // VALIDASI UKURAN FILE TIDAK LEBIH DARI 1 MB
            if (this.files[0].size > 1 * 1024 * 1024) {
                setTimeout(function() {
                    swal({
                        title: 'File ' + nf + ' Terlalu Besar !',
                        text: 'Silahkan Upload File Dengan Ukuran Maksimal 1 Mb',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });
                }, 10);
                this.value = "";
            }

            // VALIDAST EKSTENSION FILE UPLOAD
            if (ext != "application/pdf") {
                setTimeout(function() {
                    swal({
                        title: 'Format File ' + nf + ' Tidak Diperbolehkan !',
                        text: 'Silahkan Upload File Dokumen Dengan Format PDF',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });
                }, 10);
                this.value = "";
            }
        });

    });
</script>