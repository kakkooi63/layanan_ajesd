<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Report Data</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
            </div>
          </div>
          <div class="iq-card-body">
            <?= $this->session->flashdata('msg'); ?>
            <form method="POST" action="">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputdate"><b>Status</b></label>
                        <select name="status" class="form-control">
                          <option value="All">All</option>
                          <option value="Diinput">Diinput</option>
                          <option value="Ditolak">Ditolak</option>
                          <option value="Diproses">Diproses Cetak KTP</option>
                          <option value="Selesai">Selesai Cetak KTP</option>
                          <option value="Diambil">Diambil Pengadilan</option>
                          <option value="Diterima">Diterima Para Pihak</option>
                          <option value="Dikembalikan">Dikembalikan ke Dukcapil</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputdate"><b>Tanggal Awal</b></label>
                        <input type="date" name="awal" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-1 text-center" style="padding-top: 33px;padding-bottom: 20px">
                      <div class="form-group">
                        <label for="exampleInputdate"><b>S/D</b></label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputdate"><b>Tanggal Akhir</b></label>
                        <input type="date" name="akhir" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 33px;padding-bottom: 20px">
                      <button type="submit" class="btn btn-primary col-md-12" name="search" value="search">Search</button>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-3">
                      <select name="kecamatan" class="form-control">
                        <option value="">--Pilih Kecamatan--</option>
                        <?php foreach ($kecamatan as $kec) : ?>
                          <option value="<?= $kec->kecamatan_id ?>"><?= $kec->kecamatan_nama ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select name="desa" class="form-control">
                        <option value="">--Pilih Kelurahan/Desa--</option>
                        <?php foreach ($desa as $des) : ?>
                          <option value="<?= $des->desa_id ?>"><?= $des->desa_nama ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
            <div class="table-responsive">
              <table id="myprint" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Tanggal</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Sidang</th>
                    <th>No HP</th>

                    <th>Alamat</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($akta as $v => $i) : ?>
                    <tr>
                      <td class="text-center"><?= ($v + 1); ?></td>
                      <td class="text-center"><?= $i->updated_at != null ? date('d-m-Y', strtotime($i->updated_at)) : '-' ?></td>
                      <td><?= $i->akta_cerai_nama ?></td>
                      <td><?= $i->akta_cerai_jk ?></td>
                      <td><?= tgl_indo(date('Y-m-d', strtotime($i->akta_cerai_tanggal))) ?></td>
                      <!-- <td><?= $i->akta_cerai_no_kk ?></td>
                      <td><?= $i->akta_cerai_no_ktp ?></td> -->
                      <td><?= $i->no_hp ?></td>
                      <td><?= $i->akta_cerai_alamat_baru ?></td>
                      <td class="text-center">
                        <label class="badge badge-<?php if ($i->akta_cerai_status == AKTA_STATUS['SELESAI']) {
                                                    echo "success";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DIPROSES']) {
                                                    echo "warning";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DILIHAT']) {
                                                    echo "info";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DITOLAK']) {
                                                    echo "danger";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DITERIMA']) {
                                                    echo "dark";
                                                  } else if ($i->akta_cerai_status == AKTA_STATUS['DIKEMBALIKAN']) {
                                                    echo "danger";
                                                  } else {
                                                    echo "light";
                                                  } ?>"><?= $i->akta_cerai_status ?></label>
                      </td>
                      <td class="text-center">
                        <a href="#" data-toggle="modal" data-target="#modalView" onclick="view_akta('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-info mb-3" title="Lihat"><i class="fa fa-eye" style="margin-right:0px"></i></a>
                        <?php if ($token['role'] == ROLE_AKSES['ADMIN'] || $token['role'] == ROLE_AKSES['ADMIN_DUKCAPIL']) :  ?>
                          <a href="#" data-toggle="modal" data-target="#modalEdit" id="editAkta" onclick="edit_akta('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-warning mb-3" title="Edit"><i class="fa fa-pencil" style="margin-right:0px"></i></a>

                          <?php if ($token['role'] == ROLE_AKSES['ADMIN']) :  ?>
                            <a href="#" data-toggle="modal" data-target="#modalDelete" onclick="$('#delete_id').val('<?= $i->akta_cerai_id ?>')" class="btn btn-outline-danger mb-3" title="Delete"><i class="fa fa-trash" style="margin-right:0px"></i></a>
                          <?php endif; ?>

                          <a href="#" data-toggle="modal" data-target="#modalChangeStatus" onclick="$('#change_id').val('<?= $i->akta_cerai_id ?>');$('#change_status').val('<?= $i->akta_cerai_status ?>')" class="btn btn-outline-primary mb-3" title="Change Status"><i class="fa fa-exchange" style="margin-right:0px"></i></a>
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
        <h5 class="modal-title" id="modalAdd">View Akta Cerai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('akta_cerai/do_cetak') ?>" method="POST">
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
                <div id="dump_identitas_s"></div>
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
          <h5 class="modal-title" id="modalAdd">Edit Akta Cerai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>No. Akta Cerai:</label>
                  <input type="text" class="form-control" id="edit_akta_cerai_nomor" name="akta_cerai_nomor" placeholder="No. Akta Cerai">
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
              <div class="col-md-12 text-center pt-2">
                <div class="form-group">
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
                  <label>Alamat Lama:</label>
                  <textarea class="form-control" id="edit_akta_cerai_alamat_lama" placeholder="Alamat Lama" name="akta_cerai_alamat_lama"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Alamat Baru:</label>
                  <textarea class="form-control" id="edit_akta_cerai_alamat_baru" placeholder="Alamat Baru" name="akta_cerai_alamat_baru"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>File Akta Cerai:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_akta" accept=".jpg,.png,.pdf,.doc,.docx" id="file_akta">
                    <label class="custom-file-label" for="file_akta">Choose file</label>
                    <input type="hidden" name="old_akta_cerai_file_akta" id="edit_akta_cerai_file_akta">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>File KTP:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="akta_cerai_file_ktp" accept=".jpg,.png,.pdf,.doc,.docx" id="file_ktp">
                    <label class="custom-file-label" for="file_ktp">Choose file</label>
                    <input type="hidden" name="old_akta_cerai_file_ktp" id="edit_akta_cerai_file_ktp">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
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
              </div>
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
        <h5 class="modal-title" id="modalAdd">Delete Akta Cerai</h5>
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

<div class="modal fade" id="modalChangeStatus" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd">Ganti Status Akta Cerai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?= base_url('akta_cerai/change_status') ?>">
        <div class="modal-body">
          <div class="iq-card-body">
            <input type="hidden" name="id" id="change_id">
            <div class="form-group">
              <label for="exampleInputdate"><b>Status</b></label>
              <select name="status" class="form-control" id="change_status">
                <option value="Belum Dilihat">Belum Dilihat</option>
                <option value="Dilihat">Dilihat</option>
                <option value="Ditolak">Ditolak</option>
                <option value="Diproses">Diproses Cetak KTP</option>
                <option value="Selesai">Selesai Cetak KTP</option>
                <option value="Diambil">Diambil Pengadilan</option>
                <option value="Diterima">Diterima Para Pihak</option>
                <option value="Dikembalikan">Dikembalikan ke Dukcapil</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ganti Status</button>
        </div>
      </form>
    </div>
  </div>
</div>