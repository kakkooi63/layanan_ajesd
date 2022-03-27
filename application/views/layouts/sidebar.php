<?php
$username = $token['username'];
?>

<div class="iq-sidebar">
   <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="<?= base_url() ?>">
         <img src="<?= base_url('assets_adit/images/head.png') ?>" class="img-fluid" alt="">
         <h5 style="margin-left:5px"><b>AJESD</b></h5>
      </a>
      <div class="iq-menu-bt align-self-center">
         <div class="wrapper-menu">
            <div class="line-menu half start"></div>
            <div class="line-menu"></div>
            <div class="line-menu half end"></div>
         </div>
      </div>
   </div>
   <div id="sidebar-scrollbar">
      <nav class="iq-sidebar-menu">
         <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="<?= $title == 'Dashboard' ? 'active' : '' ?>"><a href="<?= base_url() ?>" class="iq-waves-effect"><i class="ri-home-2-line"></i><span>Dashboard</span></a></li>
            <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN'] || $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>

               <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <li class="<?= $title == 'Akta Cerai' ? 'active' : '' ?>">
                     <a href="<?= base_url('akta-cerai/permohonan') ?>" class="iq-waves-effect">
                        <i class="fa fa-folder-open"></i><span>Permohonan</span>
                        <?php if (isset($sum)) {
                           if ($sum[0]->dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                              <label class="badge badge-primary"><?= $sum[0]->dilihat + $sum[0]->belum_dilihat; ?></label>
                           <?php endif;
                           if ($sum[0]->belum_dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                              <label class="badge badge-primary"><?= $sum[0]->belum_dilihat + $sum[0]->dilihat; ?></label>
                        <?php endif;
                        } ?>
                     </a>
                  </li>
               <?php endif; ?>

               <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <li>
                     <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-car"></i><span>Layanan Antar Jemput</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="<?= base_url('akta-cerai/pendaftaran') ?>">

                              <i class="fa fa-pencil-square-o"></i><span>Pendaftaran Perkara</span>
                              <?php if (isset($sum_one)) {
                                 if ($sum_one[0]->dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->dilihat + $sum_one[0]->belum_dilihat + $sum_one[0]->bersiap + $sum_one[0]->diproses; ?></label>
                                 <?php endif;
                                 if ($sum_one[0]->belum_dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat + $sum_one[0]->bersiap; ?></label>
                                 <?php endif;
                                 if ($sum_one[0]->diproses > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat + $sum_one[0]->bersiap + $sum_one[0]->diproses; ?></label>
                                 <?php endif;
                                 if ($sum_one[0]->disetujui > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat + $sum_one[0]->bersiap + $sum_one[0]->disetujui; ?></label>
                                 <?php endif;
                                 if ($sum_one[0]->bersiap > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat + $sum_one[0]->bersiap + $sum_one[0]->diproses; ?></label>
                              <?php endif;
                              } ?></a></li>
                        <li><a href="<?= base_url('akta-cerai') ?>">

                              <i class="fa fa-university"></i><span>Persidangan</span>
                              <?php if (isset($sum_one)) {
                                 if ($sum_one[0]->dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->dilihat + $sum_one[0]->belum_dilihat; ?></label>
                                 <?php endif;
                                 if ($sum_one[0]->belum_dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat; ?></label>
                              <?php endif;
                              } ?></a></li>
                        <li><a href="<?= base_url('akta-cerai/produk') ?>">

                              <i class="fa fa-shopping-cart "></i><span>Pengambilan Produk</span>
                              <?php if (isset($sum_one)) {
                                 if ($sum_one[0]->dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->dilihat + $sum_one[0]->belum_dilihat; ?></label>
                                 <?php endif;
                                 if ($sum_one[0]->belum_dilihat > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                                    <label class="badge badge-primary"><?= $sum_one[0]->belum_dilihat + $sum_one[0]->dilihat; ?></label>
                              <?php endif;
                              } ?></a></li>


                     </ul>

                  </li>
               <?php endif; ?>

               <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <li class="<?= $title == 'Akta Proses' ? 'active' : '' ?>">
                     <a href="<?= base_url('akta-cerai/proses') ?>" class="iq-waves-effect">
                        <i class="fa fa-hourglass-half"></i><span>Proses Validasi</span>
                        <?php if (isset($sum[0]->diproses)) {
                           if ($sum[0]->diproses > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN'] || ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                              <label class="badge badge-primary"><?= $sum[0]->diproses; ?></label>
                        <?php endif;
                        } ?>
                     </a>
                  </li>

               <?php endif; ?>

               <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <li class="<?= $title == 'Proses Penjemputan' ? 'active' : '' ?>">
                     <a href="<?= base_url('akta-cerai/penjemputan') ?>" class="iq-waves-effect">
                        <i class="fa fa-car"></i><span>Penjemputan</span>
                        <?php if (isset($sum[0]->disetujui)) {
                           if ($sum[0]->disetujui > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN'] || ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                              <label class="badge badge-primary"><?= $sum[0]->disetujui + $sum[0]->bersiap; ?></label>
                        <?php endif;
                        } ?>
                     </a>
                  </li>
               <?php endif; ?>
               <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
                  <li class="<?= $title == 'Akta Selesai' ? 'active' : '' ?>">
                     <a href="<?= base_url('akta-cerai/selesai') ?>" class="iq-waves-effect">
                        <i class="fa fa-check"></i><span>Selesai</span>
                        <?php if (isset($sum[0]->selesai)) {
                           if ($sum[0]->selesai > 0 && $token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) : ?>
                              <label class="badge badge-primary"><?= $sum[0]->selesai; ?></label>
                        <?php endif;
                        } ?>
                     </a>
                  </li>
               <?php endif; ?>
               <?php if ($token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) :  ?>
                  <li class="<?= $title == 'Akta Selesai' ? 'active' : '' ?>">
                     <a href="<?= base_url('akta-cerai/selesai') ?>" class="iq-waves-effect">
                        <i class="fa fa-check"></i><span>Selesai</span>
                        <?php if (isset($sum_one[0]->selesai)) {
                           if ($sum_one[0]->selesai > 0 && $token['role'] == ROLE_AKSES['OPERATOR_PENGADILAN']) : ?>
                              <label class="badge badge-primary"><?= $sum_one[0]->selesai; ?></label>
                        <?php endif;
                        } ?>
                     </a>
                  </li>
               <?php endif; ?>


            <?php endif; ?>

            <?php if ($token['role'] == ROLE_AKSES['ADMIN'] || $token['role'] == ROLE_AKSES['ADMIN_DUKCAPIL']) :  ?>
               <li class="<?= $title == 'Slide' ? 'active' : '' ?>"><a href="<?= base_url('slide') ?>" class="iq-waves-effect"><i class="fa fa-image"></i><span>Galeri</span></a></li>
               <li class="<?= $title == 'User' ? 'active' : '' ?>"><a href="<?= base_url('user') ?>" class="iq-waves-effect"><i class="fa fa-user"></i><span>User</span></a></li>
               <li class="<?= $title == 'Audit' ? 'active' : '' ?>"><a href="<?= base_url('audit') ?>" class="iq-waves-effect"><i class="fa fa-eye"></i><span>Audit</span></a></li>
            <?php endif; ?>

            <?php if ($token['role'] == ROLE_AKSES['OPERATOR_DUKCAPIL']) :  ?>
               <li class="<?= $title == 'Report' ? 'active' : '' ?>"><a href="<?= base_url('report') ?>" class="iq-waves-effect"><i class="fa fa-print"></i><span>Report</span></a></li>
            <?php endif; ?>
            <li class="<?= $title == 'Panduan' ? 'active' : '' ?>"><a href="<?= base_url('home/panduan') ?>" class="iq-waves-effect"><i class="fa fa-book"></i><span>Panduan Pengguna</span></a></li>
         </ul>
      </nav>
      <div class="p-3"></div>
   </div>
</div>