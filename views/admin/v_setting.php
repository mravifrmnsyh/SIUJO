<?php 
echo form_open_multipart('admin/setting');

if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>
<div class="col-sm-4">
    <label for="">Foto Kepala Sekolah</label><br>
    <img src="<?= base_url('logo/'.$setting->logo) ?>" width="150px" height="200px">
    <br>

    <div class="form-group">
    <br>
        <label>Ganti Foto</label>
        <input class="form-control" type="file" name="logo">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Nama Sekolah</label>
        <input class="form-control" type="tyoe" value="<?= $setting->nama_sekolah ?>" name="nama_sekolah">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input class="form-control" type="text" value="<?= $setting->alamat ?>" name="alamat">
    </div>

    <div class="form-group">
        <label>Nomor Telpon</label>
        <input class="form-control" type="text" value="<?= $setting->no_telpon ?>" name="no_telpon">
    </div>

    <div class="form-group">
        <label>Kepala Sekolah</label>
        <input class="form-control" type="text" value="<?= $setting->kepala_sekolah ?>" name="kepala_sekolah">
    </div>

    <div class="form-group">
        <label>NIP</label>
        <input class="form-control" type="text" value="<?= $setting->nip ?>" name="nip">
    </div>
</div>

<div class="col-sm-12">
    <div class="form-group">
        <label>Sejarah</label>
        <textarea class="form-control" name="sejarah" id=""><?= $setting->sejarah ?></textarea>
    </div>

    <div class="form-group">
        <label>Visi</label>
        <textarea class="form-control" name="visi" id="" rows="5"><?= $setting->visi ?></textarea>
    </div>

    <div class="form-group">
        <label>Misi</label>
        <textarea class="form-control" name="misi" id="" rows="5"><?= $setting->misi ?></textarea>
    </div>

    <div class="form-group">
        <label>Tujuan</label>
        <textarea class="form-control" name="tujuan" id="" rows="5"><?= $setting->tujuan ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info btn-sm">Update</button>
    </div>
</div>

<?php echo form_close(); ?>