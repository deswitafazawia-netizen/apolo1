<?php

namespace App\Controllers;

use App\Models\Photografermodel;
use App\Models\Pelangganmodel;
use App\Models\Adminmodel;
use App\Models\Portofoliomodel;

class Profil extends BaseController
{
    public function index()
    {
        $role = session()->get('role');
        $data['role'] = $role;

        if ($role === 'photografer') {
            $id = session()->get('id_photografer');
            $model = new Photografermodel();
            $portofolioModel = new Portofoliomodel();
            $data['user'] = $model->find($id);
            $data['portofolio'] = $portofolioModel
                ->where('id_photografer', $id)
                ->findAll();
        } elseif ($role === 'pelanggan') {
            $id = session()->get('id_pelanggan');
            $model = new Pelangganmodel();
            $data['user'] = $model->find($id);
            $data['portofolio'] = [];
        } elseif ($role === 'admin') {
            $id = session()->get('id_admin');
            $model = new Adminmodel();
            $data['user'] = $model->find($id);
            $data['portofolio'] = [];
        }

        return view('pages/profil', $data);
    }

    public function update()
    {
        $role = session()->get('role');

        if ($role === 'photografer') {
            $model = new Photografermodel();
            $id = session()->get('id_photografer');
            $data = [
                'nama_photografer' => $this->request->getPost('nama_photografer'),
                'email'            => $this->request->getPost('email'),
                'no_hp'            => $this->request->getPost('no_hp'),
                'alamat'           => $this->request->getPost('alamat'),
            ];
            $password = $this->request->getPost('password');
            if (!empty($password)) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }
        } elseif ($role === 'pelanggan') {
            $model = new Pelangganmodel();
            $id = session()->get('id_pelanggan');
            $data = [
                'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
                'email'          => $this->request->getPost('email'),
                'no_hp'          => $this->request->getPost('no_hp'),
            ];
            $password = $this->request->getPost('password');
            if (!empty($password)) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }
        } elseif ($role === 'admin') {
            $model = new Adminmodel();
            $id = session()->get('id_admin');
            $data = [
                'username' => $this->request->getPost('username'),
            ];
            $password = $this->request->getPost('password');
            if (!empty($password)) {
                $data['password'] = $password;
            }
        }

        $file = $this->request->getFile('foto');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/profil', $namaFile);
            $lama = $model->find($id);
            if ($lama && !empty($lama['foto'])) {
                $path = FCPATH . 'uploads/profil/' . $lama['foto'];
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $data['foto'] = $namaFile;
        }

        $model->update($id, $data);
        return redirect()->to(base_url('dashboard/profil'))
                        ->with('success', 'Profil berhasil diperbarui.');
    }
}
