<?php

namespace App\Controllers;

use App\Models\Model_admin;
use App\Models\Model_auth;
use App\Models\ImageModels;
use \Mpdf\Mpdf;
use Dompdf\Dompdf;
use Dompdf\Options;
// use Random

class Admin extends BaseController
{
    protected const PATH = FCPATH . 'upload/';
    protected $m_admin;
    protected $m_auth;
    public function __construct()
    {
        $this->m_admin = new Model_admin();
        $this->m_auth = new Model_auth();
        helper('form');
        // helper('text');
        // $RandomString = random_string('alnum', 16); // 'alnum' menghasilkan kombinasi angka dan huruf, panjang 16
        // echo $RandomString;
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            // 'daftar_cabor' => $this->m_admin->findAll(),
            // 'user_validasi' => $this->m_admin->get_users_validasi()->getResult(),
            // 'c_validasi_user' => $this->m_admin->c_validasi_user(),
            // 'data' => $this->m_admin->get_data()->getResult(),
            // 'count_grafik' => $this->m_admin->count_grafik(),
            // 'isi' => 'admin/v_dashboard_admin',
        );

        return view('admin/v_dashboard', $data);
    }

    public function profil($id)
    {
        $data = array(
            'title' => 'Profil',
            'profil' => $this->m_admin->get_profil(),
            'user' => $this->m_admin->detail_user($id),
        );

        return view('admin/v_profil', $data);
    }

    public function update_profil($id)
    {
        $user = $this->m_admin->detail_user($id);

        $data = array(
            'id' => $id,
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        );
        $this->m_admin->update_password($data);

        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('admin/profil/' . session()->id));
    }


    public function update_password($id)
    {
        $user = $this->m_admin->detail_user($id);
        if ($this->validate([
            'repassword'   => [
                'label'         => 'Repeat Password',
                'rules'         => 'required|matches[password_new]',
                'errors'        => [
                    'required'  => '{field} Wajib Diisi !!!',
                    'matches'   => '{field} Tidak Sama',
                ]
            ],
        ])) {
            $newPassword = $this->request->getPost('password_new');
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $data = array(
                'id' => $id,
                'password' => $hashedPassword
            );
            $this->m_admin->update_password($data);


            session()->setFlashdata('pesan', 'Password Berhasil Di Update !!!');
            return redirect()->to(base_url('admin/profil/' . session()->id));
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/profil/' . session()->id))->withInput();
        }
    }

    public function users()
    {
        $data = array(
            'title' => 'Daftar Users',
            'users' => $this->m_admin->get_users()->getResult(),
            'user_validasi' => $this->m_admin->get_users_validasi()->getResult(),
            'daftar_cabor' => $this->m_admin->findAll(),
            'c_validasi_user' => $this->m_admin->c_validasi_user(),
            // 'isi' => 'admin/v_cabor',
        );

        return view('admin/v_daftar_users', $data);
    }

    public function validasi_users()
    {
        $data = array(
            'title' => 'Validasi Users',
            'user_validasi' => $this->m_admin->get_users_validasi()->getResult(),
            'daftar_cabor' => $this->m_admin->findAll(),
            'c_validasi_user' => $this->m_admin->c_validasi_user(),
            // 'isi' => 'admin/v_cabor',
        );

        return view('admin/v_daftar_validasi_user', $data);
    }

    public function acc_users($id)
    {

        $data = array(
            'id' => $id,
            'status' => 2,
        );
        $this->m_admin->acc_user($data);

        session()->setFlashdata('pesan', 'User Berhasil Di Validasi !!!');
        return redirect()->to(base_url('admin/users'));
    }

    public function tolak_users($id)
    {

        $data = array(
            'id' => $id,
        );
        $this->m_admin->tolak_user($data);

        session()->setFlashdata('pesan', 'User Berhasil Di Tolak !!!');
        return redirect()->to(base_url('admin/users'));
    }

    public function tambah_users()
    {
        $data = array(
            'title' => 'Tambah Users',
            'user_validasi' => $this->m_admin->get_users_validasi()->getResult(),
            'daftar_cabor' => $this->m_admin->findAll(),
            'c_validasi_user' => $this->m_admin->c_validasi_user(),
            // 'isi' => 'admin/v_cabor',
        );

        return view('admin/v_tambah_users', $data);
    }
    public function edit_users($id)
    {
        $data = array(
            'title' => 'Edit Users',
            'det_users' => $this->m_admin->det_users($id),
            'daftar_cabor' => $this->m_admin->findAll(),
            'user_validasi' => $this->m_admin->get_users_validasi()->getResult(),
            'c_validasi_user' => $this->m_admin->c_validasi_user(),
            // 'isi' => 'admin/v_cabor',
        );

        return view('admin/v_edit_users', $data);
    }

    public function save_users()
    {
        if ($this->validate(
            [
                'repassword' => [
                    'label' => 'Retype Password',
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'matches' => '{field} Tidak Sama'
                    ]
                ],
            ]
        )) {

            $password = $this->request->getPost('password');

            $data = array(
                'nama_lengkap' => $this->request->getpost('nama_lengkap'),
                'password' => md5($password),
                'email' => $this->request->getpost('email'),
                'role_id' => $this->request->getpost('role_id'),
                'status' => 2,

            );

            $this->m_auth->save_register($data);

            session()->setFlashdata('pesan', 'Register Berhasil');
            return redirect()->to(base_url('admin/users'));
        } else {
            // $validation = \Config\Services::validation();
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/users'));
        }
    }

    public function update_users($id)
    {
        $data = array(
            'id' => $id,
            'nama_lengkap' => $this->request->getpost('nama_lengkap'),
            'email' => $this->request->getpost('email'),
            'role_id' => $this->request->getpost('role_id'),
        );
        $this->m_admin->update_users($data);

        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('admin/users'));
    }

    public function delete_users($id)
    {

        $data = array(
            'id' => $id,
        );
        $this->m_admin->tolak_user($data);

        session()->setFlashdata('pesan', 'User Berhasil Di Tolak !!!');
        return redirect()->to(base_url('admin/users'));
    }


    public function kawasan()
    {
        $data = array(
            'title' => 'Kawasan',
            'kawasan' => $this->m_admin->get_kawasan()->getResult(),
        );

        return view('admin/v_kawasan', $data);
    }

    public function tambah_kawasan()
    {
        $data = array(
            'title' => 'Tambah Kawasan',
            'kawasan' => $this->m_admin->get_kawasan()->getResult(),
        );

        return view('admin/v_tambah_kawasan', $data);
    }


    public function simpan_kawasan()
    {
        if ($this->validate([
            'foto'    => [
                'label'     => 'Foto',
                'rules'     => 'ext_in[foto,jpg,jpeg,png]|mime_in[foto,image/jpeg,image/png]',
                'errors'    => [
                    'ext_in' => 'Format {field} Wajib JPG/PNG',
                    'mime_in'  => '{field} tidak valid, hanya mendukung file gambar (JPEG/PNG).',
                ]
            ],
            'peta'    => [
                'label'     => 'Peta',
                'rules' => 'ext_in[peta,jpg,jpeg,png,pdf]|mime_in[peta,image/jpeg,image/png,application/pdf]',
                'errors'    => [
                    'ext_in' => 'Format {field} Wajib JPG/PNG/PDF',
                    'mime_in'  => '{field} tidak valid, hanya mendukung file gambar (JPEG/PNG/PDF).',
                ]
            ]
        ])) {
            $nama_objek = $this->request->getPost('nama_objek');

            // === Upload Foto ===

            $foto = $this->request->getFile('foto');
            if ($foto->isValid()) {
                $namaFileAman = preg_replace('/[^A-Za-z0-9_\-]/', '_', $nama_objek);
                $fotoName = "foto_kawasan_" . $namaFileAman . "." . $foto->getExtension();
                $foto->move('kawasan/foto/', $fotoName);
            } else {
                $fotoName = '-';
            }

            // === Upload Peta ===
            $peta = $this->request->getFile('peta');
            if ($peta->isValid()) {
                $namaFileAman = preg_replace('/[^A-Za-z0-9_\-]/', '_', $nama_objek);
                $petaName = "peta_kawasan_" . $namaFileAman . "." . $peta->getExtension();
                $peta->move('kawasan/peta/', $petaName);
            } else {
                $petaName = '-';
            }

            $provinsiId = $this->request->getPost('prov');
            $kabupatenId = $this->request->getPost('kab');
            $kecamatanId = $this->request->getPost('kec');
            $kelurahanId = $this->request->getPost('kel');

            $provinsiFile = file_get_contents('wilayah_indonesia/provinsi.json');
            $provinsiData = json_decode($provinsiFile, true);

            $provinsi = null;
            foreach ($provinsiData as $prov) {
                if ($prov['id'] == $provinsiId) {
                    $provinsi = $prov;
                    break;
                }
            }

            $kabupatenFile = file_get_contents('wilayah_indonesia/kabupaten/' . $provinsiId . '.json');
            $kabupatenData = json_decode($kabupatenFile, true);

            $kabupaten = null;
            foreach ($kabupatenData as $kab) {
                if ($kab['id'] == $kabupatenId) {
                    $kabupaten = $kab;
                    break;
                }
            }

            $kecamatanFile = file_get_contents('wilayah_indonesia/kecamatan/' . $kabupatenId . '.json');
            $kecamatanData = json_decode($kecamatanFile, true);

            $kecamatan = null;
            foreach ($kecamatanData as $kec) {
                if ($kec['id'] == $kecamatanId) {
                    $kecamatan = $kec;
                    break;
                }
            }

            $kelurahanFile = file_get_contents('wilayah_indonesia/kelurahan/' . $kecamatanId . '.json');
            $kelurahanData = json_decode($kelurahanFile, true);

            $kelurahan = null;
            foreach ($kelurahanData as $kel) {
                if ($kel['id'] == $kelurahanId) {
                    $kelurahan = $kel;
                    break;
                }
            }

            $provinsi = $provinsi['nama'];
            $prov = ucfirst(strtolower($provinsi));

            $kabupaten = $kabupaten['nama'];
            $kab = ucfirst(strtolower($kabupaten));

            $kecamatan = $kecamatan['nama'];
            $kec = ucfirst(strtolower($kecamatan));

            $kelurahan = $kelurahan['nama'];
            $kel = ucfirst(strtolower($kelurahan));

            $data = array(
                'nama_objek' => $nama_objek,
                'kategori' => "Kawasan",
                'jenis_temuan' => "Situs",
                'prov' => $prov,
                'kab' => $kab,
                'kec' => $kec,
                'kel' => $kel,
                'luas' => $this->request->getPost('luas'),
                'pengelola' => $this->request->getPost('pengelola'),
                'penetapan' => $this->request->getPost('penetapan'),
                'status_penetapan' => $this->request->getPost('status_penetapan'),
                'peringkat' => $this->request->getPost('peringkat'),
                'status_pemeringkatan' => $this->request->getPost('status_pemeringkatan'),
                'tataguna_lahan' => $this->request->getPost('tataguna_lahan'),
                'batas_utara' => $this->request->getPost('batas_utara'),
                'batas_selatan' => $this->request->getPost('batas_selatan'),
                'batas_timur' => $this->request->getPost('batas_timur'),
                'batas_barat' => $this->request->getPost('batas_barat'),
                'ancaman' => $this->request->getPost('ancaman'),
                'potensi_ancaman' => $this->request->getPost('potensi_ancaman'),
                'nilai_penting' => $this->request->getPost('nilai_penting'),
                'foto' => $fotoName,
                'peta' => $petaName,
                'deskripsi' => $this->request->getPost('deskripsi'),
                'keterangan_lain' => $this->request->getPost('keterangan_lain'),
                'sumber_data' => $this->request->getPost('sumber_data'),
            );
            // dd($data);
            $this->m_admin->simpan_kawasan($data);

            session()->setFlashdata('pesan', 'Data Berhasil Di Simpan !!!');
            return redirect()->to(base_url('admin/kawasan'));
        } else {
            // Jika validasi gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/tambah_kawasan'))->withInput();
        }
    }

    public function edit_kawasan($id_kawasan)
    {
        $data = array(
            'title' => 'Edit Kawasan',
            'detail' => $this->m_admin->detail_kawasan($id_kawasan),
        );

        return view('admin/v_edit_kawasan', $data);
    }

    public function update_kawasan($id)
    {
        // 1. Validasi Disesuaikan untuk Kawasan
        if ($this->validate([
            'foto'     => [
                'label'     => 'Foto',
                'rules'     => 'ext_in[foto,jpg,jpeg,png]|mime_in[foto,image/jpeg,image/png]',
                'errors'    => [
                    'ext_in' => 'Format {field} Wajib JPG/PNG',
                    'mime_in'   => '{field} tidak valid, hanya mendukung file gambar (JPEG/PNG).',
                ]
            ],
            'peta'     => [
                'label'     => 'Peta',
                'rules'     => 'ext_in[peta,jpg,jpeg,png,pdf]|mime_in[peta,image/jpeg,image/png,application/pdf]', // Menambahkan PDF mime type
                'errors'    => [
                    'ext_in' => 'Format {field} Wajib JPG/PNG/PDF',
                    'mime_in'   => '{field} tidak valid, hanya mendukung file gambar (JPEG/PNG) atau PDF.',
                ]
            ],
        ])) {

            $image = $this->request->getFile('foto');
            $peta = $this->request->getFile('peta');
            $nama_objek = $this->request->getPost('nama_objek');

            // 2. Mengambil data lama KAWASAN
            // (Pastikan Anda punya method ini di m_admin, atau ganti dgn model Anda)
            $post = $this->m_admin->detail_kawasan($id);

            // 3. Mengambil data file lama (Foto)
            // (Asumsi nama methodnya ...Kawasan...)
            $existingUserData = $this->m_admin->getImageKawasanById($id);

            if ($image && $image->isValid() && !$image->hasMoved()) {
                if (!empty($post['foto']) && $post['foto'] != "-") {
                    // 4. Path disesuaikan ke folder 'kawasan'
                    @unlink('kawasan/foto/' . $post['foto']);
                }

                $namaFileAman = preg_replace('/[^A-Za-z0-9_\-]/', '_', $nama_objek);
                // 5. Nama file disesuaikan
                $fotoName = "foto_kawasan_" . $namaFileAman . "." . $image->getExtension();
                // 6. Path move disesuaikan
                $image->move('kawasan/foto/', $fotoName);
            } else {
                $fotoName = $existingUserData['foto'] ?? null;
            }


            // 7. Mengambil data file lama (Peta)
            $existingPeta = $this->m_admin->getPetaKawasanById($id);
            if ($peta && $peta->isValid() && !$peta->hasMoved()) {
                if (!empty($post['peta']) && $post['peta'] != "-") {
                    // 8. Path disesuaikan ke folder 'kawasan'
                    @unlink('kawasan/peta/' . $post['peta']);
                }

                $namaFileAman = preg_replace('/[^A-Za-z0-9_\-]/', '_', $nama_objek);
                // 9. Nama file disesuaikan
                $petaName = "peta_kawasan_" . $namaFileAman . "." . $peta->getExtension();
                // 10. Path move disesuaikan
                $peta->move('kawasan/peta/', $petaName);
            } else {
                $petaName = $existingPeta['peta'] ?? null;
            }


            // === Ambil Wilayah ===
            // (Logika ini saya salin persis dari update_situs Anda)
            // (Pastikan di form edit_kawasan Anda menggunakan name="prov", "kab", dst.
            // Jika Anda pakai "id_provinsi", sesuaikan getPost() di bawah ini)
            $provinsiId   = $this->request->getPost('prov');
            $kabupatenId = $this->request->getPost('kab');
            $kecamatanId = $this->request->getPost('kec');
            $kelurahanId = $this->request->getPost('kel');

            if (is_numeric($kecamatanId) && is_numeric($kelurahanId) && is_numeric($kabupatenId) && is_numeric($provinsiId)) {
                // (Logika JSON file Anda disalin ke sini...)
                $provinsiFile = file_get_contents('wilayah_indonesia/provinsi.json');
                $provinsiData = json_decode($provinsiFile, true);
                $provinsi = null;
                foreach ($provinsiData as $prov) {
                    if ($prov['id'] == $provinsiId) {
                        $provinsi = $prov['nama'];
                        break;
                    }
                }

                $kabupatenFile = file_get_contents('wilayah_indonesia/kabupaten/' . $provinsiId . '.json');
                $kabupatenData = json_decode($kabupatenFile, true);
                $kabupaten = null;
                foreach ($kabupatenData as $kab) {
                    if ($kab['id'] == $kabupatenId) {
                        $kabupaten = $kab['nama'];
                        break;
                    }
                }

                $kecamatanFile = file_get_contents('wilayah_indonesia/kecamatan/' . $kabupatenId . '.json');
                $kecamatanData = json_decode($kecamatanFile, true);
                $kecamatan = null;
                foreach ($kecamatanData as $kec) {
                    if ($kec['id'] == $kecamatanId) {
                        $kecamatan = $kec['nama'];
                        break;
                    }
                }

                $kelurahanFile = file_get_contents('wilayah_indonesia/kelurahan/' . $kecamatanId . '.json');
                $kelurahanData = json_decode($kelurahanFile, true);
                $kelurahan = null;
                foreach ($kelurahanData as $kel) {
                    if ($kel['id'] == $kelurahanId) {
                        $kelurahan = $kel['nama'];
                        break;
                    }
                }

                $prov = ucfirst(strtolower($provinsi));
                $kab  = ucfirst(strtolower($kabupaten));
                $kec  = ucfirst(strtolower($kecamatan));
                $kel  = ucfirst(strtolower($kelurahan));
            } else {
                // Fallback jika data yang dikirim bukan ID (data lama)
                $prov = $this->request->getPost('prov');
                $kab = $this->request->getPost('kab');
                $kec = $this->request->getPost('kec');
                $kel = $this->request->getPost('kel');
            }

            // 11. Array $data Disesuaikan untuk KAWASAN
            $data = array(
                'id_kawasan'           => $id, // ID untuk update
                'nama_objek'           => $nama_objek,
                'kategori'             => "Kawasan", // Set Kategori
                'prov'                 => $prov,
                'kab'                  => $kab,
                'kec'                  => $kec,
                'kel'                  => $kel,
                'luas'                 => $this->request->getPost('luas'),
                'pengelola'            => ucfirst(strtolower($this->request->getPost('pengelola'))),
                'penetapan'            => $this->request->getPost('penetapan'),
                'status_penetapan'     => $this->request->getPost('status_penetapan'),
                'peringkat'            => $this->request->getPost('peringkat'),
                'status_pemeringkatan' => $this->request->getPost('status_pemeringkatan'),
                'tataguna_lahan'       => $this->request->getPost('tataguna_lahan'),
                'batas_utara'          => $this->request->getPost('batas_utara'),
                'batas_selatan'        => $this->request->getPost('batas_selatan'),
                'batas_timur'          => $this->request->getPost('batas_timur'),
                'batas_barat'          => $this->request->getPost('batas_barat'),
                'ancaman'              => $this->request->getPost('ancaman'),
                'potensi_ancaman'      => $this->request->getPost('potensi_ancaman'),
                'nilai_penting'        => $this->request->getPost('nilai_penting'),
                'foto'                 => $fotoName,
                'peta'                 => $petaName,
                'deskripsi'            => $this->request->getPost('deskripsi'),
                'keterangan_lain'      => $this->request->getPost('keterangan_lain'),
                'sumber_data'          => $this->request->getPost('sumber_data'),
            );

            // 12. Panggil model update_kawasan
            $this->m_admin->update_kawasan($data);

            session()->setFlashdata('pesan', 'Data Kawasan Berhasil Diperbarui!');
            // 13. Redirect ke list kawasan
            return redirect()->to(base_url('admin/kawasan'));
        } else {
            // Jika validasi gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            // 14. Redirect kembali ke edit_kawasan
            return redirect()->to(base_url('admin/edit_kawasan/' . $id))->withInput();
        }
    }

    public function delete_kawasan($id)
    {
        $post = $this->m_admin->detail_kawasan($id);
        if (!empty($post['foto']) && $post['foto'] != "-") {
            unlink('kawasan/foto/' . $post['foto']);
        }

        if (!empty($post['peta']) && $post['peta'] != "-") {
            unlink('kawasan/peta/' . $post['peta']);
        }

        $data = array(
            'id_kawasan' => $id,
        );
        $this->m_admin->delete_kawasan($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus !!!');
        return redirect()->to(base_url('admin/kawasan'));
    }

    public function insert()
    {
        if ($this->validate([
            'file'       => [
                'label'     => 'File Json',
                'rules'     => 'uploaded[file]|max_size[file,10024]|ext_in[file,json]',
                'errors'    => [
                    'uploaded' => '{field} Wajib Diisi Minimal 1 file !!!',
                    'max_size' => '{field} melebihi ukuran maksimum 1 MB',
                    'ext_in'   => 'Format WAJIB {field}',
                ]
            ],
        ])) {
            if ($this->request->getFile('file')->isValid()) {
                $file = $this->request->getFile('file');
                $file_name = $file->getRandomName();
                // jika Valid
                $data = $this->m_admin->get_polygon()->getResult();
                foreach ($data as $dt) {
                    if ("import_polygon/" . $file_name == $dt->file) {
                        $file_name = (int)$dt . $file_name;
                    }
                }
                $file->move("import_polygon/", $file_name);

                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'file' => $file_name
                ];
                $this->m_admin->insert_polygon($data);

                // Berhasil menyimpan aset
                session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
                return redirect()->to(base_url('admin/data'));
            } else {
                return redirect()->to(base_url('admin/import'));
            }
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/import'));
        }
    }

    public function data()
    {
        $data = array(
            'title' => 'Data',
            'polygon' => $this->m_admin->get_polygon()->getResult(),
            // 'isi' => 'admin/v_cabor',
        );

        return view('admin/v_data', $data);
    }

    public function import()
    {
        $data = array(
            'title' => 'Tambah Data',
            'polygon' => $this->m_admin->get_polygon()->getResult(),
        );

        return view('admin/v_tambah_data', $data);
    }
}
