<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Audit</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
            </div>
          </div>
          <div class="iq-card-body">
            <?= $this->session->flashdata('msg');?>
            <div class="table-responsive">
              <table class="table table-striped table-bordered mytable" >
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Date Time</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">IP Address</th>
                    <th class="text-center">Action</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Link</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($audit as $v => $i) :?>
                    <tr>
                      <td class="text-center"><?= ($v+1); ?></td>
                      <td class="text-center"><?= date('d M Y H:i:s',strtotime($i->audit_tanggal)) ?></td>
                      <td><?= $i->audit_by ?></td>
                      <td><?= $i->audit_ip ?></td>
                      <td><?= $i->audit_action ?></td>
                      <td><?= $i->audit_keterangan ?></td>
                      <td class="text-center">[ <a href="<?= $i->audit_link ?>">View</a> ]</td>
                    
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
