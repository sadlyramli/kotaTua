<?php

namespace App\Controllers;

use App\Models\Model_auth;

class Auth extends BaseController
{
    protected $model_auth;
    public function __construct()
    {
        helper('form');
        $this->model_auth = new Model_auth();
    }

    public function index()
    {
        $data = array(
            'title' => 'Login',
            'titlehead' => 'Login',
            // 'validation' => \Config\Services::validation()
        );
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = array(
            'title' => 'IKU | Register',
            // 'validation' => \Config\Services::validation()
        );
        return view('v_register', $data);
    }

    public function save_register()
    {
        if ($this->validate(
            [
                'repassword' => [
                    'label' => 'Retype Password',
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'matches' => '{field} Tidak Sama'
                    ]
                ]
            ]
        )) {
            $username = $this->request->getpost('username');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $level = 1;
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => md5($password),
                'level' => $level

            );
            $this->model_auth->save_register($data);
            session()->setFlashdata('pesan', 'Register Berhasil');
            return redirect()->to(base_url('Auth/register'));
        } else {
            // $validation = \Config\Services::validation();
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }

    public function cek_login()
    {
        if ($this->validate([
            'username'  => [
                'label'  => 'Username',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password'   => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
        ])) {
            ///jika valid

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Ambil user dari database berdasarkan username
            $cek_user = $this->model_auth->cek_login($username); // Pastikan cek_login hanya mencari user berdasarkan username.

            if ($cek_user && password_verify($password, $cek_user['password'])) {
                // Jika password cocok untuk user
                session()->set('log', true);
                session()->set('id', $cek_user['id']);
                session()->set('name', $cek_user['name']);
                session()->set('username', $cek_user['username']);
                session()->set('email', $cek_user['email']);
                session()->set('role_id', $cek_user['role_id']);

                return redirect()->to(base_url('admin'));
            } else {
                // Jika data tidak cocok
                session()->setFlashdata('error', 'Username Atau Password Salah!!!');
                return redirect()->to(base_url('auth'));
            }
        } else {
            ///jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth'))->withInput();
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('role_id');
        session()->remove('email');
        session()->remove('name');
        session()->remove('id');
        return redirect()->to(base_url('auth'));
    }
}
