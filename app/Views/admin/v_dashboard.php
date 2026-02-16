<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <H1>SELAMAT DATANG ADMIN</H1>

    <div class="row mb-2">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Sulawesi Tengah</h5>
            </div>
            <div id="chart-sulteng"></div>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            <div class="card-title header-elements">
              <h5 class="m-0 me-2">Sulawesi Barat</h5>
            </div>
            <div id="chart-sulbar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Content -->
<?= $this->endSection('content'); ?>