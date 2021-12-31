<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('berita/tambah') ?>" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah</a>
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
                        <th>Judul Berita</th>
                        <th>Slug Berita</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Nama User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($berita as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->judul_berita ?></td>
                            <td><?= $value->slug_berita ?></td>
                            <td width="150px"><?= $value->tgl_berita ?></td>
                            <td><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt="" width="150px"></td>
                            <td width="100px"><?= $value->nama_user ?></td>
                            <td width="80px">
                                <a href="<?= base_url('berita/ubah/' .$value->id_berita) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url('berita/hapus/' .$value->id_berita) ?>" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>