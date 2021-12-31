    <!-- section hero -->
    <section class="my-banner" id="hero-area">
        <div id="slider-hero-nav">
            <div class="owl-carousel" id="slider-hero">

            <?php foreach ($berita as $key => $value) { ?>
                <div class="slider-item">
                    <div class="slider-item-img">
                        <img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt="">
                    </div>
                </div>
			<?php } ?>
				
            </div>
        </div>
    </section>

    <!-- section sambutan -->
    <!-- <section id="sambutan">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="kata-sambutan">
                        <img src="assets/img/avatar.png" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <h3>SAMBUTAN KEPALA SEKOLAH</h3>
                    <p>Assalamu'alaikum wr. wb. Pada tahun 2045 merupakan target generasi emas yaitu generasi yang saat ini sedang mengenyam pendidikan dan diharapkan akan meraih kesuksesan di tahun 2045. Oleh karena itu perlu adanya usaha mempersiapkan
                        generasi emas tersebut untuk menyelaraskan dengan perkembangan zaman.
                </div>
            </div>
        </div>
    </section> -->

    <!-- section pengumuman -->
    <section id="kegiatan">
        <div class="container">
            <div class="section-title">
                <h2>Pengumuman</h2>
            </div>

            
            <?php  $i=0; foreach ($data as $key => $value) :?>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-12 col-item-kanan">
                        <div style="padding-left:50px" class="section-item-title">
                            <a href="">
                                <h3><?= $value->judul_pengumuman ?></h3>
                            </a>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i><?= $value->tgl?></span>
                            </div>
                            <div class="section-item-body">
                                <p><?= $value->isi_pengumuman?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php $i++; if($i==7){break;}; endforeach;?>

        </div>
    </section>

    <!-- section berita -->
    <section id="berita" class="news">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terbaru</h2>
            </div>
            <div class="section-body">
                <div class="row">

                <?php  $i=0; foreach ($berita as $key => $value) :?>
                    <div class="col-md-4">
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
				<?php $i++; if($i==3){break;}; endforeach;?>

                </div>
            </div>
            <div class="tombol-selengkapnya">
                <a href="<?= base_url('home/berita') ?>" class="btn btn-more">Lihat Berita Lainnya</a>
            </div>
        </div>
    </section>


    <!-- section galeri -->
    <section id="galeri-sekolah" class="galeri-dokumentasi">
        <div class="container">
            <div class="section-title">
                <h2>Dokumentasi</h2>
            </div>

            <div class="section-body">
                <div id="slider-tools-3"></div>
                <div class="owl-carousel" id="galeri-slider">
                   
					<?php foreach ($gallery as $key => $value) { ?>
						<div class="section-item-slider">
							<img class="foto-guru" src="<?= base_url('sampul/'.$value->sampul) ?>" alt="">
							<div class="section-item-caption">
								<a href="<?= base_url('home/detail_gallery/'.$value->id_gallery) ?>">
									<h5><?= $value->nama_gallery ?></h5>
								</a>
							</div>
						</div>

					<?php } ?>

                </div>
            </div>

            <div class="tombol-selengkapnya">
                <a href="<?= base_url('home/gallery') ?>" class="btn btn-more">Lihat Galeri Lainnya</a>
            </div>
        </div>
    </section>

    <!-- section map -->
    <section class="my-banner" id="hero-area">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sdn%201%20sinarbaru&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.whatismyip-address.com"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 100%;
                    }
                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none!important;
                        height: 500px;
                        width: 100%;
                    }
                </style>
            </div>
        </div>
    </section>	