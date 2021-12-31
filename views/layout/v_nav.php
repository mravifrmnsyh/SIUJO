	<header>
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="brand">
                        <img src="<?= $setting->foto_kepsek ?>" alt="">
                        <div class="brand-name">
                            <h1><?= $setting->nama_sekolah ?></h1>
                            <h3>Motto Sekolah</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="brand-right">
                    <ul class="sosmed">
                        <li><a href=""><i class="fab fa-2x fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-2x fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-2x fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-2x fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- section menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
        <div class="container">
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('') ?>">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Profil</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Visi dan Misi</a>
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Peta Sekolah</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Berita</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Berita Sekolah</a>
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Pengumuman</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Sarana & Prasarana</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Sarana Infrastuktur</a>
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Sarana Pembelajaran</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/') ?>">Prestasi</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">PPDB</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Informasi PPDB</a>
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Download Formulir Penerimaan Peserta Didik Baru</a>
                            <a class="dropdown-item" href="<?= base_url('home/') ?>">Hasil Seleksi Penerimaan Peserta Didik Baru</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/') ?>">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>