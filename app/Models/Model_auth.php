<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{
    

    public function save_register($data)
    {
        $this->db->table('tb_users')->insert($data);
    }

    public function cek_login($username)
    {
        return $this->db->table('tb_users')->where('username', $username)->get()->getRowArray();
    }

    public function cek_loginRegister($username, $password)
    {
        return $this->db->table('tb_users')->where([
            'email' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

}