<div id="content-page" class="content-page">
  <h6> STATISTIK PELAYANAN ANTAR JEMPUT SIDANG DIFABEL </h6>
  <div class="container-fluid">
    <div class="row row-eq-height">
      <div class="col-lg-3 col-md-6">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
          <div class="iq-card-body">
            <div class="row">

              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                <div class="icon iq-icon-box rounded-circle iq-bg-dark rounded-circle">
                  <i class="ri-account-box-line"></i>
                </div>
              </div>
              <div class="col-lg-12 mt-3">
                <h6 class="card-title text-uppercase text-secondary mb-0">DATA PERMOHONAN</h6>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum[0]->belum_dilihat + $sum[0]->dilihat; ?></span>
                <?php endif; ?>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat; ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                <div class="icon iq-icon-box rounded-circle iq-bg-warning rounded-circle">
                  <i class="ri-account-box-line"></i>
                </div>
              </div>
              <div class="col-lg-12 mt-3">
                <h6 class="card-title text-uppercase text-secondary mb-0">PROSES VALIDASI</h6>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum[0]->diproses; ?></span>
                <?php endif; ?>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum_one[0]->diproses; ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                <div class="icon iq-icon-box rounded-circle iq-bg-danger rounded-circle">
                  <i class="ri-checkbox-circle-fill"></i>
                </div>
              </div>
              <div class="col-lg-12 mt-3">
                <h6 class="card-title text-uppercase text-secondary mb-0">DISETUJUI</h6>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum[0]->disetujui; ?></span>
                <?php endif; ?>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum_one[0]->disetujui; ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                <div class="icon iq-icon-box rounded-circle iq-bg-success rounded-circle">
                  <i class="ri-chat-off-fill"></i>
                </div>
              </div>
              <div class="col-lg-12 mt-3">
                <h6 class="card-title text-uppercase text-secondary mb-0">DITOLAK</h6>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum[0]->ditolak; ?></span>
                <?php endif; ?>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum_one[0]->ditolak; ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-lg-12 mb-2 d-flex justify-content-between">
                <div class="icon iq-icon-box rounded-circle iq-bg-primary rounded-circle">
                  <i class="ri-chat-check-fill"></i>
                </div>
              </div>
              <div class="col-lg-12 mt-3">
                <h6 class="card-title text-uppercase text-secondary mb-0">PELAYANAN SELESAI</h6>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum[0]->selesai; ?></span>
                <?php endif; ?>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <span class="h2 text-dark mb-0 counter"><?= $sum_one[0]->selesai; ?></span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>