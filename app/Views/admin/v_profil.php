<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
      <H1>Profil</H1>
      <div class="row mb-2">
         <div class="col-md">
            <div class="card">
               <div class="card-body">
                  <form method="post" class="form" enctype="multipart/form-data" action="<?= base_url('admin/update_profil/' . $user['id']) ?>">
                     <div class="card-title header-elements">
                        <h5 class="m-0 me-2">Profil Pengguna</h5>
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="<?= $profil->name; ?>">
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" rows="8" class="form-control" name="email" value="<?= $profil->email; ?>">
                     </div>
                     <div class="row">
                        <div class="col-lg-2">
                           <button type="submit" class="btn rounded-pill btn-primary">Update</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md">
            <div class="card">
               <div class="card-body">
                  <form method="post" class="form" enctype="multipart/form-data" action="<?= base_url('admin/update_password/' . $user['id']) ?>">
                     <div class="card-title header-elements">
                        <h5 class="m-0 me-2">Ubah Password</h5>
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" name="password_new">
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ketik Ulang Password Baru</label>
                        <input type="password" class="form-control" name="repassword">
                     </div>
                     <div class="row">
                        <div class="col-lg-2">
                           <button type="submit" class="btn rounded-pill btn-primary">Update</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php
   $pesan = session()->getFlashdata('pesan');
   if (!empty($pesan)) { ?>
      <div id="pesan" style="display: none;">
         <?= session()->getFlashdata('pesan'); ?>
      </div>
   <?php } ?>
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


<?= $this->endSection('content'); ?>