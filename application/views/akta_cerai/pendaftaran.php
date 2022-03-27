<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Antar Jemput Pendaftaran Perkara</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
              <?php foreach ($akta as $v => $i) : ?>

              <?php endforeach; ?>

              <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) { ?>

                <?php if ($token['username'] != @$i->user_name) {
                ?>


                  <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Ajukan Permohonan</button>

              <?php  }
              } ?>

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
                  <?php foreach ($akta as $v => $i) : ?>
                    <tr>
                      <!-- <td class="text-center"><?= ($v + 1); ?></td> -->
                      <!-- <td><?= $i->akta_cerai_klasifikasi ?></td> -->
                      <td><?= $i->akta_cerai_nama ?></td>
                      <td><?= $i->akta_cerai_jk ?></td>
                      <!-- <td><?= $i->akta_cerai_nomor ?></td> -->
                      <td><?= tgl_indo(date('Y-m-d', strtotime($i->akta_cerai_tanggal))) ?></td>
                      <!-- <td><?= $i->akta_cerai_no_kk ?></td>
                      <td><?= $i->akta_cerai_no_ktp ?></td> -->
                      <td><?= $i->no_hp ?></td>
                      <!-- <td><?= $i->desa_nama ?></td> -->
                      <td><?= $i->akta_cerai_alamat_lama ?></td>
                      <!-- <td class="text-center"><?= $i->akta_cerai_status_anak ?></td> -->
                      <td class="text-center">
                        <label class="badge badge-<?php if ($i->akta_cerai_status == AKTA_STATUS['SELESAI']) {
                                                    echo "success";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DIPROSES']) {
                                                    echo "warning";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DILIHAT']) {
                                                    echo "info";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DITOLAK']) {
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
                        <a href="#" data-toggle="modal" data-target="#modalView" onclick="view_akta('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-info mb-3" title="Lihat"><i class="fa fa-eye" style="margin-right:0px"></i></a>
                        <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN'] && $i->akta_cerai_status == AKTA_STATUS['DILIHAT'] || $i->akta_cerai_status == AKTA_STATUS['BELUM_DILIHAT'] || $i->akta_cerai_status == AKTA_STATUS['DITOLAK']) :  ?>
                          <a href="#" data-toggle="modal" data-target="#modalEdit" id="editAkta" onclick="edit_akta('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-warning mb-3" title="Edit"><i class="fa fa-pencil" style="margin-right:0px"></i></a>
                          <a href="#" data-toggle="modal" data-target="#modalDelete" onclick="$('#delete_id').val('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-danger mb-3" title="Delete"><i class="fa fa-trash" style="margin-right:0px"></i></a>
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


