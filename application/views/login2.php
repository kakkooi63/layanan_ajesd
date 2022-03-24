<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Serasan Sekate</title>
    <meta name="keywords" content="Aplikasi Pelayanan Publik Pengadilan Agama Sekayu (SERASAN SEKATE)">
    <meta name="description" content="Serasan Sekate merupakan aplikasi berbasis online yang terintegrasi
                            dengan data kependudukan dan pencatatan sipil kabupaten musi
                            banyuasin setelah keluarnya akta cerai. Tujuan aplikasi ini yaitu untuk
                            memudahkan pergantian status perkawinan para pihak yang telah
                            memiliki status berkekuatan hukum tetap yang dibuktikan dengan
                            adanya akta cerai sehingga pada saat pengambilan akta cerai maka
                            para pihak akan mendapatkan KTP, KK dan KIA dengan status baru.">

    <!-- Favicons -->
    <link href="<?= base_url('assets_adit/images/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets_adit/images/head.png') ?>" rel="head">

    <!-- owl carousel css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_adit/css/owl.carousel.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_adit/css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_adit/css/style.css">
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <span></span>
    </div>
    <!-- Preloader End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- <a class="navbar-brand d-block d-sm-none" href="#">Yordan App</a> -->
            <a class="navbar-brand d-lg-none" href="">
                <img src="<?= base_url() ?>assets_adit/images/brand-logo.png" height="50" alt="" href="https://pa-sekayu.go.id/">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-light"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" data-scroll-nav="0" aria-current="page" href="#"><i class="fas fa-home me-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="1" href="#"><i class="fas fa-th-large me-2"></i>Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="2" href="#"><i class="fas fa-th-large me-2"></i>Statistik</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-scroll-nav="4" href="#"><i class="fas fa-th-large me-2"></i>Contact</a>
                    </li>
                </ul>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-1" type="button" data-bs-toggle="modal" data-bs-target="#login-start">Daftar <i class="fas fa-sign-in-alt"></i></button>
                    <button class="btn btn-1" type="button" data-bs-toggle="modal" data-bs-target="#modalForm">Login <i class="fas fa-sign-in-alt"></i></button>


                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Modal Login-->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #c1c3ff;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">
                        <img src="<?= base_url() ?>assets_adit/images/login.png" height="70" alt="" class="center" style="margin-left:200px; margin-right:auto">

                        <!-- <p> Login Akun</p> -->

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php
                if ($this->session->flashdata('notifikasi')) {
                ?>
                    <?php echo $this->session->flashdata('notifikasi'); ?>
                <?php } ?>
                <div class="modal-body">
                    <!-- <p>Enter your username and password to access account.</p> -->
                    <form class="" method="POST" action="<?= base_url('login') ?>">
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="modal-footer d-block">
                            <p class="float-start">Forget Password <a href="#">Klik</a></p>
                            <button type="submit" class="btn btn-warning float-end" name="login" value="login">Submit</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal daftar--->
    <div class="modal fade" id="login-start" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body login">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">

                        <div class="col-lg-6 col-12">

                            <img class="img-fluid login" src="<?php echo base_url(); ?>assets_adit/images/logindis.jpg" alt="daftar">
                        </div>
                        <div class="col-lg-6 col-12">

                            <h3 class="title-login">Daftar Sekarang</h3>
                            <hr class="line-login">
                            <p class="description-login">Selamat datang di Pelayanan Antar Jemput Sidang Difabel</p>
                            <?php
                            if ($this->session->flashdata('notifikasi')) {
                            ?>
                                <?php echo $this->session->flashdata('notifikasi'); ?>
                            <?php } ?>
                            <form action="<?= base_url('login/daftar') ?>" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama anda" required>
                                </div>
                                <label for="">Jenis Kelamin</label>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="jk_user" id="jk_user" value="<?= set_value('jk_user'); ?>">
                                            <option selected>Pilih jenis kelamin Anda</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="">No Handphone</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Isikan No Handphone anda" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Isikan email anda" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Isikan password anda" required>
                                </div>
                                <button type="submit" class="btn btn-primary color login pl-5 pr-5" name="daftar_button" id="daftar_button" value="daftar">Daftar</button>


                            </form>
                            <div class="link login">
                                <p>Sudah punya akun? <a href="<?php echo base_url('daftar'); ?>">Login</a></p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Hero Section Start -->
    <section class="hero d-flex align-items-center" id="hero" data-scroll-index="0">
        <div class="effect-wrap">
            <i class="fas fa-plus effect effect-1"></i>
            <i class="fas fa-plus effect effect-2"></i>
            <i class="fas fa-circle-notch effect effect-3"></i>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center order-lg-last">
                    <div class="hero-img">
                        <img src="<?= base_url() ?>assets_adit/images/hero-img.png" alt="hero image" width="100%">
                    </div>
                </div>
                <div class="col-md-7 order-lg-first">
                    <div class="hero-text">
                        <img class="d-none d-lg-block" src="<?= base_url() ?>assets_adit/images/brand-logo.png" height="160" alt="">
                        <h1>Selamat Datang di Website Serasan Sekate Pengadilan Agama Sekayu</h1>
                        <p>
                            Serasan Sekate merupakan aplikasi berbasis online yang terintegrasi
                            dengan data kependudukan dan pencatatan sipil kabupaten musi
                            banyuasin setelah keluarnya akta cerai. Tujuan aplikasi ini yaitu untuk
                            memudahkan pergantian status perkawinan para pihak yang telah
                            memiliki status berkekuatan hukum tetap yang dibuktikan dengan
                            adanya akta cerai sehingga pada saat pengambilan akta cerai maka
                            para pihak akan mendapatkan KTP, KK dan KIA dengan status baru.

                        </p>
                        <div class="hero-btn">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalsambutan" class="btn btn-hero">Sambutan Ketua</a>
                            <button type="button" class="btn btn-hero video-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Modal Sambutan-->
    <div class="modal fade" id="modalsambutan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><img src="<?= base_url() ?>assets_adit/images/ketua.png" alt="hero image" width="100%"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <h4>Assalamualaikum Wr.Wb

                    </h4>
                    <p></br>
                        Alhamdulillah Segala Puji Bagi Allah SWT Tuhan
                        yang Maha Esa atas semua limpahan rahmat dan karunia-Nya, sehingga kami dapat memberikan
                        layanan berbasis teknologi yang bekerjasama dengan Dinas Kependudukan dan Catatan Sipil
                        Kabupaten Musi Banyuasin dengan tujuan dan harapan dapat mempermudah masyarakat Kabupaten
                        Musi Banyuasin dalam pergantian status setelah keluarnya akta cerai. </br>
                        Ini merupakan komitmen dan tekat kami dalam mewujudkan pelaksanaan lembaga peradilan agama
                        yang bersih dan bebas dari korupsi serta penyelenggaraan birokrasi yang bersih dan melayani dengan sepenuh hati.
                        </br>
                        </br>
                        <strong> Wassalamualaikum Wr.Wb</strong>
                    </p>


                </div>
            </div>
        </div>
    </div>


    <!-- Socmed Section Start -->
    <section class="socmed">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3"><a href="https://www.facebook.com/fb.pasekayu" target="_blank"><i class="fab fa-facebook-f"></a></i>Pengadilan Agama Sekayu</div>
                <div class="col-6 col-md-3"><a href="mailto:pa.sekayu@gmail.com?Subject=Assalamualaikum" target="_blank"><i class="fa fa-envelope"></a></i>pa.sekayu@gmail.com</div>
                <div class="col-6 col-md-3"><a href="https://www.instagram.com/pasekayu.go.id/" target="_blank"><i class="fab fa-instagram"></a></i>pasekayu</div>
                <div class="col-6 col-md-3"><a href="https://www.youtube.com/channel/UC1wQM6yAfBLOsCziKzQc5yA" target="_blank"><i class="fab fa-youtube"></a></i>PA Sekayu</div>
            </div>
        </div>
    </section>
    <!-- Socmed Section End -->

    <!-- Features Section Start -->
    <section class="features section-padding" id="features" data-scroll-index="1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Galeri <span>Kegiatan</span></h2>
                    </div>
                </div>
            </div>

            <div class="row d-flex">

                <div class="owl-carousel features-carousel">
                    <?php foreach ($slide as $v => $i) : ?>
                        <div class="feature-item">
                            <div class="screenshot-item">
                                <img src="<?= base_url('uploads/slide/' . $i->slide_gambar) ?>" class="" alt="<?= $i->slide_judul ?>" height="250px">
                            </div>
                            <h3><?= $i->slide_judul ?></h3>
                            <p></p>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>
    <!-- Features Section End -->


    <!-- How It Works Section Start -->
    <section class="how-it-works section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>STATI <span>STIK</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works-item line-right">
                        <div class="step"><?= $sum[0]->belum_dilihat + $sum[0]->dilihat; ?></div>
                        <h3>Data Permohonan</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works-item line-right">
                        <div class="step"><?= $sum[0]->diproses; ?></div>
                        <h3>Proses Cetak KTP</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works-item line-right">
                        <div class="step"><?= $sum[0]->selesai; ?></div>
                        <h3>Selesai Cetak KTP</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works-item">
                        <div class="step"><?= $sum[0]->diterima; ?></div>
                        <h3>KTP Yang Diterima Para Pihak</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->


    <!-- Contact Section Start -->
    <section class="contact section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Hubungi <span>Kami</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info">
                        <h3>Silakan Hubungi Kami</h3>
                        <div class="contact-info-item">
                            <a href="https://goo.gl/maps/EhQYoyhJFDVTMonAA"><i class="fas fa-location-arrow"></i></a>
                            <h4>Pengadilan Agama Sekayu</h4>
                            <p>Jalan Merdeka Lingkungan I Nomor 497 </p>
                        </div>
                        <div class="contact-info-item">
                            <a href="mailto:pa.sekayu@gmail.com?Subject=Assalamualaikum" target="_blank"><i class="fas fa-envelope"></i></a>
                            <h4>Email</h4>
                            <p>pa.sekayu@gmail.com</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-phone"></i>
                            <h4>Telepon</h4>
                            <p>(0714) 321170 </p>
                        </div>
                        <div class="contact-info-item">
                            <a href="https://api.whatsapp.com/send?phone=628117300357&amp;text=Hallo%20admin%20"> <i class="fab fa-whatsapp"></i></a>
                            <h4>Whatsapp</h4>
                            <p>0811 7300357 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group">
                                        <input type="text" placeholder="Your Phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group">
                                        <input type="text" placeholder="Subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group">
                                        <textarea placeholder="Your Message" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-2">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </form>
            </div>

        </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="footer">
        <!-- <div class="container"> -->
        <!-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>about us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>company</h3>
                        <ul>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">terms & condition</a></li>
                            <li><a href="#">latest blog</a></li>
                            <li><a href="#">app services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>quick links</h3>
                        <ul>
                            <li><a href="#hero">home</a></li>
                            <li><a href="#features">features</a></li>
                            <li><a href="#screenshots">screenshots</a></li>
                            <li><a href="#pricing">pricing</a></li>
                            <li><a href="#testimonials">testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>social pages</h3>
                        <ul>
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">instagram</a></li>
                            <li><a href="#">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-12"> -->
        <p class="copyright-text">&copy;2021 IT PA SEKAYU</p>
        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->
    </footer>
    <!-- Footer End -->

    <!-- Toggle Theme Start -->
    <div class="toggle-theme">
        <i class="fas"></i>
    </div>
    <!-- Toggle Theme End -->

    <!-- Video Popup Start -->
    <div class="video-popup">
        <div class="video-popup-inner">
            <div class="iframe-box">
                <i class="fas fa-times video-popup-close"></i>
                <iframe id="player-1" src="https://www.youtube.com/embed/JyT-v4TbvKk" title="Awesome Landing Page using HTML5, CSS3, and Bootstrap5" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- Video Popup End -->


    </div>


    </script>
    <!-- jquery js -->
    <script src="<?= base_url() ?>assets_adit/js/jquery.min.js"></script>
    <!-- owl carousel js -->
    <script src="<?= base_url() ?>assets_adit/js/owl.carousel.min.js"></script>
    <!-- bootstrap bundle with popper -->
    <script src="<?= base_url() ?>assets_adit/js/bootstrap.bundle.min.js"></script>
    <!-- ScrollIt js -->
    <script src="<?= base_url() ?>assets_adit/js/scrollIt.min.js"></script>
    <!-- main js -->
    <script src="<?= base_url() ?>assets_adit/js/main.js"></script>


</body>

</html>