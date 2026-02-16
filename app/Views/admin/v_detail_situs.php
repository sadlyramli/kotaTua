<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
      <span class="text-muted fw-light">Situs /</span> <?= $title; ?>
    </h4>
    <div class="mb-3">
      <p class="text-success"><?= esc($detail['no_inventaris']) ?>s</p>
      <h3 class="fw-bold"><?= esc($detail['nama_objek']) ?></h3>
    </div>
    <div class="row mb-2">
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Foto</h5>
            </div>
            <?php if (!empty($detail['foto']) && $detail['foto'] != '-') : ?>
              <img src="<?= base_url('situs/foto/' . $detail['foto']); ?>" class="img-fluid rounded" alt="Foto Situs">
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
              <h5 class="m-0 me-2">Deskripsi</h5>
            </div>
            <?= esc($detail['deskripsi']) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2">
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
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Wilayah Administrasi</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Provinsi</strong></td>
                <td><?= esc($detail['prov']) ?></td>
              </tr>
              <tr>
                <td><strong>Kabupaten/Kota</strong></td>
                <td><?= esc($detail['kab']) ?></td>
              </tr>
              <tr>
                <td><strong>Kecamatan</strong></td>
                <td><?= esc($detail['kec']) ?></td>
              </tr>
              <tr>
                <td><strong>Kelurahan/Desa</strong></td>
                <td><?= esc($detail['kel']) ?></td>
              </tr>
              <tr>
                <td><strong>Luas</strong></td>
                <td><?= esc($detail['luas']) ?></td>
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
              <td><strong>Kepemilikan</strong></td>
              <td><?= esc($detail['kepemilikan']) ?></td>
              <td><strong>Pengelola</strong></td>
              <td><?= esc($detail['pengelola']) ?></td>
            </tr>
            <tr>
              <td><strong>Juru Pelihara</strong></td>
              <td><?= esc($detail['juru_pelihara']) ?></td>
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
              <h5 class="m-0 me-2">Batas Situs dan Tataguna Lahan</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Batas Utara</strong></td>
                <td><?= esc($detail['batas_utara']) ?></td>
              </tr>
              <tr>
                <td><strong>Batas Selatan</strong></td>
                <td><?= esc($detail['batas_selatan']) ?></td>
              </tr>
              <tr>
                <td><strong>Batas Timur</strong></td>
                <td><?= esc($detail['batas_timur']) ?></td>
              </tr>
              <tr>
                <td><strong>Batas Barat</strong></td>
                <td><?= esc($detail['batas_barat']) ?></td>
              </tr>
              <tr>
                <td><strong>Tataguna Lahan</strong></td>
                <td><?= esc($detail['tataguna_lahan']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Kondisi dan Ancaman</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Kondisi Keterawatan</strong></td>
                <td><?= esc($detail['kondisi_keterawatan']) ?></td>
              </tr>
              <tr>
                <td><strong>Ancaman</strong></td>
                <td><?= esc($detail['ancaman']) ?></td>
              </tr>
              <tr>
                <td><strong>Potensi Ancaman</strong></td>
                <td><?= esc($detail['potensi_ancaman']) ?></td>
              </tr>
              <tr>
                <td><strong>Nilai Penting</strong></td>
                <td><?= esc($detail['nilai_penting']) ?></td>
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
              <h5 class="m-0 me-2">Riwayat Kegiatan</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Riwayat Perlindungan</strong></td>
                <td><?= esc($detail['riwayat_perlindungan']) ?></td>
              </tr>
              <tr>
                <td><strong>Riwayat Pengembangan</strong></td>
                <td><?= esc($detail['riwayat_pengembangan']) ?></td>
              </tr>
              <tr>
                <td><strong>Riwayat Pemanfaatan</strong></td>
                <td><?= esc($detail['riwayat_pemanfaatan']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
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
              <h5 class="m-0 me-2">Peta Lokasi</h5>
            </div>
            <?php if (!empty($detail['peta']) && $detail['peta'] != '-') : ?>
              <img src="<?= base_url('situs/peta/' . $detail['peta']); ?>" class="img-fluid rounded" alt="Peta Lokasi">
            <?php else: ?>
              <p>Tidak ada peta</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Kondisi dan Ancaman</h5>
            </div>
            <table class="table table-borderless info-table">
              <tr>
                <td><strong>Keterangan Lain</strong></td>
                <td><?= esc($detail['keterangan_lain']) ?></td>
              </tr>
              <tr>
                <td><strong>Sumber Data</strong></td>
                <td><?= esc($detail['sumber_data']) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100"></div>

    <?= $this->endSection('content'); ?>