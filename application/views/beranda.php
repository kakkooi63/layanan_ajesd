<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- modal  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Favicons -->
    <link href="<?= base_url('assets_adit/images/favicon.png') ?>" rel="icon">
    <title>Gratis Antar Jemput</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url() ?>hospital_website/css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-car"></i> AJESD </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">layanan</a>
            <a href="#about">about</a>
            <a href="#book">daftar</a>
            <a data-toggle="modal" href="#myModal">login</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    <?php
    if ($this->session->flashdata('notifikasi')) {
    ?>
        <?php echo $this->session->flashdata('notifikasi'); ?>
    <?php } ?>
    <!-- Modal login -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Login</h4>
                </div>

                <div class="modal-body">
                    <form class="" method="POST" action="<?= base_url('login') ?>">
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="text" placeholder="Email" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <br>
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
                <div class="modal-footer">

                </div>
            </div>

        </div>
    </div>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="<?= base_url() ?>hospital_website/image/car.png" alt="">
        </div>

        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <p>Pengadilan Agama Sekayu memberikan Layanan Gratis Antar Jemput Bagi Penyandang Disabilitas untuk <br>1. Pendaftaran Perkara <br>2. Persidangan <br>3. Pengambilan Produk Pengadilan</p>
            <a href="#book" class="btn"> Daftar Sekarang <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>



    <section class="services" id="services">

        <h1 class="heading"> Layanan <span>Kami</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-edit"></i>
                <h3>Gratis Antar Jemput Pendaftaran Perkara</h3>
                <p style="color: white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-university"></i>
                <h3>Gratis Antar Jemput Persidangan</h3>
                <p style="color: white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-shopping-cart"></i>
                <h3>Gratis Antar Jemput Pengambilan Produk</h3>
                <p style="color: white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
                <a href="#" class="btn"> Selengkapnya <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="<?= base_url() ?>hospital_website/image/about.png" alt="">
            </div>

            <div class="content">
                <!-- <h3>we care about you</h3> -->
                <p>Pengadilan Agama Sekayu dibawah Direktorat Jenderal Badan Peradilan Agama telah memberlakukan standar pelayanan bagi penyandang disabilitas di lingkungan peradilan agama dengan memiliki layanan untuk disabilitas seperti kursi roda, guiding block, ramp (Jalur khusus untuk penyandang difabel), kursi tunggu disabilitas, area parkir khusus disabilitas, handril, kruk, walker, tongkat, alat bantu dengar, buku braille, toilet khusus difabel dan inovasi andalan yaitu pelayanan antar jemput sidang bagi penyandang difabel (AJESD) yang dilaunching pada akhir tahun 2020 dan di implementasikan mulai tahun 2021. </p>
                <p>untuk mengoptimalkan inovasi yang telah berjalan tersebut maka diciptakan terobosan yang baru berupa aplikasi berbasis online yang memudahkan masyarakat disabilitas dalam mendapatkan layanan gratis antar jemput</p>
                <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- doctors section starts  -->

    <!-- doctors section ends -->

    <!-- booking section starts   -->

    <section class="book" id="book">

        <h1 class="heading"> <span>Daftar</span> Sekarang </h1>

        <div class="row">

            <div class="image">
                <img src="<?= base_url() ?>hospital_website/image/two.png" alt="">
            </div>

            <?php
            if ($this->session->flashdata('notifikasi')) {
            ?>
                <?php echo $this->session->flashdata('notifikasi'); ?>
            <?php } ?>
            <?php echo $this->session->flashdata('notifikasi'); ?>
            <form action="<?= base_url('login/daftar') ?>" method="POST" enctype="multipart/form-data">
                <h3>Daftar Gratis</h3>
                <input type="text" placeholder="Nama Lengkap" class="box" id="nama" name="nama" required>
                <div class="form-group">
                    <select class="box" name="jk_user" id="jk_user" value="<?= set_value('jk_user'); ?>" required>
                        <option selected>Pilih jenis kelamin Anda</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <input type="number" placeholder="No Handphone" class="box" id="no_hp" name="no_hp" required>
                <input type="email" placeholder="Email" class="box" id="email" name="email" required>
                <input type="password" placeholder="Password" class="box" id="password" name="password" class="form-control" required>
                <input type="submit" name="daftar_button" id="daftar_button" value="daftar" class="btn">
            </form>

        </div>

    </section>





    <!-- booking section ends -->

    <!-- review section starts  -->

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#service"> <i class="fas fa-chevron-right"></i> layanan </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#book"> <i class="fas fa-chevron-right"></i> daftar </a>
                <a data-toggle="modal" href="#myModal"> <i class="fas fa-chevron-right"></i> login </a>

            </div>

            <!-- <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            </div> -->

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> (0714) 321170 </a>
                <a href="https://api.whatsapp.com/send?phone=628117300357&text=Hallo%20admin%20"> <i class="fas fa-phone"></i> 0811 7300357 </a>
                <a href="pa.sekayu@gmail.com"> <i class="fas fa-envelope"></i> pa.sekayu@gmail.com </a>
                <a href="https://goo.gl/maps/EhQYoyhJFDVTMonAA"> <i class="fas fa-map-marker-alt"></i> Pengadilan Agama Sekayu <br> Jalan Merdeka Lingkungan I Nomor 497</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/fb.pasekayu"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.youtube.com/channel/UC1wQM6yAfBLOsCziKzQc5yA"> <i class="fab fa-youtube"></i> youtube </a>
                <a href="https://www.instagram.com/pasekayu.go.id/"> <i class="fab fa-instagram"></i> instagram </a>
            </div>

        </div>

        <div class="credit"> created by <span>IT PA Sekayu</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->


















    <!-- custom js file link  -->
    <script src="<?= base_url() ?>hospital_website/js/script.js"></script>

</body>

</html>