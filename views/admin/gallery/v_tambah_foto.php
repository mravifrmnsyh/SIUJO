<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Foto Gallery
        </div>
        <div class="panel-body">
            <?php

if (isset($error_upload)) {
    echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
}

echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}

echo form_open_multipart('gallery/tambah_foto/' . $gallery->id_gallery); //karena akan menginsert foto

?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Keterangan Foto</label>
                            <input class="form-control" type="text" name="ket_foto" placeholder="Keterangan Foto" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto</label>
                            <input class="form-control" type="file" name="foto" required>
                        </div>
                    </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('gallery') ?>" class="btn btn-warning">Kembali</a>
                </div>
            <?php echo form_close(); ?>

            <hr>

            <?php foreach($foto as $key => $value) { ?>
                <div class="col-sm-3 text-center">
                    <label><?= $value->ket_foto ?></label>
                    <br>
                    <img src="<?= base_url('foto/'.$value->foto) ?>" width="150px" height="150px">
                    <br>
                    <a href="<?= base_url('gallery/hapus_foto/'.$value->id_gallery.'/'.$value->id_foto) ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash"></i></a>
                </div>
            <?php } ?>
            
        </div>
    </div>