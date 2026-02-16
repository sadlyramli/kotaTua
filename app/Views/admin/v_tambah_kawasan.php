<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Tambah Kawasan</span>
        </h4>
        <div class="card mb-4">
            <form class="card-body" method="post" action="<?= base_url('admin/simpan_kawasan'); ?>" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Nama Objek</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="nama_objek" placeholder="Masukkan Nama Objek" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Provinsi</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" name="prov" id="select2-provinsi" required></select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Kabupaten/Kota</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select " name="kab" id="select2-kabupaten" required></select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Kecamatan</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select " name="kec" id="select2-kecamatan" required></select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Kelurahan/Desa</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select " name="kel" id="select2-kelurahan" required></select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Luas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" step="0.00001" id="multicol-username" class="form-control" name="luas" placeholder="Masukkan Luas Kawasan" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Pengelola</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="pengelola" placeholder="Masukkan Pengelola" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Penetapan (SK Penetapan)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="penetapan" placeholder="Masukkan SK Penetapan" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Status Penetapan</label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="status_penetapan" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Provinsi">Provinsi</option>
                            <option value="Kabupaten">Kabupaten</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Peringkat (SK Pemeringkatan)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="peringkat" placeholder="Masukkan SK Pemeringkatan" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Status Pemeringkatan</label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="status_pemeringkatan" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Provinsi">Provinsi</option>
                            <option value="Kabupaten">Kabupaten</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Tataguna Lahan (Kondisi Eksisisting Lahan)</label>
                    </div>
                    <div class="col-md-9">
                        <textarea type="text" id="multicol-username" class="form-control" name="tataguna_lahan" placeholder="Masukkan Tataguna Lahan" /></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Batas Utara</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="batas_utara" placeholder="Masukkan Batas Utara" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Batas Selatan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="batas_selatan" placeholder="Masukkan Batas Selatan" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Batas Timur</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="batas_timur" placeholder="Masukkan Batas Timur" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Batas Barat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="batas_barat" placeholder="Masukkan Batas Barat" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Ancaman</label>
                    </div>
                    <div class="col-md-9">
                        <textarea type="text" id="multicol-username" class="form-control" name="ancaman" placeholder="Masukkan Ancaman"></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Potensi Ancaman</label>
                    </div>
                    <div class="col-md-9">
                        <textarea type="text" id="multicol-username" class="form-control" name="potensi_ancaman" placeholder="Masukkan Potensi Ancaman"></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Nilai Penting</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="nilai_penting" placeholder="Masukkan Nilai Penting" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Foto</label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" id="multicol-first-name" class="form-control" name="foto" accept=".jpg, .png, .jpeg" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Peta (Jpeg/PDF)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" id="multicol-first-name" class="form-control" name="peta" accept=".jpg, .pdf, .jpeg" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Deskripsi</label>
                    </div>
                    <div class="col-md-9">
                        <textarea type="text" id="multicol-username" class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Keterangan Lain</label>
                    </div>
                    <div class="col-md-9">
                        <textarea type="text" id="multicol-username" class="form-control" name="keterangan_lain" placeholder="Keterangan Lain" ></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Sumber Data</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="multicol-username" class="form-control" name="sumber_data" placeholder="Masukkan Sumber Data" />
                    </div>
                </div>
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div id="error" style="display: none;">
                        <?php foreach ($errors as $key => $value) { ?>
                            <?= esc($value) ?>
                        <?php } ?>
                    </div>
                <?php } ?>
                <hr class="my-4 mx-n4" />
                <div class="col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                    <div class="left">
                        <a href="#"><button type="button" class="btn btn-success me-sm-3 me-1"> Kembali</button></a>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                    <div class="right">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>