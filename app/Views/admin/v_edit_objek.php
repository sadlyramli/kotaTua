<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Edit Kategori Temuan</span>
        </h4>
        <div class="card mb-4">
            <form class="card-body" method="post" action="<?= base_url('admin/update_objek/' . $detail['id_kategori']); ?>" enctype="multipart/form-data">
                <div class="row g-3">

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Situs <span style="color: red;">*</span></label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="id_situs" class="select2 form-select" data-allow-clear="true">
                            <option value="0">-</option>
                            <?php foreach ($situs as $k) { ?>
                                <option value="<?= $k->id_situs; ?>" <?= $k->nama_objek == $detail['nama_objek'] ? 'selected' : ''; ?>><?= $k->nama_objek; ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: red;font-size: small;">*Pilih (-) Jika Kategori Ini Tidak Berada dalam Situs</span>
                    </div>

                    <!-- no_inventaris -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">No Inventaris</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="no_inventaris" class="form-control" placeholder="Masukkan No Inventaris" value="<?= $detail['no_inventaris']; ?>">
                    </div>

                    <!-- nama_objek -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nama Objek</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama_objek" class="form-control" placeholder="Masukkan Nama Objek" value="<?= $detail['nama_objek']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Kategori</label>
                    </div>
                    <div class="col-md-9">
                        <select id="multicol-country" name="kategori" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Kategori</option>
                            <option value="Benda" <?= "Benda" == $detail['kategori'] ? 'selected' : ''; ?>>Benda</option>
                            <option value="Struktur" <?= "Struktur" == $detail['kategori'] ? 'selected' : ''; ?>>Struktur</option>
                            <option value="Bangunan" <?= "Bangunan" == $detail['kategori'] ? 'selected' : ''; ?>>Bangunan</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Jenis Temuan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="jenis_temuan" class="form-control" placeholder="Masukkan Jenis Temuan" value="<?= $detail['jenis_temuan']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nama Temuan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama_temuan" class="form-control" placeholder="Masukkan Nama Temuan" value="<?= $detail['nama_temuan']; ?>">
                    </div>
                    <!-- Koordinat -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Koordinat X*</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="longitude" class="form-control" placeholder="Masukkan Koordinat X" value="<?= $detail['longitude']; ?>">
                        <span style="color: red;font-size: small;">*Input Dalam Format Decimal Degree</span>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Koordinat Y*</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="latitude" class="form-control" placeholder="Masukkan Koordinat Y" value="<?= $detail['latitude']; ?>">
                        <span style="color: red;font-size: small;">*Input Dalam Format Decimal Degree</span>
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Elevasi Z</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="elevasi" class="form-control" placeholder="Masukkan Elevasi" value="<?= $detail['elevasi']; ?>">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Penetapan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="penetapan" class="form-control" placeholder="Masukkan SK Penetapan" value="<?= $detail['penetapan']; ?>">
                    </div>
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
                        <input type="text" name="peringkat" class="form-control" placeholder="Masukkan Peringkat" value="<?= $detail['peringkat']; ?>">
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
                        <input type="text" name="status_cb_odcb" class="form-control" placeholder="Masukkan Status CB/OCDB" value="<?= $detail['status_cb_odcb']; ?>">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">ID Objek Pendaftaran Regnas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="id_objek_regnas" class="form-control" placeholder="Masukkan ID Objek Regnas" value="<?= $detail['id_objek_regnas']; ?>">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Nomor Regnas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nomor_regnas" class="form-control" placeholder="Masukkan Nomor Regnas" value="<?= $detail['nomor_regnas']; ?>">
                    </div>

                    <!-- kepemilikan, pengelola, juru_pelihara, penetapan -->
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Panjang (cm)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="panjang" class="form-control" placeholder="Masukkan Panjang" value="<?= $detail['panjang']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Lebar (cm)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="lebar" class="form-control" placeholder="Masukkan Lebar" value="<?= $detail['lebar']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Tinggi (cm)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="tinggi" class="form-control" placeholder="Masukkan Tinggi" value="<?= $detail['tinggi']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Tebal (cm)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="tebal" class="form-control" placeholder="Masukkan Tebal" value="<?= $detail['tebal']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Diameter (cm)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="diameter" class="form-control" placeholder="Masukkan Diameter" value="<?= $detail['diameter']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Kedalaman Lubang (cm)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="kedalaman_lubang" class="form-control" placeholder="Masukkan Kedalaman Lubang" value="<?= $detail['kedalaman_lubang']; ?>">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Berat (gr)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" step="0.000001" name="berat" class="form-control" placeholder="Masukkan Berat" value="<?= $detail['berat']; ?>">
                    </div>

                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Motif</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="motif" class="form-control" placeholder="Masukkan Motif" value="<?= $detail['motif']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Bahan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="bahan" class="form-control" placeholder="Masukkan Bahan" value="<?= $detail['bahan']; ?>">
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Riwayat Konservasi</label>
                    </div>
                    <div class="col-md-9">
                        <textarea type="text" name="riwayat_konservasi" class="form-control" placeholder="Masukkan Riwayat Konservasi"><?= $detail['riwayat_konservasi']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Foto</label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" id="multicol-first-name" class="form-control" name="foto" accept=".jpg, .png, .jpeg" />
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Deskripsi Temuan</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="deskripsi_temuan" class="form-control" placeholder="Masukkan Deskripsi Temuan" rows="5"><?= $detail['deskripsi_temuan']; ?></textarea>
                    </div>
                    <div class="col-md-3" style="justify-content: left; align-items: center; display: flex;">
                        <label class="form-label">Keterangan Lain</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="keterangan_lain" class="form-control" placeholder="Masukkan Keterangan Lain" rows="5"><?= $detail['keterangan_lain']; ?></textarea>
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
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>