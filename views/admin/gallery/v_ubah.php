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

echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

echo form_open_multipart('gallery/ubah/' . $gallery->id_gallery); //karena akan menginsert foto

?>
                    
                    <div class="form-group">
                        <label>Nama Gallery</label>
                        <input class="form-control" value="<?= $gallery->nama_gallery ?>" type="text" name="nama_gallery" placeholder="Nama Gallery" required>
                    </div>

                    <div class="form-group">
                        <label>Foto Sampul</label><br>
                        <img src="<?= base_url('sampul/'.$gallery->sampul) ?>" width="300px">
                    </div>

                    <div class="form-group">
                        <label>Ganti Sampul</label>
                        <input class="form-control" type="file" name="sampul">
                    </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>