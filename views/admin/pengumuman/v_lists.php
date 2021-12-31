<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('pengumuman/tambah') ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah</a>
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
                        <th>Judul Pengumuman</th>
                        <th>Isi Pengumuman</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pengumuman as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_pengumuman ?></td>
                            <td><?= $value->isi_pengumuman ?></td>
                            <td width="100px"><?= $value->tgl ?></td>
                            <td width="80px">
                                <a href="<?= base_url('pengumuman/ubah/' .$value->id_pengumuman) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('pengumuman/hapus/' .$value->id_pengumuman) ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>