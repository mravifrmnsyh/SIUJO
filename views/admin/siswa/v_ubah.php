<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Ubah Data
        </div>
        <div class="panel-body">
            <?php

if (isset($error_upload)) {
    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
}

echo form_open_multipart('siswa/ubah/' . $siswa->id_siswa); //karena akan menginsert foto
?>

                <div class="form-group">
                    <label>NIS</label>
                    <input class="form-control" type="text" name="nis" value="<?= $siswa->nis ?>" placeholder="NIS" required>
                </div>

                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input class="form-control" type="text" name="nama_siswa" value="<?= $siswa->nama_siswa ?>" placeholder="Nama Siswa" required>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="<?= $siswa->tempat_lahir ?>" placeholder="Tempat Lahir" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tgl_lahir" id="tanggal"   placeholder="Tanggal Lahir" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" class="form-control">
                            <option value="<?= $siswa->kelas ?>"><?= $siswa->kelas ?></option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                        </select>
                    </div>
                </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Ganti Foto Siswa</label>
                        <input class="form-control" type="file" name="foto_siswa">
                    </div>
                    </div>

                    
                    <div class="form-group">
                        <label>Foto Siswa </label>
                        <img src="<?= base_url('foto_siswa/'.$siswa->foto_siswa) ?>" width="150px" alt="">
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