<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?> | SERASAN SEKATE</title>
  <link rel="shortcut icon" href="<?= base_url('assets/logo/sekayu.png') ?>" />
  <link rel="stylesheet" href="<?= assets_backend() ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= assets_backend() ?>css/typography.css">
  <link rel="stylesheet" href="<?= assets_backend() ?>css/style.css">
  <link rel="stylesheet" href="<?= assets_backend() ?>css/responsive.css">
  <link rel="stylesheet" href="<?= assets_backend() ?>css/mycustom.css">
</head>

<body>
  <div id="loading">
    <div id="loading-center">
      <div class="loader">
        <div class="cube">
          <div class="sides">
            <div class="top"></div>
            <div class="right"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="front"></div>
            <div class="back"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="popup" class="popup panel panel-primary">
    <div class="modal-content">
      <img src="<?= base_url('assets/logo/BANNER_KORUPSI.jpg') ?>" alt="popup">
      <button type="button" class="close" id="close" aria-label="Close">
        <span aria-hidden="true">&times;</span> Close
      </button>
    </div>
  </div>

  <section class="sign-in-page bg-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto pt-5 align-self-center">
          <div class="row">

            <div class="col-md-12">
              <ul class="nav nav-pills justify-content-end" id="myTab-2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">Login</a>
                </li>
              </ul>
            </div>
            <div class="col-md-12 text-center mt-5">
              <img src="<?= base_url('assets/logo/MUBA.png') ?>" height="90px">
              <img src="<?= base_url('assets/logo/sekayu.png') ?>" height="100px">

              <h3><span style='font-family: "Courier New", Courier, monospace;color: #367ebd;font-weight: bold;'>
                SERASAN SEKATE<br>
                SISTEM INTEGRASI DATA KEPENDUDUKAN SETELAH KELUARNYA AKTA CERAI</span></h3>
            </div>
          </div>
          
          <div class="tab-content" id="myTabContent-3">
            <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">


              <div class="bd-example pt-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php foreach ($slide as $v => $i) : ?>
                      <li data-target="#carouselExampleCaptions" data-slide-to="<?= $v; ?>" class="<?= ($v == 0) ? 'active' : '' ?>"></li>
                    <?php endforeach; ?>
                  </ol>
                  <div class="carousel-inner">
                    <?php foreach ($slide as $v => $i) : ?>
                      <div class="carousel-item <?= ($v == 0) ? 'active' : '' ?>">
                        <img src="<?= base_url('uploads/slide/' . $i->slide_gambar) ?>" class="d-block w-100" alt="<?= $i->slide_judul ?>" height="450px">
                        <div class="carousel-caption d-none d-md-block" style="background: #1d1b1b9e">
                          <h5 class="text-white"><?= $i->slide_judul ?></h5>
                          <p><?= $i->slide_isi ?></p>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>



              <div id="content-page" class="content-page" style="margin-left: 0px;">
                <div class="container">
                  <div class="row row-eq-height text-center">
                    <div class="col-lg-3 col-md-6">
                      <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                        <div class="iq-card-body">
                          <div class="row">
                            <div class="col-xs-3 mx-auto mb-2  justify-content-between">
                              <div class="icon iq-icon-box rounded-circle iq-bg-info ">
                                <i class="fa fa-id-card"></i>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                              <h6 class="card-title text-uppercase text-secondary mb-0">DATA AKTA CERAI</h6>
                              <span class="h2 text-dark mb-0 "><?= $sum[0]->belum_dilihat + $sum[0]->dilihat; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                      <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                        <div class="iq-card-body">
                          <div class="row">
                            <div class="col-xs-6 mx-auto mb-2  justify-content-between">
                              <div class="icon iq-icon-box rounded-circle iq-bg-warning ">
                                <i class="ri-timer-2-line"></i>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                              <h6 class="card-title text-uppercase text-secondary mb-0">PROSES CETAK KTP</h6>
                              <span class="h2 text-dark mb-0 "><?= $sum[0]->diproses; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                      <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                        <div class="iq-card-body">
                          <div class="row">
                            <div class="col-xs-6 mx-auto mb-2  justify-content-between">
                              <div class="icon iq-icon-box rounded-circle iq-bg-success ">
                                <i class="fa fa-check-square-o"></i>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                              <h6 class="card-title text-uppercase text-secondary mb-0">SELESAI CETAK KTP</h6>
                              <span class="h2 text-dark mb-0 "><?= $sum[0]->selesai; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                      <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                        <div class="iq-card-body">
                          <div class="row">
                            <div class="col-xs-6 mx-auto mb-2  justify-content-between">
                              <div class="icon iq-icon-box rounded-circle iq-bg-primary ">
                                <i class="fa fa-inbox"></i>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                              <h6 class="card-title text-uppercase text-secondary mb-0">KTP YANG DITERIMA</h6>
                              <span class="h2 text-dark mb-0 "><?= $sum[0]->diterima; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                        <div class="iq-card-body">
                          <div class="row">
                            <div class="col-xs-3 mx-auto mb-2  justify-content-between">
                              <div class="icon iq-icon-box rounded-circle iq-bg-danger ">
                                <i class="fa fa-retweet"></i>
                              </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                              <h6 class="card-title text-uppercase text-secondary mb-0">KTP YANG DIKEMBALIKAN</h6>
                              <span class="h2 text-dark mb-0 "><?= $sum[0]->dikembalikan; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                      <div class="iq-card iq-card-block iq-card-stretch">
                        <div class="iq-card-header">
                          <div class="iq-header-title pt-4 text-center">
                            <h4 class="card-title">Hubungi Kami</h4>
                            <p>Perlu bantuan? Silahkan hubungi kami, baik via Telepon/Email atau silahkan kirim pesan pada kami</p>
                          </div>
                        </div>
                        <div class="iq-card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <p>Silahkan kirim pesan melalui form dibawah ini</p>
                              <div class="row">
                                <div class="form-group  col-md-6">
                                  <input type="text" placeholder="Nama" name="nama" class="form-control">
                                </div>
                                <div class="form-group  col-md-6">
                                  <input type="email" placeholder="Email" name="email" class="form-control">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group  col-md-12">
                                  <input type="text" placeholder="Subject" name="judul" class="form-control">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group  col-md-12">
                                  <textarea class="form-control" placeholder="Pesan Anda" name="isi"></textarea>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="row mb-3">
                                <div class="col-md-12 text-center">
                                  <div id="map-canvas"></div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4 text-center">
                                  <div class="col-lg-4 col-md-6 mx-auto">
                                    <div class="icon iq-icon-box rounded-circle iq-bg-primary ">
                                      <i class="fa fa-map-marker"></i>
                                    </div>
                                  </div>
                                  <div class="media-support-info">
                                    <h6 class="pt-2">Alamat</h6>
                                    <p class="mb-0">Jl. Merdeka LK. I No.497, Serasan Jaya, Sekayu, Kabupaten Musi Banyuasin, Sumatera Selatan 30711</p>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="col-lg-4 col-md-6 mx-auto">
                                    <div class="icon iq-icon-box rounded-circle iq-bg-primary ">
                                      <i class="fa fa-envelope"></i>
                                    </div>
                                  </div>
                                  <div class="media-support-info">
                                    <h6 class="pt-2">Email</h6>
                                    <p class="mb-0">pa.sekayu@gmail.com</p>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="col-lg-4 col-md-6 mx-auto">
                                    <div class="icon iq-icon-box rounded-circle iq-bg-primary ">
                                      <i class="fa fa-phone"></i>
                                    </div>
                                  </div>
                                  <div class="media-support-info">
                                    <h6 class="pt-2">Call</h6>
                                    <p class="mb-0">(0714) 321170</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
              <div class="row pt-5">
                <div class="col-md-12">
                  <h4 class="text-center"><b>ABOUT US</b></h4>

                  <p>Sistem informasi Akta Cerai Pengadilan Agama Sekayu yang terintegrasi dengan Dinas Pencatatan Sipil Kabupaten Musi Banyuasin berfungsi untuk memudahkan perubahan data kependudukan berupa status perkawinan,berdasarkan dokumen pendukung dari Pengadilan Agama Sekayu yaitu akta cerai. sehingga para pencari keadilan nantinya tidak akan kesulitan lagi untuk merubah data di Kartu Tanda Penduduk dan Kartu Keluarga karena telah terintegrasi dengan dukcapil kabupaten musi banyuasin </p>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
              <div class="row pt-5 no-gutters">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto align-self-center">
                  <div class="sign-in-from ">
                    <p>Enter your username and password to access account.</p>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <form class="mt-4" method="POST" action="<?= base_url('login') ?>">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="d-inline-block w-100">
                        <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                        </div>
                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                        <a href="#" class="float-right">Forgot password?</a>
                        <br>
                        <button type="submit" class="btn btn-primary float-right col-md-12" name="login" value="login">Login</button>
                      </div>
                      <div class="sign-info">
                        <span class="dark-color d-inline-block line-height-2">&copy; 2021</span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>





  <script src="<?= assets_backend() ?>js/jquery.min.js"></script>
  <script src="<?= assets_backend() ?>js/popper.min.js"></script>
  <script src="<?= assets_backend() ?>js/bootstrap.min.js"></script>
  <script src="<?= assets_backend() ?>js/jquery.appear.js"></script>
  <script src="<?= assets_backend() ?>js/countdown.min.js"></script>
  <script src="<?= assets_backend() ?>js/waypoints.min.js"></script>
  <script src="<?= assets_backend() ?>js/jquery.counterup.min.js"></script>
  <script src="<?= assets_backend() ?>js/wow.min.js"></script>
  <script src="<?= assets_backend() ?>js/apexcharts.js"></script>
  <script src="<?= assets_backend() ?>js/slick.min.js"></script>
  <script src="<?= assets_backend() ?>js/select2.min.js"></script>
  <script src="<?= assets_backend() ?>js/owl.carousel.min.js"></script>
  <script src="<?= assets_backend() ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?= assets_backend() ?>js/smooth-scrollbar.js"></script>
  <script src="<?= assets_backend() ?>js/chart-custom.js"></script>
  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDfnrckTQdIILB4S3j56dDR_GFc352dhlU"></script>

  <script src="<?= assets_backend() ?>js/custom.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#popup").hide().fadeIn(1000);
      $("#close").on("click", function(e) {
        e.preventDefault();
        $("#popup").fadeOut(500);
      });
    });
  </script>

  <script type="text/javascript">
    function initialize() {
      var myLatLng = new google.maps.LatLng(-2.8955969, 103.8482268),
        myOptions = {
          zoom: 500,
          center: myLatLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
        marker = new google.maps.Marker({
          position: myLatLng,
          map: map
        });
      marker.setMap(map);
      moveMarker(map, marker);
    }

    function moveMarker(map, marker) {
      setTimeout(function() {
        marker.setPosition(new google.maps.LatLng(-2.8955969, 103.8482268));
        map.panTo(new google.maps.LatLng(-2.8955969, 103.8482268));

      }, 1500);

    };
    initialize();
  </script>
</body>

</html>