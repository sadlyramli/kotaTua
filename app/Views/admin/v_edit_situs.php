<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Edit Situs</span>
        </h4>
        <div class="card mb-4">
            <form class="card-body" method="post" action="<?= base_url('admin/update_situs/' . $detail['id_situs']); ?>" enctype="multipart/form-data">
                <div class="row g-3">

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Kawasan <span style="color: red;">*</span></label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="id_kawasan" class="select2 form-select" data-allow-clear="true">
                            <option value="0">-</option>
                            <?php foreach ($kawasan as $k) { ?>
                                <option value="<?= $k->id_kawasan; ?>" <?= $k->nama_objek == $detail['nama_kawasan'] ? 'selected' : ''; ?>><?= $k->nama_objek; ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: red;font-size: small;">*Pilih (-) Jika Situs Ini Belum Berada dalam Kawasan</span>
                    </div>

                    <!-- no_inventaris -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">No Inventaris</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="no_inventaris" class="form-control" value="<?= $detail['no_inventaris']; ?>" placeholder="Masukkan No Inventaris">
                    </div>

                    <!-- nama_objek -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nama Objek</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama_objek" class="form-control" value="<?= $detail['nama_objek']; ?>" placeholder="Masukkan Nama Objek">
                    </div>

                    <!-- jenis_temuan -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Jenis Temuan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="jenis_temuan" class="form-control" value="<?= $detail['jenis_temuan']; ?>" placeholder="Masukkan Jenis Temuan">
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

                    <!-- Koordinat -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Longitude</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="longitude" class="form-control" value="<?= $detail['longitude']; ?>" placeholder="Masukkan Longitude">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Latitude</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="latitude" class="form-control" value="<?= $detail['latitude']; ?>" placeholder="Masukkan Latitude">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Elevasi</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="elevasi" class="form-control" value="<?= $detail['elevasi']; ?>" placeholder="Masukkan Elevasi">
                    </div>

                    <!-- Luas -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Luas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="luas" class="form-control" value="<?= $detail['luas']; ?>" placeholder="Masukkan Luas">
                    </div>

                    <!-- kepemilikan, pengelola, juru_pelihara, penetapan -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Kepemilikan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kepemilikan" class="form-control" value="<?= $detail['kepemilikan']; ?>" placeholder="Masukkan Kepemilikan">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Pengelola</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="pengelola" class="form-control" value="<?= $detail['pengelola']; ?>" placeholder="Masukkan Pengelola">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Juru Pelihara</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="juru_pelihara" class="form-control" value="<?= $detail['juru_pelihara']; ?>" placeholder="Masukkan Juru Pelihara">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Penetapan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="penetapan" class="form-control" value="<?= $detail['penetapan']; ?>" placeholder="Masukkan SK Penetapan">
                    </div>

                    <!-- status & peringkat -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Status Penetapan</label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="status_penetapan" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="Nasional" <?= "Nasional" == $detail['status_penetapan'] ? 'selected' : ''; ?>>Nasional</option>
                            <option value="Provinsi" <?= "Provinsi" == $detail['status_penetapan'] ? 'selected' : ''; ?>>Provinsi</option>
                            <option value="Kabupaten" <?= "Kabupaten" == $detail['status_penetapan'] ? 'selected' : ''; ?>>Kabupaten</option>
                        </select>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Peringkat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="peringkat" class="form-control" value="<?= $detail['peringkat']; ?>" placeholder="Masukkan SK Pemeringkatan">
                    </div>

                    <!-- status_pemeringkatan, status_cb_ocdb, id_objek_regnas, nomor_regnas -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Status Pemeringkatan</label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="status_pemeringkatan" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="Nasional" <?= "Nasional" == $detail['status_pemeringkatan'] ? 'selected' : ''; ?>>Nasional</option>
                            <option value="Provinsi" <?= "Provinsi" == $detail['status_pemeringkatan'] ? 'selected' : ''; ?>>Provinsi</option>
                            <option value="Kabupaten" <?= "Kabupaten" == $detail['status_pemeringkatan'] ? 'selected' : ''; ?>>Kabupaten</option>
                        </select>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Status CB/OCDB</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="status_cb_odcb" class="form-control" value="<?= $detail['status_cb_odcb']; ?>" placeholder="Masukkan Status CB/OCDB">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">ID Objek Pendaftaran Regnas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="id_objek_regnas" class="form-control" value="<?= $detail['id_objek_regnas']; ?>" placeholder="Masukkan ID Objek Regnas">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nomor Regnas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nomor_regnas" class="form-control" value="<?= $detail['nomor_regnas']; ?>" placeholder="Masukkan Nomor Regnas">
                    </div>

                    <!-- textarea untuk text field -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Riwayat Perlindungan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="riwayat_perlindungan" class="form-control" placeholder="Masukkan Riwayat Perlindungan"><?= $detail['riwayat_perlindungan']; ?></textarea>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Riwayat Pengembangan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="riwayat_pengembangan" class="form-control" placeholder="Masukkan Riwayat Pengembangan"><?= $detail['riwayat_pengembangan']; ?></textarea>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Riwayat Pemanfaatan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="riwayat_pemanfaatan" class="form-control" placeholder="Masukkan Riwayat Pemanfaatan"><?= $detail['riwayat_pemanfaatan']; ?></textarea>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Tataguna Lahan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="tataguna_lahan" class="form-control" placeholder="Masukkan Tataguna Lahan"><?= $detail['tataguna_lahan']; ?></textarea>
                    </div>

                    <!-- batas wilayah -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Utara</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="batas_utara" class="form-control" value="<?= $detail['batas_utara']; ?>" placeholder="Masukkan Batas Utara">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Selatan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="batas_selatan" class="form-control" value="<?= $detail['batas_selatan']; ?>" placeholder="Masukkan Batas Selatan">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Timur</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="batas_timur" class="form-control" value="<?= $detail['batas_timur']; ?>" placeholder="Masukkan Batas Timur">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Batas Barat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="batas_barat" class="form-control" value="<?= $detail['batas_barat']; ?>" placeholder="Masukkan Batas Barat">
                    </div>

                    <!-- kondisi -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Kondisi Keterawatan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="kondisi_keterawatan" class="form-control" placeholder="Masukkan Kondisi Keterawatan"><?= $detail['kondisi_keterawatan']; ?></textarea>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Ancaman</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="ancaman" class="form-control"  placeholder="Masukkan Ancaman"><?= $detail['ancaman']; ?></textarea>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Potensi Ancaman</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="potensi_ancaman" class="form-control" value="<?= $detail['potensi_ancaman']; ?>" placeholder="Masukkan Potensi Ancaman"></textarea>
                    </div>

                    <!-- nilai_penting -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nilai Penting</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="nilai_penting" class="form-control" placeholder="Masukkan Nilai Penting"><?= $detail['nilai_penting']; ?></textarea>
                    </div>

                    <!-- file upload -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Foto</label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" id="multicol-first-name" class="form-control" name="foto" accept=".jpg, .png, .jpeg" />
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Peta (Jpeg/PDF)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" id="multicol-first-name" class="form-control" name="peta" accept=".jpg, .pdf, .jpeg" />
                    </div>

                    <!-- deskripsi -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Deskripsi</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="deskripsi" class="form-control" value="<?= $detail['deskripsi']; ?>" placeholder="Masukkan Deskripsi"></textarea>
                    </div>

                    <!-- keterangan_lain -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Keterangan Lain</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="keterangan_lain" class="form-control" placeholder="Masukkan Keterangan Lain"><?= $detail['keterangan_lain']; ?></textarea>
                    </div>

                    <!-- sumber_data -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Sumber Data</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="sumber_data" class="form-control" value="<?= $detail['sumber_data']; ?>" placeholder="Masukkan Sumber Data">
                    </div>
                </div>
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
            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div id="error" style="display: none;">
                    <?php foreach ($errors as $key => $value) { ?>
                        <?= esc($value) ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>