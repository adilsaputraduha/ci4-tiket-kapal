<?php

namespace App\Controllers;

use App\Models\AdminLogin;

class AdminLoginController extends BaseController
{
    public function index()
    {
        if (session()->get('userId')) {
            return redirect()->to(base_url('home'));
        }
        echo view('admin/view_login');
    }

    public function ceklogin()
    {
        $model = new AdminLogin();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->cekLogin($email);

        if ($user) {
            if (password_verify($password, $user['userPassword'])) {
                session()->set('userId', $user['userId']);
                session()->set('userNama', $user['userNama']);
                session()->set('userEmail', $user['userEmail']);
                session()->set('userRole', $user['userRole']);
                return redirect()->to('/admin');
            } else {
                session()->setFlashdata('message', 'Password salah');
                return redirect()->to('/admin/login');
            }
        } else {
            session()->setFlashdata('message', 'Email belum terdaftar');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        session()->remove('userId');
        session()->remove('userNama');
        session()->remove('userEmail');
        session()->remove('userRole');
        session()->setFlashdata('success', 'Berhasil keluar');
        return redirect()->to('/admin/login');
    }
}