<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="<?= base_url('akta_cerai/create') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd">Permohonan Antar Jemput Pendaftaran Perkara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Klasifikasi Perkara :</label>
                  <select name="akta_cerai_klasifikasi" class="form-control" required="">
                    <option value="" selected disabled>--Pilih Klasifikasi--</option>
                    <option value="Cerai Gugat" class="perkara">Cerai Gugat</option>
                    <option value="Cerai Talak">Cerai Talak</option>
                    <option value="Isbat Nikah">Isbat Nikah</option>
                    <option value="Harta Bersama">Harta Bersama</option>
                    <option value="Kewarisan">Kewarisan</option>
                    <option value="Wali Adhol">Wali Adhol</option>
                    <option value="Izin Poligami">Izin Poligami</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php
                  $stop_date = date('Y-m-d');
                  $stop_date = date('Y-m-d', strtotime($stop_date . ' +2 day'));

                  ?>
                  <label>Tanggal Penjemputan:</label>
                  <input type="date" min="<?php echo $stop_date; ?>" max="" class="form-control" name="akta_cerai_tanggal" placeholder="Tanggal Sidang" id="perkara" required>
                </div>
              </div>



              <div class="col-md-6">
                <div class="form-group">
                  <label>No. KTP:</label>
                  <input type="text" class="form-control" name="akta_cerai_no_ktp" placeholder="No. KTP" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Lengkap:</label>
                  <input type="text" class="form-control" name="akta_cerai_nama" placeholder="Nama Lengkap" required>
                  <input type="hidden" class="form-control" name="jenis_layanan" value="pendaftaran">
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label>No. Kartu Keluarga:</label>
                  <input type="text" class="form-control" name="akta_cerai_no_kk" placeholder="No.  Kartu Keluarga" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>No. KTP:</label>
                  <input type="text" class="form-control" name="akta_cerai_no_ktp" placeholder="No. KTP" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status Anak:</label>
                  <select class="form-control" name="akta_cerai_status_anak" required="">
                    <option value="" selected disabled>--Pilih Status--</option>
                    <option value="Ikut">Ikut</option>
                    <option value="Tidak Ikut">Tidak Ikut</option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>No Handphone:</label>
                  <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" required>
                </div>
              </div>
              <div class="col-md-6 text-center pt-2">
                <div class="form-group">
                  <label>Jenis Kelamin:</label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jkl" value="Laki - Laki" name="akta_cerai_jk" class="custom-control-input" required>
                    <label class="custom-control-label" for="jkl"> Laki - Laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jkp" value="Perempuan" name="akta_cerai_jk" class="custom-control-input" required>
                    <label class="custom-control-label" for="jkp"> Perempuan</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan:</label>
                  <select class="form-control set_kecamatan_id" name="kecamatan_id" required="">
                    <option value="" selected disabled>--Pilih Kecamatan--</option>
                    <?php foreach ($kecamatan as $kec) : ?>
                      <option value="<?= $kec->kecamatan_id ?>"><?= $kec->kecamatan_nama ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan / Desa:</label>
                  <select class="form-control set_desa_id" name="desa_id" required="">
                    <option value="">--Pilih Keluarah/Desa--</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat Lengkap:</label>
                  <textarea class="form-control" placeholder="Tulis Alamat Lengkap Disini" name="akta_cerai_alamat" required></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Titik Lokasi Alamat Penjemputan: <small>(arahkan titik lokasi peta ke tempat penjemputan dengan benar)</small></label>
                  <input type="text" class="inputAddress input-xxxlarge form-control" value="Jl. Merdeka LK. I No.497, Lingkungan 1, Serasan Jaya, Sekayu, Kabupaten Musi Banyuasin, Sumatera Selatan 30711, Indonesia" name="inputAddress" autocomplete="off" placeholder="Type in your address">
                </div>
              </div>
              <div class="col-md-6" hidden>
                <div class="form-group">
                  <label>Latitude</label>
                  <input type="text" class="latitude form-control" name="latitude" readonly>
                  <label>longitude</label>
                  <input type="text" class="longitude form-control" name="longitude" readonly>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>File Surat Keterangan Disabilitas:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_akta" accept=".jpg,.png,.pdf,.doc,.docx" id="file_akta" required>
                    <label class="custom-file-label" for="file_akta">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Foto Keadaan Disabilitas:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_ktp" accept=".jpg,.png,.pdf,.doc,.docx" id="file_ktp" required>
                    <label class="custom-file-label" for="file_ktp">Choose file</label>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label>File KK:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_kk" accept=".jpg,.png,.pdf,.doc,.docx" id="file_kk" required>
                    <label class="custom-file-label" for="file_kk">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>File Form Perubahan:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_form_perubahan" accept=".jpg,.png,.pdf,.doc,.docx" id="file_perubahan" required>
                    <label class="custom-file-label" for="file_perubahan">Choose file</label>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd">Data Permohonan Antar Jemput Pendaftaran Perkara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="<?= base_url('akta_cerai/do_proses') ?>" method="POST">

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
                  <textarea class="form-control cditolak" id="keterangan" placeholder="Tulis disini Keterangan / Alasan Jika Ditolak" name="keterangan"></textarea>
                <?php endif; ?>
              </div>
              <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                <div id="dump_file"></div>
              </div>

              <input type="hidden" name="id" id="view_akta_id">
            </div>
          </div>
        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
            <button type="submit" class="btn btn-primary cditolak">Proses</button>
            <button type="submit" class="btn btn-danger cditolak" name="ditolak" value="ditolak">Tolak</button>
          <?php endif; ?>

        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="<?= base_url('akta_cerai/update') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd">Edit Data Pemohon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Klasifikasi Perkara:</label>
                  <select name="akta_cerai_klasifikasi" id="edit_akta_cerai_klasifikasi" class="form-control" required="">
                    <option value="" selected disabled>--Pilih Klasifikasi--</option>
                    <option value="Cerai Gugat" class="perkara">Cerai Gugat</option>
                    <option value="Cerai Talak">Cerai Talak</option>
                    <option value="Isbat Nikah">Isbat Nikah</option>
                    <option value="Harta Bersama">Harta Bersama</option>
                    <option value="Kewarisan">Kewarisan</option>
                    <option value="Wali Adhol">Wali Adhol</option>
                    <option value="Izin Poligami">Izin Poligami</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <?php
                  $stop_date = date('Y-m-d');
                  $stop_date = date('Y-m-d', strtotime($stop_date . ' +2 day'));

                  ?>
                  <label>Tanggal Penjemputan :</label>
                  <input type="date" min="<?php echo $stop_date; ?>" max="" class="form-control" name="akta_cerai_tanggal" id="edit_akta_cerai_tanggal" placeholder="Tanggal Akta Cerai" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>No. KTP:</label>
                  <input type="text" class="form-control" id="edit_akta_cerai_no_ktp" name="akta_cerai_no_ktp" placeholder="No. KTP">
                  <input type="hidden" class="form-control" id="edit_akta_cerai_id" name="akta_cerai_id">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Lengkap:</label>
                  <input type="text" class="form-control" id="edit_akta_cerai_nama" name="akta_cerai_nama" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>No Handphone:</label>
                  <input type="text" class="form-control" name="no_hp" id="edit_no_hp" placeholder="No Handphone" required>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label>No. Kartu Keluarga:</label>
                  <input type="text" class="form-control" id="edit_akta_cerai_no_kk" name="akta_cerai_no_kk" placeholder="No.  Kartu Keluarga">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>No. KTP:</label>
                  <input type="text" class="form-control" id="edit_akta_cerai_no_ktp" name="akta_cerai_no_ktp" placeholder="No. KTP">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status Anak:</label>
                  <select class="form-control" name="akta_cerai_status_anak" id="edit_akta_cerai_status_anak" required="">
                    <option value="" selected disabled>--Pilih Status--</option>
                    <option value="Ikut">Ikut</option>
                    <option value="Tidak Ikut">Tidak Ikut</option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-6 text-center pt-2">
                <div class="form-group">
                  <label>Jenis Kelamin:</label><br>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="edit_jkl" value="Laki - Laki" name="akta_cerai_jk" class="custom-control-input">
                    <label class="custom-control-label" for="edit_jkl"> Laki - Laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="edit_jkp" value="Perempuan" name="akta_cerai_jk" class="custom-control-input">
                    <label class="custom-control-label" for="edit_jkp"> Perempuan</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kecamatan:</label>
                  <select class="form-control set_kecamatan_id" name="kecamatan_id" id="" required="">
                    <option value="">--Pilih Kecamatan--</option>
                    <?php foreach ($kecamatan as $kec) : ?>
                      <option value="<?= $kec->kecamatan_id ?>"><?= $kec->kecamatan_nama ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan / Desa:</label>
                  <select class="form-control set_desa_id" name="desa_id" id="" required="">
                    <option value="">--Pilih Keluarah/Desa--</option>

                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat Lengkap :</label>
                  <textarea class="form-control" id="edit_akta_cerai_alamat_lama" placeholder="Tulis Alamat Lengkap Disini" name="akta_cerai_alamat"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Titik Lokasi Alamat Penjemputan: <small>(arahkan titik lokasi peta ke tempat penjemputan dengan benar)</small></label>
                  <input type="text" class="inputAddress input-xxxlarge form-control" value="Jl. Merdeka LK. I No.497, Lingkungan 1, Serasan Jaya, Sekayu, Kabupaten Musi Banyuasin, Sumatera Selatan 30711, Indonesia" name="inputAddress" autocomplete="off" placeholder="Type in your address" id="titik_lokasi">
                </div>
              </div>
              <div class="col-md-6" hidden>
                <div class="form-group">
                  <label>Latitude</label>
                  <input type="text" class="latitude form-control" id="latitude" name="latitude" readonly>
                  <label>longitude</label>
                  <input type="text" class="longitude form-control" id="longitude" name="longitude" readonly>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>File Surat Keterangan Disabilitas:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_akta" accept=".jpg,.png,.pdf,.doc,.docx" id="file_akta">
                    <label class="custom-file-label" for="file_akta">Choose file</label>
                    <input type="hidden" name="old_akta_cerai_file_akta" id="edit_akta_cerai_file_akta">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Foto Keadaan Disabilitas:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_ktp" accept=".jpg,.png,.pdf,.doc,.docx" id="file_ktp">
                    <label class="custom-file-label" for="file_ktp">Choose file</label>
                    <input type="hidden" name="old_akta_cerai_file_ktp" id="edit_akta_cerai_file_ktp">
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label>File KK:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_kk" accept=".jpg,.png,.pdf,.doc,.docx" id="file_kk">
                    <label class="custom-file-label" for="file_kk">Choose file</label>
                    <input type="hidden" name="old_akta_cerai_file_kk" id="edit_akta_cerai_file_kk">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>File Form Perubahan:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_form_perubahan" accept=".jpg,.png,.pdf,.doc,.docx" id="file_perubahan">
                    <label class="custom-file-label" for="file_perubahan">Choose file</label>
                    <input type="hidden" name="old_akta_cerai_form_perubahan" id="edit_akta_cerai_form_perubahan">
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd">Delete Data Permohonan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?= base_url('akta_cerai/delete') ?>">
        <div class="modal-body">
          <div class="iq-card-body">
            <input type="hidden" name="id" id="delete_id">
            <h5 class="text-center text-danger">Data yang telah dihapus tidak dapat dikembalikan, apakah anda yakin ingin menghapusnya?</h5>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">DELETE</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
// $tanggal_sekarang = date('Y-m-d');
// $tanggal_sidang = $i->akta_cerai_tanggal;

// echo $tanggal_sekarang;
// echo $tanggal_sidang;
?>