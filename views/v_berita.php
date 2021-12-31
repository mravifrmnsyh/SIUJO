
    <section id="berita" class="news">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terbaru</h2>
            </div>
            <div class="section-body">
                <div class="row">

                <?php  $i=0; foreach ($berita as $key => $value) :?>
                    <div style="margin:20px 0;" class="col-md-4">
                        <div class="section-thumbnail">
                            <a href="">
                                <img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt="Gambar Siswa Berqurban">
                            </a>
                            <div class="tanggal">
                                <span class="tgl-2"><?= $value->tgl_berita ?></span>
                            </div>
                        </div>
                        <div class="section-content">
                            <a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>">
                                <h3><?= $value->judul_berita ?></h3>
                            </a>
                            <p><?= substr(strip_tags($value->isi_berita),0,100) ?><a href=""
                                    class="more"> [...]</a></p>
                        </div>
                        <div class="section-meta">
                            <a href=""><i class="fas fa-user"></i><?= $value->nama_user ?></a>
                        </div>
                    </div>
				<?php $i++;  endforeach;?>

                </div>
            </div>
        </div>
    </section>