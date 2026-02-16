<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
      <span class="text-muted fw-light">Kategori Temuan /</span> <?= $title; ?>
    </h4>
    <div class="mb-3">
      <p class="text-success"><?= esc($detail['no_inventaris']) ?>s</p>
      <h3 class="fw-bold"><?= esc($detail['nama_objek']) ?></h3>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Foto</h5>
            </div>
            <?php if (!empty($detail['foto']) && $detail['foto'] != '-') : ?>
              <img src="<?= base_url('objek/foto/' . $detail['foto']); ?>" class="img-fluid rounded" alt="Foto Kategori Temuan">
            <?php else: ?>
              <p>Tidak ada Foto</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Deskripsi Temuan</h5>
            </div>
            <?= esc($detail['deskripsi_temuan']) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Informasi</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Kategori</strong></td>
                <td><?= esc($detail['kategori']) ?></td>
              </tr>
              <tr>
                <td><strong>Jenis Temuan</strong></td>
                <td><?= esc($detail['jenis_temuan']) ?></td>
              </tr>
              <tr>
                <td><strong>Nama Temuan</strong></td>
                <td><?= esc($detail['nama_temuan']) ?></td>
              </tr>
              <tr>
                <td><strong>Lintang</strong></td>
                <td><?= esc($detail['longitude']) ?></td>
              </tr>
              <tr>
                <td><strong>Bujur</strong></td>
                <td><?= esc($detail['latitude']) ?></td>
              </tr>
              <tr>
                <td><strong>Elevasi</strong></td>
                <td><?= esc($detail['elevasi']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100"></div>
    <div class="col-md">
      <div class="card mb-4">
        <div class="card-body">
          <div class="card-title header-elements">
            <h5 class="m-0 me-2">Status dan Pengelolaan</h5>
          </div>
          <table class="table table-borderless info-table">
            <tr>
              <td><strong>Penetapan</strong></td>
              <td><?= esc($detail['penetapan']) ?></td>
            </tr>
            <tr>
              <td><strong>Status Penetapan</strong></td>
              <td><?= esc($detail['status_penetapan']) ?></td>
              <td><strong>Peringkat</strong></td>
              <td><?= esc($detail['peringkat']) ?></td>
            </tr>
            <tr>
              <td><strong>Status Pemeringkatan</strong></td>
              <td><?= esc($detail['status_pemeringkatan']) ?></td>
              <td><strong>Status CB ODCB</strong></td>
              <td><?= esc($detail['status_cb_odcb']) ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Detail</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Panjang</strong></td>
                <td><?= esc($detail['panjang']) ?></td>
              </tr>
              <tr>
                <td><strong>Lebar</strong></td>
                <td><?= esc($detail['lebar']) ?></td>
              </tr>
              <tr>
                <td><strong>Tinggi</strong></td>
                <td><?= esc($detail['tinggi']) ?></td>
              </tr>
              <tr>
                <td><strong>Tebal</strong></td>
                <td><?= esc($detail['tebal']) ?></td>
              </tr>
              <tr>
                <td><strong>Diameter</strong></td>
                <td><?= esc($detail['diameter']) ?></td>
              </tr>
              <tr>
                <td><strong>Kedalaman Lubang</strong></td>
                <td><?= esc($detail['kedalaman_lubang']) ?></td>
              </tr>
              <tr>
                <td><strong>Berat</strong></td>
                <td><?= esc($detail['berat']) ?></td>
              </tr>
              <tr>
                <td><strong>Motif</strong></td>
                <td><?= esc($detail['motif']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100"></div>
    <div class="row mb-2">
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Regnas</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>ID Objek Pendaftaran Regnas</strong></td>
                <td><?= esc($detail['id_objek_regnas']) ?></td>
              </tr>
              <tr>
                <td><strong>Nomor Regnas</strong></td>
                <td><?= esc($detail['nomor_regnas']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100"></div>


    <div class="row mb-1">
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Kondisi dan Ancaman</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Riwayat Konservasi</strong></td>
                <td><?= esc($detail['riwayat_konservasi']) ?></td>
              </tr>
              <tr>
                <td><strong>Keterangan Lain</strong></td>
                <td><?= esc($detail['keterangan_lain']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100"></div>

    <?= $this->endSection('content'); ?>