<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Profil</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
    

    <!-- Content -->
    <div class="contact_info_container">
		<div class="container">
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Profil SDN </h2><br><br>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="<?= base_url('logo/'.$sekolah->logo) ?>" width="190px" height="250px">
                    <br>
                    <h4><?= $sekolah->kepala_sekolah ?></h4>
                    <h4>NIP. <?= $sekolah->nip ?></h4>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                    <div class="form_title">Nama Sekolah</div>
                        <input type="text" class="comment_input"  value="<?= $sekolah->nama_sekolah ?>" name="nama_sekolah" readonly>
                    </div>

                    <div class="form-group">
                    <div class="form_title">Alamat</div>
                        <input type="text" class="comment_input"  value="<?= $sekolah->alamat ?>" name="alamat" readonly>
                    </div>

                    <div class="form-group">
                    <div class="form_title">Nomor Telpon</div>
                        <input type="text" class="comment_input"  value="<?= $sekolah->no_telpon ?>" name="no_telpon" readonly>
                    </div>
                </div>


                <div class="col-sm-12">
                    <br>
                    <br>
                    <div class="form-group">
                    <div class="form_title"><h4>Sejarah Sekolah</h4></div>
                        <p><?= $sekolah->sejarah ?></p>
                    </div>

                    <div class="form-group">
                    <div class="form_title"><h4>Visi Sekolah</h4></div>
                        <p><?= $sekolah->visi ?></p>
                    </div>

                    <div class="form-group">
                    <div class="form_title"><h4>Misi Sekolah</h4></div>
                        <p><?= $sekolah->misi ?></p>
                    </div>

                    <div class="form-group">
                    <div class="form_title"><h4>Tujuan Sekolah</h4></div>
                        <p><?= $sekolah->tujuan ?></p>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- End Content -->


    <!-- Newsletter -->

<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/front-end/images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
				</div>
			</div>
		</div>
	</div>

    <!-- Footer -->