

	<!-- Contact -->

	<div class="contact">

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Download</h2><br>
                </div>

                    <div class="col-lg-12">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50px">No</th>
                                    <th class="text-center">Keterangan File</th>
                                    <th class="text-center" width="100px">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($download as $key => $value) { ?>

                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $value->ket_file ?></td>
                                    <td class="text-center"><a href="<?= base_url('file/' .$value->file); ?>" class="btn btn-danger btn-sm"><i class="fa fa-download"></i> Download</a></td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
					<!-- Contact Form -->
					
					</div>
				</div>
			</div>
		</div>
	</div>

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