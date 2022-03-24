<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Proses Penjemputan</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
            </div>
          </div>
          <?php
          function tgl_indo($tanggal)
          {
            $bulan = array(
              1 =>   'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember'
            );
            $pecahkan = explode('-', $tanggal);

            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun

            return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
          }

          ?>
          <div class="iq-card-body">
            <?= $this->session->flashdata('msg'); ?>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mytable">
                <thead>
                  <tr>

                    <th class="text-center">No.</th>
                    <th class="text-center">Tanggal Penjemputan</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. HP</th>
                    <!-- <th>KK</th>
                    <th>KTP</th> -->
                    <th>Alamat</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($akta_fix as $v => $i) : ?>
                    <tr>
                      <td class="text-center"><?= ($v + 1); ?></td>
                      <td><?= tgl_indo(date('Y-m-d', strtotime($i->akta_cerai_tanggal))) ?></td>
                      <td><?= $i->akta_cerai_nama ?></td>
                      <td><?= $i->akta_cerai_jk ?></td>
                      <td><?= $i->no_hp ?></td>
                      <!-- <td><?= $i->akta_cerai_no_kk ?></td>
                      <td><?= $i->akta_cerai_no_ktp ?></td> -->
                      <td><?= $i->akta_cerai_alamat_baru ?></td>
                      <td class="text-center">
                        <label class="badge badge-<?php if ($i->akta_cerai_status == AKTA_STATUS['SELESAI']) {
                                                    echo "success";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DIPROSES']) {
                                                    echo "warning";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DILIHAT']) {
                                                    echo "info";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DITERIMA']) {
                                                    echo "dark";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DIKEMBALIKAN']) {
                                                    echo "danger";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['BERSIAP']) {
                                                    echo "dark";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DISETUJUI']) {
                                                    echo "primary";
                                                  } else {
                                                    echo "light";
                                                  } ?>"><?= $i->akta_cerai_status ?></label>
                      </td>
                      <td class="text-center">
                        <?php
                        $tanggal_sekarang = date('Y-m-d');
                        $tanggal_sidang = $i->akta_cerai_tanggal;

                        // echo $tanggal_sekarang;
                        // echo $tanggal_sidang;
                        ?>
                        <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN'] || $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                          <?php if ($tanggal_sekarang == $tanggal_sidang) { ?>

                            <a href="https://www.google.com/maps/dir/<?= $i->akta_cerai_no_kk ?>,<?= $i->longitude ?>" target="_blank" class="btn btn-outline-info mb-3" title="Klik untuk menuju ke lokasi"><i class="fa fa-rocket" style="margin-right:0px"><br> Get Directions</i></a>
                          <?php } else { ?>
                            <a href="" class="btn btn-outline-danger mb-3" title="Belum waktunya dijemput"><i class="fa fa-rocket" style="margin-right:0px"><br> Not Directions</i></a>
                          <?php } ?>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>