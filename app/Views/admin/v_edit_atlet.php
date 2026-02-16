<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Edit Atlet</span> <?= $getCabor['nama_cabor']; ?>
        </h4>
        <div class="card mb-4">
            <div class="customer-avatar-section">
                <div class="d-flex align-items-center flex-column">
                    <img style="border: 2px solid grey;"
                    class="img-fluid rounded my-3"
                    src="<?= base_url(); ?>/foto_atlet/<?= $detail['foto_atlet']; ?>"
                    height="110"
                    width="110"
                    alt="User avatar" />
                    <div class="customer-info text-center">
                    <h4 class="mb-1"><?= $detail['nama_atlet']; ?></h4>
                    <!-- <small>Customer ID #634759</small> -->
                    <button type="button" data-bs-toggle="modal"
                    data-bs-target="#modal" class="btn btn-secondary btn-sm">Ganti Foto Profil</button>
                    </div>
                </div>
            </div>
            <hr class="my-2 mx-n4" />
            <form class="card-body" method="post" action="<?= base_url('admin/update_atlet/' . $detail['id_atlet']); ?>" enctype="multipart/form-data">
            <h6 class="fw-normal">A. Data Diri</h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">1. Nama</label>
                        <input type="text" id="multicol-username" class="form-control" name="nama_atlet" value="<?= $detail['nama_atlet']; ?>" placeholder="Masukkan Nama" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">7. Domisili Saat Ini</label>
                        <input type="text" id="multicol-username" class="form-control" name="domisili_ini_atlet" value="<?= $detail['domisili_ini_atlet']; ?>" placeholder="Masukkan Domisili Saat Ini" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">2. Tanggal Lahir</label>
                        <input type="date" id="multicol-username" class="form-control" name="tgl_lhr_atlet" value="<?= $detail['tgl_lhr_atlet']; ?>" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">8. Alamat Sesuai KTP</label>
                        <textarea type="text" id="multicol-username" class="form-control" name="domisili_ktp_atlet" ><?= $detail['domisili_ktp_atlet']; ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">3. Tempat Lahir</label>
                        <input type="text" id="multicol-username" class="form-control" name="tmpt_lhr_atlet" value="<?= $detail['tmpt_lhr_atlet']; ?>" placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="kecamatan">9. Kecamatan Sesuai KTP</label>
                        <select class="form-select " name="kec_ktp_atlet" id="select2-kecamatan">
                            <option value="<?= $detail['kec_ktp_atlet']; ?>" <?= "3" == $detail['kec_ktp_atlet'] ? 'selected' : ''; ?>><?= $detail['kec_ktp_atlet']; ?></option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-country">4. Jenis Kelamin</label>
                        <select id="multicol-country" name="jk_atlet" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Jenis Kelamin</option>
                            <option value="Pria" <?= "Pria" == $detail['jk_atlet'] ? 'selected' : ''; ?>>Pria</option>
                            <option value="Wanita" <?= "Wanita" == $detail['jk_atlet'] ? 'selected' : ''; ?>>Wanita</option>
                        </select>
                    </div>  
                    <div class="form-group col-md-6">
                        <label class="form-label" for="kelurahan_desa">10. Kelurahan/Desa Sesuai KTP</label>
                        <select class="form-select " name="kel_ktp_atlet" id="select2-kelurahan">
                            <option value="<?= $detail['kel_ktp_atlet']; ?>" <?= "3" == $detail['kel_ktp_atlet'] ? 'selected' : ''; ?>><?= $detail['kel_ktp_atlet']; ?></option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-country">5. Agama</label>
                        <select id="multicol-country" name="agama_atlet" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Agama</option>
                            <option value="Islam" <?= "Islam" == $detail['agama_atlet'] ? 'selected' : ''; ?>>Islam</option>
                            <option value="Kristen" <?= "Kristen" == $detail['agama_atlet'] ? 'selected' : ''; ?>>Kristen</option>
                            <option value="Katolik" <?= "Katolik" == $detail['agama_atlet'] ? 'selected' : ''; ?>>Katolik</option>
                            <option value="Hindu" <?= "Hindu" == $detail['agama_atlet'] ? 'selected' : ''; ?>>Hindu</option>
                            <option value="Budha" <?= "Budha" == $detail['agama_atlet'] ? 'selected' : ''; ?>>Budha</option>
                            <option value="Konghucu" <?= "Konghucu" == $detail['agama_atlet'] ? 'selected' : ''; ?>>Konghucu</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">11. Nomor HP</label>
                        <input type="text" id="multicol-username" class="form-control" name="no_hp_atlet" value="<?= $detail['no_hp_atlet']; ?>" placeholder="Masukkan Nomor HP" />
                    </div>  
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-username">6. Pekerjaan</label>
                        <input type="text" id="multicol-username" class="form-control" name="pekerjaan_atlet" value="<?= $detail['pekerjaan_atlet']; ?>" placeholder="Masukkan Pekerjaan" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-country">12. Status</label>
                        <select id="multicol-country" name="status_hidup_atlet" class="form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Status</option>
                            <option value="1" <?= "1" == $detail['status_hidup_atlet'] ? 'selected' : ''; ?>>Masih Hidup</option>
                            <option value="0" <?= "0" == $detail['status_hidup_atlet'] ? 'selected' : ''; ?>>Meninggal</option>
                        </select>
                    </div>                      
                    <div class="col-md-12">
                        <label class="form-label" for="multicol-first-name">Foto Profil</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="foto_atlet" accept=".jpg, .png, .jpeg"/>
                    </div>
                </div>
                <hr class="my-4 mx-n4" />
                <h6 class="fw-normal">B. Jenjang Pendidikan</h6>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">SD</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="sd_atlet" value="<?= $detail['sd_atlet']; ?>" placeholder="Masukkan Nama SD" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Tamat SD</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="thn_sd_atlet" value="<?= $detail['thn_sd_atlet']; ?>" placeholder="Masukkan Tahun Lulus/Belum Lulus" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Ijazah SD (Fotocopy Ijazah yang Dilegalisir)</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="ijazah_sd_atlet" accept=".pdf"/>
                        <?php if(($detail['ijazah_sd_atlet']) != "-") {?>
                            <a href="<?= base_url(); ?>/ijazah_atlet/<?= $detail['ijazah_sd_atlet']; ?>" class="btn btn-sm btn-primary" target="_blank">Lihat</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">SMP</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="smp_atlet" value="<?= $detail['smp_atlet']; ?>" placeholder="Masukkan Nama SMP" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Tamat SMP</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="thn_smp_atlet" value="<?= $detail['thn_smp_atlet']; ?>" placeholder="Masukkan Tahun Lulus/Belum Lulus" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Ijazah SMP (Fotocopy Ijazah yang Dilegalisir)</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="ijazah_smp_atlet" accept=".pdf"/>
                        <?php if(($detail['ijazah_smp_atlet']) != "-") {?>
                            <a href="<?= base_url(); ?>/ijazah_atlet/<?= $detail['ijazah_smp_atlet']; ?>" class="btn btn-sm btn-primary" target="_blank">Lihat</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">SMA</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="sma_atlet" value="<?= $detail['sma_atlet']; ?>" placeholder="Masukkan Nama SMA" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Tamat SMA</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="thn_sma_atlet" value="<?= $detail['thn_sma_atlet']; ?>" placeholder="Masukkan Tahun Lulus/Belum Lulus" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Ijazah SMA (Fotocopy Ijazah yang Dilegalisir)</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="ijazah_sma_atlet" accept=".pdf"/>
                        <?php if(($detail['ijazah_sma_atlet']) != "-") {?>
                            <a href="<?= base_url(); ?>/ijazah_atlet/<?= $detail['ijazah_sma_atlet']; ?>" class="btn btn-sm btn-primary" target="_blank">Lihat</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">S1</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="s1_atlet" value="<?= $detail['s1_atlet']; ?>" placeholder="Masukkan Nama S1" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Tamat S1</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="thn_s1_atlet" value="<?= $detail['thn_s1_atlet']; ?>" placeholder="Masukkan Tahun Lulus/Belum Lulus" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Ijazah S1 (Fotocopy Ijazah yang Dilegalisir)</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="ijazah_s1_atlet" accept=".pdf"/>
                        <?php if(($detail['ijazah_s1_atlet']) != "-") {?>
                            <a href="<?= base_url(); ?>/ijazah_atlet/<?= $detail['ijazah_s1_atlet']; ?>" class="btn btn-sm btn-primary" target="_blank">Lihat</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">S2</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="s2_atlet" value="<?= $detail['s2_atlet']; ?>" placeholder="Masukkan Nama S2" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Tamat S2</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="thn_s2_atlet" value="<?= $detail['thn_s2_atlet']; ?>" placeholder="Masukkan Tahun Lulus/Belum Lulus" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Ijazah S2 (Fotocopy Ijazah yang Dilegalisir)</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="ijazah_s2_atlet" accept=".pdf"/>
                        <?php if(($detail['ijazah_s2_atlet']) != "-") {?>
                            <a href="<?= base_url(); ?>/ijazah_atlet/<?= $detail['ijazah_s2_atlet']; ?>" class="btn btn-sm btn-primary" target="_blank">Lihat</a>
                        <?php } ?>
                    </div>
                </div>
                <hr class="my-4 mx-n4" />
                <h6 class="fw-normal">C. Data Olahraga</h6>
                <div class="row g-3">
                    <!-- <div class="col-md-6">
                        <label class="form-label" for="multicol-country">Cabang Olahraga</label>
                        <select id="multicol-country" name="cabor_atlet" class="select2 form-select" data-allow-clear="true">
                            <option value="" hidden="true">Pilih Cabang Olahraga</option>
                            <?php foreach($cabor as $k) {?>
                                <option value="<?= $k->id_cabor; ?>"><?= $k->nama_cabor; ?></option>
                            <?php } ?>
                        </select>
                    </div> -->
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-country">Cabang Olahraga</label>
                        <input type="text" class="form-select" name="" value="<?= $getCabor['nama_cabor']; ?>" readonly>
                        <input type="hidden" name="cabor_atlet" value="<?= $getCabor['id_cabor']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-country">Nama Club</label>
                        <select id="multicol-countr" name="id_club_atlet" class="select2 form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Club</option>
                            <?php foreach($club as $key => $k) {?>
                                <option value="<?= $k->id_club; ?>" <?= $k->id_club == $detail['id_club_atlet'] ? 'selected' : ''; ?>><?= $k->nama_club; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicola -first-name">Kelas Tanding Saat Ini</label>
                        <!-- <input type="text" id="multicol-first-name" class="form-control" name="kelas_tanding_atlet"  value="<?= session()->get('kelas_tanding_atlet') ?? '';?>"placeholder="Masukkan Kelas Tanding Atlet" /> -->
                        <select id="multicola-countr" name="kelas_tanding_atlet" class="select3 form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih Kelas Tanding</option>
                            <?php foreach($kat as $key => $k) {?>
                                <option value="<?= $k->nama_kat; ?>" <?= $k->nama_kat == $detail['kelas_tanding_atlet'] ? 'selected' : ''; ?>><?= $k->nama_kat; ?></option>
                            <?php } ?>
                        </select>
                    </div>    
                </div>
                <hr class="my-2 mx-n4"/>
                <div class="col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                    <div class="left">
                        <a href="<?= base_url('daftar_cabor/' . $getCabor['slug']); ?>"><button type="button" class="btn btn-success me-sm-3 me-1"><i class="fas fa-arrow-left"></i> Kembali</button></a>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                    <div class="right">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Ganti Foto Profil</h3>
                    <!-- <p>Add new card to complete payment</p> -->
                </div>
                <form id="addNewCCForm" class="row g-3" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/update_foto_atlet/' . $detail['id_atlet']) ?>">
                    <div class="col-12">
                    <div class="mb-3">
                            <label for="formFile" class="form-label">Import Foto dibawah</label>
                            <input class="form-control" type="file" name="foto_atlet" accept=".jpg, .png, .jpeg" id="formFile" />
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                    <div class="left">
                        
                    </div>
                    <div class="right">
                        <a href="<?= base_url('admin/tambah_prestasi_atlet/' . $detail['id_atlet']); ?>"><button type="button" class="btn btn-success" style="margin-right: 20px;"> Tambah Prestasi</button></a>
                    </div>
                </div>
                <table class="dt-responsive table-sm table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kejuaraan yang pernah diikuti</th>
                        <th>Prestasi Olahraga</th>
                        <th>Tahun</th>
                        <th>Kelas Bertanding</th>
                        <th>Medali</th>
                        <th>Sertifikat</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        if (is_array($detail_prestasi_a) || is_object($detail_prestasi_a)) {
                            foreach ($detail_prestasi_a as $g){
                            ?>
                            <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $g->kejuaraan_diikuti; ?></td>
                            <td><?= $g->prestasi_juara; ?></td>
                            <td><?= $g->tahun; ?></td>
                            <td><?= $g->kelas_bertanding; ?></td>
                            <td><?= $g->medali; ?></td>
                            <td>
                                <?php if(($g->sertifikat) != "-") {?>
                                    <a href="<?= base_url(); ?>/sertifikat/<?= $g->sertifikat; ?>" target="_blank">Lihat</a>
                                <?php }else {?>
                                    Tidak Ada
                                <?php } ?>
                            </td>
                            <td>
                            <a href="<?= base_url('admin/edit_prestasi_atlet/' . $g->id_prestasi_atlet); ?>"><button type="button" class="btn btn-sm btn-warning" ><i class="fas fa-edit"></i></button></a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal<?= $g->id_prestasi_atlet; ?>"><i class="fas fa-trash"></i></button>
                            </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
                <?php
                $pesan = session()->getFlashdata('pesan');
                if (!empty($pesan)) { ?>
                <div id="pesan" style="display: none;">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php } ?>
            </div>
        </div>
    
    </div>
</div>


<?php foreach ($detail_atlet as $key => $g){ ?>
<div class="modal fade" id="modal<?= $g->id_prestasi_atlet; ?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
    <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
        <h3>Anda Yakin ?</h3>
        <!-- <p>Add new card to complete payment</p> -->
        </div>
        <div class="col-12 text-center mt-4">
            <a href="<?= base_url('admin/delete_prestasi_atlet/' . $g->id_prestasi_atlet); ?>"><button type="submit" class="btn btn-danger me-sm-3 me-1"><i class="fas fa-trash"></i> Hapus</button></a>
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
            Batal
            </button>
        </div>
    </div>
    </div>
</div>
</div>
<?php } ?>

<?php foreach ($detail_atlet as $key => $g){ ?>
<div class="modal fade" id="modal_edit<?= $g->id_prestasi_atlet; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-first-name">Kejuaraan yang Pernah Diikuti</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="kejuaraan_diikuti" placeholder="Masukkan Kejuaraan Yang Pernah Diikuti" />
                    </div>    
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-first-name">Prestasi Olahraga</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="prestasi_juara" placeholder="Masukkan Prestasi Olahraga" />
                    </div>    
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-first-name">Tahun</label>
                        <input type="number" id="multicol-first-name" class="form-control" name="tahun" placeholder="Masukkan Tahun Kejuaraan" />
                    </div>    
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-first-name">Kelas Bertanding</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="kelas_bertanding" placeholder="Masukkan Kelas Bertanding" />
                    </div>    
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Medali</label>
                        <input type="text" id="multicol-first-name" class="form-control" name="medali" placeholder="Masukkan Medali" />
                    </div>    
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-first-name">Sertifikat</label>
                        <input type="file" id="multicol-first-name" class="form-control" name="sertifikat" placeholder="Masukkan Kelas Tanding Atlet" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="multicol-country">Tingkat</label>
                        <select id="multicol-countr" name="tingkat_prestasi" class="select_club form-select" data-allow-clear="true">
                            <option value="" hidden>Pilih</option>>
                                <option value="Kecamatan" <?= "Kecamatan" == session('tingkat_prestasi') ? 'selected' : ''; ?>>Kecamatan</option>
                                <option value="Kabupaten" <?= "Kabupaten" == session('tingkat_prestasi') ? 'selected' : ''; ?>>Kabupaten</option>
                                <option value="Provinsi" <?= "Provinsi" == session('tingkat_prestasi') ? 'selected' : ''; ?>>Provinsi</option>
                                <option value="Nasional" <?= "Nasional" == session('tingkat_prestasi') ? 'selected' : ''; ?>>Nasional</option>
                        </select>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?= $this->endSection('content'); ?>