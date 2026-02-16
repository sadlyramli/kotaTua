<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_admin extends Model
{
    // protected $table = 'users';
    // protected $primaryKey = 'id_user'; // Kolom kunci utama
    // protected $allowedFields = ['full_name', 'username', 'email', 'password', 'number_phone', 'role_id','status','picture','reset_pass_token'];

    protected $table = 'tb_cabor'; // Nama tabel di database
    protected $primaryKey = 'id_cabor'; // Primary key dari tabel
    // protected $allowedFields = ['judul', 'judul_seo', 'isi_berita', 'gambar', 'username', 'id_kategori', 'tanggal'];


    public function get_profil()
    {
        return $this->db->table('tb_users')
            ->get()
            ->getRow();
    }

    public function detail_user($id)
    {
        return $this->db->table('tb_users')
            ->where('id', $id)
            ->get()
            ->getRowArray();
    }

    public function c_validasi_user()
    {
        return $this->db->table('tb_users')
            ->where('status', 1)
            ->countAllResults();
    }

    public function get_users()
    {
        return $this->db->table('tb_users')
            ->where('status', 2)
            ->get();
    }

    public function get_users_validasi()
    {
        return $this->db->table('tb_users')
            ->where('status', 1)
            ->get();
    }

    public function acc_user($data)
    {
        $this->db->table('tb_users')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function tolak_user($data)
    {
        $this->db->table('tb_users')
            ->where('id', $data['id'])
            ->delete($data);
    }

    public function det_users($id)
    {
        return $this->db->table('tb_users')
            ->where('id', $id)
            ->get()
            ->getRowArray();
    }

    public function update_users($data)
    {
        $this->db->table('tb_users')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function update_password($data)
    {
        $this->db->table('tb_users')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function getImageKawasanById($id)
    {
        return $this->db->table('tb_kawasan')
            ->select('foto')
            ->where('id_kawasan', $id)
            ->get()
            ->getRowArray();
    }

    public function getPetaKawasanById($id)
    {
        return $this->db->table('tb_kawasan')
            ->select('peta')
            ->where('id_kawasan', $id)
            ->get()
            ->getRowArray();
    }

    public function getImageObjekById($id_kategori)
    {
        return $this->db->table('tb_kategori')
            ->select('foto')
            ->where('id_kategori', $id_kategori)
            ->get()
            ->getRowArray();
    }

    public function get_wilayah_objek()
    {
        return $this->db->table('tb_kategori')
            ->select('prov,kab,kec,kel')
            ->get();
    }

    public function get_kawasan()
    {
        return $this->db->table('tb_kawasan')
            // ->join('tb_club','tb_club.id_club = tb_atlet.id_club_atlet')
            ->get();
    }

    public function simpan_kawasan($data)
    {
        return $this->db->table('tb_kawasan')
            ->insert($data);
    }

    public function detail_kawasan($id_kawasan)
    {
        return $this->db->table('tb_kawasan')
            ->where('id_kawasan', $id_kawasan)
            ->get()
            ->getRowArray();
    }

    public function update_kawasan($data)
    {
        $this->db->table('tb_kawasan')
            ->where('id_kawasan', $data['id_kawasan'])
            ->update($data);
    }

    public function delete_kawasan($data)
    {
        $this->db->table('tb_kawasan')
            ->where('id_kawasan', $data['id_kawasan'])
            ->delete($data);
    }




    public function simpan_objek($data)
    {
        return $this->db->table('tb_kategori')
            ->insert($data);
    }

    public function update_objek($data)
    {
        $this->db->table('tb_kategori')
            ->where('id_kategori', $data['id_kategori'])
            ->update($data);
    }

    public function delete_objek($data)
    {
        $this->db->table('tb_kategori')
            ->where('id_kategori', $data['id_kategori'])
            ->delete($data);
    }


    public function get_data()
    {
        return $this->db->table('tb_hotspot')
            ->get();
    }

    public function get_polygon()
    {
        return $this->db->table('tb_polygon')
            ->get();
    }

    public function insert_polygon($data)
    {
        return $this->db->table('tb_polygon')
            ->insert($data);
    }
}
