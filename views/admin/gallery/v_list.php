<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('gallery/tambah') ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        <div class="panel-body">
        <div class="table-responsive">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gallery</th>
                        <th>Sampul</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($gallery as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_gallery ?></td>
                            <td class="text-center">
                                <img src="<?= base_url('sampul/'.$value->sampul) ?>" width="150px"><br>
                                <i class="fa fa-image"> <?= $value->jml_foto ?> Foto</i><br>
                                <a href="<?= base_url('gallery/tambah_foto/'.$value->id_gallery) ?>" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Foto</a>
                            </td>


                            <td width="80px">
                                <a href="<?= base_url('gallery/ubah/' .$value->id_gallery) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('gallery/hapus/' .$value->id_gallery) ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>