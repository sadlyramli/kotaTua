<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Edit Kawasan</span>
        </h4>
        <div class="card mb-4">
            <form class="card-body" method="post" action="<?= base_url('admin/update_kawasan/' . $detail['id_kawasan']); ?>" enctype="multipart/form-data">
                

                <div class="row g-3">
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nama Objek</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_objek" placeholder="Masukkan Nama Objek" value="<?= $detail['nama_objek']; ?>" />
                    </div>

                    <!-- prov, kab, kec, kel -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Provinsi</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" name="prov" id="select2-provinsi" required>
                            <option value="<?= $detail['prov']; ?>" <?= "" == $detail['prov'] ? 'selected' : ''; ?>><?= $detail['prov']; ?></option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Kabupaten/Kota</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select " name="kab" id="select2-kabupaten" required>
                            <option value="<?= $detail['kab']; ?>" <?= "" == $detail['kab'] ? 'selected' : ''; ?>><?= $detail['kab']; ?></option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Kecamatan</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select " name="kec" id="select2-kecamatan" required>
                            <option value="<?= $detail['kec']; ?>" <?= "" == $detail['kec'] ? 'selected' : ''; ?>><?= $detail['kec']; ?></option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label" for="multicol-username">Kelurahan/Desa</label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select " name="kel" id="select2-kelurahan" required>
                            <option value="<?= $detail['kel']; ?>" <?= "" == $detail['kel'] ? 'selected' : ''; ?>><?= $detail['kel']; ?></option>
                        </select>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Luas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" step="0.00001" class="form-control" name="luas" placeholder="Masukkan Luas Kawasan" value="<?= $detail['luas']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Pengelola</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="pengelola" placeholder="Masukkan Pengelola" value="<?= $detail['pengelola']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Penetapan (SK Penetapan)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="penetapan" placeholder="Masukkan SK Penetapan" value="<?= $detail['penetapan']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Status Penetapan</label>
                    </div>
                    <div class="col-md-9">
                        <select name="status_penetapan" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="Nasional" <?= "Nasional" == $detail['status_penetapan'] ? 'selected' : ''; ?>>Nasional</option>
                            <option value="Provinsi" <?= "Provinsi" == $detail['status_penetapan'] ? 'selected' : ''; ?>>Provinsi</option>
                            <option value="Kabupaten" <?= "Kabupaten" == $detail['status_penetapan'] ? 'selected' : ''; ?>>Kabupaten</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Peringkat (SK Pemeringkatan)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="peringkat" placeholder="Masukkan SK Pemeringkatan" value="<?= $detail['peringkat']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Status Pemeringkatan</label>
                    </div>
                    <div class="col-md-9">
                        <select name="status_pemeringkatan" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="Nasional" <?= "Nasional" == $detail['status_pemeringkatan'] ? 'selected' : ''; ?>>Nasional</option>
                            <option value="Provinsi" <?= "Provinsi" == $detail['status_pemeringkatan'] ? 'selected' : ''; ?>>Provinsi</option>
                            <option value="Kabupaten" <?= "Kabupaten" == $detail['status_pemeringkatan'] ? 'selected' : ''; ?>>Kabupaten</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Tataguna Lahan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" name="tataguna_lahan" placeholder="Masukkan Tataguna Lahan"><?= $detail['tataguna_lahan']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Utara</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="batas_utara" placeholder="Masukkan Batas Utara" value="<?= $detail['batas_utara']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Selatan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="batas_selatan" placeholder="Masukkan Batas Selatan" value="<?= $detail['batas_selatan']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Timur</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="batas_timur" placeholder="Masukkan Batas Timur" value="<?= $detail['batas_timur']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Barat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="batas_barat" placeholder="Masukkan Batas Barat" value="<?= $detail['batas_barat']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Ancaman</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" name="ancaman" placeholder="Masukkan Ancaman"><?= $detail['ancaman']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Potensi Ancaman</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" name="potensi_ancaman" placeholder="Masukkan Potensi Ancaman"><?= $detail['potensi_ancaman']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nilai Penting</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="nilai_penting" placeholder="Masukkan Nilai Penting" value="<?= $detail['nilai_penting']; ?>" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Foto</label>
                    </div>
                    <div class="col-md-9">
                        <?php if (!empty($detail['foto'])) : ?>
                            <!-- <img src="<?= base_url(); ?>/kawasan/foto/<?= $detail['foto']; ?>" class="img-fluid" width="150px" alt=""> -->
                            <!-- <small>Upload file baru untuk mengganti foto (kosongkan jika tidak ingin diubah).</small> -->
                        <?php endif; ?>
                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Peta (Jpeg/PDF)</label>
                    </div>
                    <div class="col-md-9">
                        <?php if (!empty($detail['peta'])) : ?>
                            
                            <!-- <small>Upload file baru untuk mengganti peta (kosongkan jika tidak ingin diubah).</small> -->
                        <?php endif; ?>
                        <input type="file" class="form-control" name="peta" accept=".jpg, .pdf, .jpeg" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Deskripsi</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"><?= $detail['deskripsi']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Keterangan Lain</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" name="keterangan_lain" placeholder="Keterangan Lain"><?= $detail['keterangan_lain']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Sumber Data</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="sumber_data" placeholder="Masukkan Sumber Data" value="<?= $detail['sumber_data']; ?>" />
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
                        <a href="<?= base_url('admin/kawasan'); ?>"><button type="button" class="btn btn-success me-sm-3 me-1"> Kembali</button></a>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                    <div class="right">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>