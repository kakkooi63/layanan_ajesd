<div class="iq-top-navbar">
  <div class="iq-navbar-custom">
    <div class="iq-sidebar-logo">
      <div class="top-logo">
        <a href="<?= base_url() ?>" class="logo">
          <img src="<?= assets_backend() ?>images/logo.png" class="img-fluid" alt="">
          <span>AJESD</span>
        </a>
      </div>
    </div>
    <div class="navbar-breadcrumb">
      <h5 class="mb-0"><?= $title; ?></h5>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ul>
      </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="ri-menu-3-line"></i>
      </button>
      <div class="iq-menu-bt align-self-center">
        <div class="wrapper-menu">
          <div class="line-menu half start"></div>
          <div class="line-menu"></div>
          <div class="line-menu half end"></div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-list">
          <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
        </ul>
      </div>
      <ul class="navbar-list">
        <li>
          <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="<?= assets_backend() ?>images/user/1.jpg" class="img-fluid rounded" alt="user"></a>
          <div class="iq-sub-dropdown iq-user-dropdown">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height shadow-none m-0">
              <div class="iq-card-body p-0 ">
                <div class="bg-primary p-3">
                  <h5 class="mb-0 text-white line-height"><?= $token['nama']; ?></h5>
                  <!-- <span class="text-white font-size-12"><?= $token['role']; ?></span> -->
                </div>
                <div class="d-inline-block w-100 text-center p-3">
                  <a class="iq-bg-danger iq-sign-btn" href="<?= base_url('logout') ?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>