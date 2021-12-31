<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('download/tambah') ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah</a>
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
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($download as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->ket_file ?></td>
                            <td><?= $value->file ?></td>
                            </td>


                            <td width="80px">
                                <a href="<?= base_url('download/ubah/' .$value->id_file) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('download/hapus/' .$value->id_file) ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>