<?php

namespace App\Controllers;

use App\Models\AdminUser;

class AdminUserController extends BaseController
{
    public function index()
    {
        $model = new AdminUser();
        $data = [
            'user' => $model->getUser()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/view_user', $data);
    }

    public function save()
    {
        $rules = [
            'email' => [
                'rules' => 'required|max_length[100]|is_unique[tb_user.userEmail]',
                'errors' => [
                    'is_unique' => 'Email sudah ada',
                    'required' => 'Email harus diisi',
                    'max_length' => 'Kolom email tidak boleh lebih dari 20 karakter'
                ]
            ],
            'nama' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 100 karakter'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'max_length' => 'Kolom password tidak boleh lebih dari 100 karakter',
                    'min_length' => 'Kolom password setidaknya terdiri dari 4 karakter'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level harus diisi'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new AdminUser();
            $data = array(
                'userEmail' => $this->request->getPost('email'),
                'userNama' => $this->request->getPost('nama'),
                'userPassword' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'userRole' => $this->request->getPost('level'),
                'userUpdatedAt' => date('Y-m-d H:i:s'),
                'userCreatedAt' => date('Y-m-d H:i:s')
            );
            $model->saveUser($data);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/admin/user');
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/user')->withInput()->with('validation', $validation);
        }
    }

    public function edit()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 100 karakter'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'max_length' => 'Kolom password tidak boleh lebih dari 100 karakter',
                    'min_length' => 'Kolom password setidaknya terdiri dari 4 karakter'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level harus diisi'
                ]
            ]
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $model = new AdminUser();
            $data = array(
                'userEmail' => $this->request->getPost('email'),
                'userNama' => $this->request->getPost('nama'),
                'userPassword' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'userLevel' => $this->request->getPost('level')
            );
            $model->updateUser($data, $id);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/user');
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to('/user/update/' . $id)->withInput()->with('validation', $validation);
        }
    }

    public function update($id)
    {
        $model = new AdminUser();
        $data = [
            'user' => $model->getUserDetail($id)->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('view_edit_user', $data);
    }

    public function delete()
    {
        $model = new AdminUser();
        $id = $this->request->getPost('id');
        $model->deleteUser($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/user');
    }

    public function laporan()
    {
        $model = new AdminUser();
        $data['user'] = $model->getUser()->getResultArray();
        echo view('laporan/laporan_user', $data);
    }
}
