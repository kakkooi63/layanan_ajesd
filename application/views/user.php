<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">User</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add User</button>
            </div>
          </div>
          <div class="iq-card-body">
            <?= $this->session->flashdata('msg'); ?>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mytable">
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th class="text-center">Created By</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($user as $v => $i) : ?>
                    <tr>
                      <td class="text-center"><?= ($v + 1); ?></td>
                      <td><?= $i->user_username ?></td>
                      <td><?= $i->user_nama ?></td>
                      <td><?= $i->created_by ?></td>
                      <td class="text-center">
                        <label class="badge badge-<?php if ($i->user_role == ROLE_AKSES['ADMIN']) {
                                                    echo "success";
                                                  } else if ($i->user_role == ROLE_AKSES['OPERATOR_PENGADILAN']) {
                                                    echo "warning";
                                                  } else if ($i->user_role == ROLE_AKSES['OPERATOR_DUKCAPIL']) {
                                                    echo "info";
                                                  } else {
                                                    echo "light";
                                                  } ?>"><?= $i->user_role ?></label>
                      </td>
                      <td class="text-center">
                        <a href="#" data-toggle="modal" data-target="#modalEdit" onclick="edit_user('<?= $i->user_id ?>','<?= $i->user_nama ?>','<?= $i->user_username ?>','<?= $i->user_role ?>')" class="btn btn-outline-warning mb-3" title="Edit"><i class="fa fa-pencil" style="margin-right:0px"></i></a>
                        <a href="#" data-toggle="modal" data-target="#modalDelete" onclick="$('#delete_id').val('<?= $i->user_id ?>')" class="btn btn-outline-danger mb-3" title="Delete"><i class="fa fa-trash" style="margin-right:0px"></i></a>
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
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <form action="<?= base_url('user/create') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama User</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama User">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Repassword:</label>
                  <input type="password" class="form-control" name="repassword" placeholder="Repassword">
                </div>
              </div>
              <div class="col-md-12 text-center pt-2">
                <div class="form-group">
                  <select class="form-control" name="role">
                    <?php if ($token['role'] == ROLE_AKSES['ADMIN']) { ?>
                      <option value="Admin">Admin</option>
                      <option value="Admin Dukcapil">Admin Dukcapil</option>
                      <option value="Operator Pengadilan">Operator Pengadilan</option>
                      <option value="Operator Dukcapil">Operator Dukcapil</option>
                    <?php } ?>
                    <?php if ($token['role'] == ROLE_AKSES['ADMIN_DUKCAPIL']) { ?>
                      <option value="Admin Dukcapil">Admin Dukcapil</option>
                      <option value="Operator Dukcapil">Operator Dukcapil</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save_user" value="save_user">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <form action="<?= base_url('user/update') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEdit">Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama User</label>
                  <input type="text" class="form-control" id="edit_nama" name="nama" placeholder="Nama User">
                  <input type="hidden" class="form-control" id="edit_id" name="user_id">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" class="form-control" id="edit_username" name="username" placeholder="Username">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" id="edit_password" name="password" placeholder="Password">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Repassword:</label>
                  <input type="password" class="form-control" id="edit_repassword" name="repassword" placeholder="Repassword">
                </div>
              </div>
              <div class="col-md-12 text-center pt-2">
                <div class="form-group">
                  <select class="form-control" name="role">
                    <?php if ($token['role'] == ROLE_AKSES['ADMIN']) { ?>
                      <option value="Admin">Admin</option>
                      <option value="Admin Dukcapil">Admin Dukcapil</option>
                      <option value="Operator Pengadilan">Operator Pengadilan</option>
                      <option value="Operator Dukcapil">Operator Dukcapil</option>
                    <?php } ?>
                    <?php if ($token['role'] == ROLE_AKSES['ADMIN_DUKCAPIL']) { ?>
                      <option value="Admin Dukcapil">Admin Dukcapil</option>
                      <option value="Operator Dukcapil">Operator Dukcapil</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="edit_user" value="edit_user">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>




<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?= base_url('user/delete') ?>">
        <div class="modal-body">
          <div class="iq-card-body">
            <input type="hidden" name="user_id" id="delete_id">
            <h5 class="text-center text-danger">Data yang telah dihapus tidak dapat dikembalikan, apakah anda yakin ingin menghapusnya?</h5>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_user" value="delete_user">DELETE</button>
        </div>
      </form>
    </div>
  </div>
</div>