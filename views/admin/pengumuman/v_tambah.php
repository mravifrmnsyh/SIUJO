<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Data
        </div>
        <div class="panel-body">
            <?php
echo form_open_multipart('pengumuman/tambah');
?>

                <div class="form-group">
                    <label>Judul Pengumuman</label>
                    <input class="form-control" type="text" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
                </div>

                <div class="form-group">
                    <label>Isi Pengumuman</label>
                    <textarea class="form-control" name="isi_pengumuman" id="" cols="30" rows="10"placeholder="Isi Pengumuman" required></textarea>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>