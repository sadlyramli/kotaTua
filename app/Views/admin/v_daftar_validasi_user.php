<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light"></span>Daftar Users</h4>

      <!-- DataTable with Buttons -->
      <div class="card">
        <div class="label mt-2 pr-2">
          <h5 class="card-header" style="float: left;">Data</h5>
        </div>
        <div class="card-datatable table-responsive pt-0">
          <table class="dt-responsive table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                  $no = 1;
                  foreach ($user_validasi as $key => $g){
                  ?>
                <tr>
                  <td style="width: 10%;"><?= $no++; ?></td>
                  <td><?= $g->nama_lengkap; ?></td>
                  <td><?= $g->email; ?></td>
                  <td>
                    <?php if($g->role_id == 1) {?>
                      Atlet
                    <?php }elseif($g->role_id == 2) {?>
                      Pelatih
                    <?php }else{ ?>
                      Wasit
                    <?php } ?>
                  </td>
                  <td style="text-align: center;width: 20%;">
                      <a href="<?= base_url('admin/acc_users/' . $g->id); ?>"><button type="button" class="btn btn-sm btn-success" ><i class="fas fa-check"></i></button></a>
                      <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                      data-bs-target="#modal<?= $g->id; ?>"><i class="fas fa-close"></i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <?php
        $pesan = session()->getFlashdata('pesan');
        if (!empty($pesan)) { ?>
          <div id="pesan" style="display: none;">
              <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php } ?>
      </div>
      <!--/ DataTable with Buttons -->

      <?php foreach ($user_validasi as $key => $g){ ?>
      <div class="modal fade" id="modal<?= $g->id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
          <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="text-center mb-4">
                <h3>Anda Yakin ?</h3>
                <!-- <p>Add new card to complete payment</p> -->
              </div>
                <div class="col-12 text-center mt-4">
                  <a href="<?= base_url('admin/tolak_users/' . $g->id); ?>"><button type="submit" class="btn btn-danger me-sm-3 me-1"><i class="fas fa-trash"></i> Hapus</button></a>
                  <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                    Batal
                  </button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <?= $this->endSection('content'); ?>