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
        </div>
    </section>