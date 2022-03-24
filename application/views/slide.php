<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Galeri</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">Add Galeri</button>
            </div>
          </div>
          <div class="iq-card-body">
            <?= $this->session->flashdata('msg');?>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mytable" >
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th class="text-center">Images</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($slide as $v => $i) :?>
                    <tr>
                      <td class="text-center"><?= ($v+1); ?></td>
                      <td><?= $i->slide_judul ?></td>
                      <td><?= $i->slide_isi ?></td>
                      <td class="text-center">
                        <img src="<?= base_url('uploads/slide/'.$i->slide_gambar)?>" height="70px">
                      </td>
                      <td class="text-center">
                        <a href="#" data-toggle="modal" data-target="#modalEdit"  onclick="edit_slide('<?= $i->slide_id ?>','<?= $i->slide_judul ?>','<?= $i->slide_isi ?>','<?= $i->slide_gambar ?>')" class="btn btn-outline-warning mb-3" title="Edit"><i class="fa fa-pencil" style="margin-right:0px"></i></a>
                        <a href="#" data-toggle="modal" data-target="#modalDelete" onclick="$('#delete_id').val('<?= $i->slide_id?>')" class="btn btn-outline-danger mb-3" title="Delete"><i class="fa fa-trash" style="margin-right:0px"></i></a>
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
      <form action="<?= base_url('slide/create')?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdd">Tambah Slide</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Isi:</label>
                  <input type="text" class="form-control" name="isi" placeholder="Isi">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Images:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" accept=".jpg,.png,.jpeg" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save_slide" value="save_slide">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <form action="<?= base_url('slide/update')?>" method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEdit">Edit Galeri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="iq-card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" id="edit_slide_judul" name="slide_judul" placeholder="Judul">
                  <input type="hidden" class="form-control" id="edit_slide_id" name="slide_id">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Isi:</label>
                  <input type="text" class="form-control" id="edit_slide_isi" name="slide_isi" placeholder="Isi">
                  <input type="hidden" class="form-control" id="edit_slide_gambar" name="slide_gambar">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Images:</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" accept=".jpg,.png,.jpeg" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="edit_slide" value="edit_slide">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalAdd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdd">Delete Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?= base_url('slide/delete')?>">
        <div class="modal-body">
          <div class="iq-card-body">
            <input type="hidden" name="slide_id" id="delete_id">
            <h5 class="text-center text-danger">Data yang telah dihapus tidak dapat dikembalikan, apakah anda yakin ingin menghapusnya?</h5>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_slide" value="delete_slide">DELETE</button>
        </div>
      </form>
    </div>
  </div>
</div>
