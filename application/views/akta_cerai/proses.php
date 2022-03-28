<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Proses Validasi</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">

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
            </div>
          </div>
          <div class="iq-card-body">
            <?= $this->session->flashdata('msg'); ?>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mytable">
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Tanggal Proses</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Penjemputan</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($akta_proses as $v => $i) : ?>
                    <tr>
                      <td class="text-center"><?= ($v + 1); ?></td>
                      <td class="text-center"><?= date('d-m-Y H:i:s', strtotime($i->akta_cerai_tanggal_proses)) ?></td>
                      <td><?= $i->akta_cerai_nama ?></td>
                      <td><?= $i->akta_cerai_jk ?></td>
                      <td><?= tgl_indo(date('Y-m-d', strtotime($i->akta_cerai_tanggal))) ?></td>
                      <td><?= $i->no_hp ?></td>
                      <td><?= $i->akta_cerai_alamat_baru ?></td>
                      <td class="text-center">
                        <label class="badge badge-<?php if ($i->akta_cerai_status == AKTA_STATUS['SELESAI']) {
                                                    echo "success";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DIPROSES']) {
                                                    echo "warning";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DILIHAT']) {
                                                    echo "info";
                                                  } else {
                                                    echo "light";
                                                  } ?>"><?= $i->akta_cerai_status ?></label>
                      </td>
                      <td class="text-center">
                        <a href='"#"' data-toggle="modal" data-target="#modalView" onclick="view_akta('<?= $i->akta_cerai_id ?>','<?= $token['role']; ?>')" class="btn btn-outline-info mb-3" title="Lihat"><i class="fa fa-eye" style="margin-right:0px"></i> View</a>
                        <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                          <form action="<?= base_url('ajesd/do_cetak') ?>" method="POST">
                            <input type="hidden" name="id" id="view_akta_id" value='<?= $i->akta_cerai_id ?>'>
                            <button type="submit" class="btn btn-outline-info mb-3" formtarget="_blank" name="diambil" value="diambil">Cetak Surat Permohonan</button>
                          </form>
                          <a href="#" data-toggle="modal" data-target="#modalSelesai" onclick="selesai_view_akta('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-info mb-3" title="Selesai"> <i class="fa fa-paper-plane" style="margin-right:0px"> Setujui</i></a>

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



<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd">Data Permohonan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('ajesd/do_proses') ?>" method="POST">
        <div class="modal-body">
          <div class="iq-card-body">
            <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true">Identitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab-fill" data-toggle="pill" href="#pills-profile-fill" role="tab" aria-controls="pills-profile" aria-selected="false">Lampiran</a>
              </li>
            </ul>

            <div class="tab-content" id="pills-tabContent-1">
              <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
                <div id="dump_identitas"></div>
                <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Tulis disini Keterangan / Alasan Jika Ditolak" name="keterangan"></textarea>
                <?php endif; ?>
              </div>
              <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                <div id="dump_file"></div>
              </div>
              <input type="hidden" name="id" id="view_akta_id" value='<?= $i->akta_cerai_id ?>'>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
            <!-- <button type="submit" data-toggle="modal" data-target="#modalSelesai" onclick="selesai_view_akta('<?= $i->akta_cerai_id ?>')" class="btn btn-primary">Selesai</button> -->

            <button type="submit" class="btn btn-danger" name="ditolak" value="ditolak">Tolak</button>

          <?php endif; ?>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('ajesd/do_selesai') ?>" method="POST">

        Apakah anda yakin ingin menyelesaikan proses ini ?
        <input type="hidden" name="id" id="selesai_view_akta_id">

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
            <button type="submit" class="btn btn-primary">Selesai</button>
          <?php endif; ?>
        </div>
      </form>
    </div>
  </div>
</div>