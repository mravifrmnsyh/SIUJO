<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-col">
                        <div class="brand">
                            <img src="assets/img/logo.png" alt="Logo">
                            <h1 style="padding: 15px;"><?= $setting->nama_sekolah ?></h1>
                        </div>
                        <p class="tentang">UPT SD NEGERI 1 SINARBARU adalah salah satu satuan pendidikan dengan jenjang SD di Sinar Baru, Kec. Sukoharjo, Kab. Pringsewu, Lampung. Dalam menjalankan kegiatannya, UPT SD NEGERI 1 SINAR BARU berada di bawah naungan Kementerian
                            Pendidikan dan Kebudayaan.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col">
                        <h2>Link</h2>
                        <ul class="footer-nav">
                            <li><a href="">Profil</a></li>
                            <li><a href="">Visi dan Misi</a></li>
                            <li><a href="">Struktur Organisasi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col">
                        <h2>PPDB</h2>
                        <ul class="footer-nav">
                            <li><a href="">Informasi PPDB</a></li>
                            <li><a href="">Download Formulir Penerimaan Peserta Didik Baru</a></li>
                            <li><a href="">Hasil Seleksi Penerimaan Peserta Didik Baru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container text-center">
                    <h6> ©<script>document.write(new Date().getFullYear());</script> <a href=""><?= $setting->nama_sekolah ?></a></h6>
                </div>
            </div>
    </footer>

    <script src="<?= base_url() ?>template/frontend/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url() ?>template/frontend/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>template/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>template/frontend/assets/js/main.js"></script>

</body>

</html>