<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light"></span><?= $title; ?></h4>

      <!-- DataTable with Buttons -->
      <div class="card">
        <div class="label mt-2 pr-2">
          <h5 class="card-header" style="float: left;">Data</h5>
          <a href="<?= base_url('admin/tambah_kawasan'); ?>"><button type="button" class="btn btn-success" style="width: 20%;float: right;margin-right: 20px;margin-top: 25px;"><i class="bx bx-plus me-md-1"></i><span class="d-md-inline-block d-none"> Tambah Kawasan</span></button></a>
        </div>
        <div class="card-datatable table-responsive pt-0">
          <table class="dt-responsive table table-bordered" style="font-size: 12px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kawasan</th>
                <th>Jenis Temuan</th>
                <th>Provinsi</th>
                <th>SK Penetapan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($kawasan as $key => $g) {
                ?>
                <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td><?= $g->nama_objek; ?></td>
                  <td>Arca</td>
                  <td><?= $g->prov; ?></td>
                  <td><?= $g->penetapan; ?></td>
                  <td style="text-align: center;width: 10%;">
                      <a href="<?= base_url('admin/edit_kawasan/' . $g->id_kawasan); ?>"><button type="button" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></button></a>
                      <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                      data-bs-target="#modal<?= $g->id_kawasan; ?>"><i class="fas fa-trash"></i></button>
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

      <?php foreach ($kawasan as $key => $g){ ?>
      <div class="modal fade" id="modal<?= $g->id_kawasan; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
          <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="text-center mb-4">
                <h3>Anda Yakin ?</h3>
                <!-- <p>Add new card to complete payment</p> -->
              </div>
                <div class="col-12 text-center mt-4">
                  <a href="<?= base_url('admin/delete_kawasan/' . $g->id_kawasan); ?>"><button type="submit" class="btn btn-danger me-sm-3 me-1"><i class="fas fa-trash"></i> Hapus</button></a>
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