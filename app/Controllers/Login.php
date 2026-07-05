<?php
namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PelangganModel;
use App\Models\PhotograferModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminM = new AdminModel();
        $admin = $adminM
            ->where('username', $username)
            ->first();

            if ($admin && $password == $admin['password']) {
                session()->set([
                    'id_admin' => $admin['id_admin'],
                    'username' => $admin['username'],
                    'role' => 'admin',
                    'login' => true
                ]);

                return redirect()->to(base_url('dashboard'));
            }

        $pelangganM = new PelangganModel();
        $Pelanggan = $pelangganM
            ->where('nama_pelanggan', $username)
            ->first();

        if ($Pelanggan && password_verify($password, $Pelanggan['password'])) {
            session()->set([
                'id_pelanggan' => $Pelanggan['id_pelanggan'],
                'username' => $Pelanggan['nama_pelanggan'],
                'role' => 'pelanggan',
                'login' => true
            ]);

            return redirect()->to(base_url('dashboard'));
        }

        $photograferM = new PhotograferModel();
        $Photografer = $photograferM
            ->where('nama_photografer', $username)
            ->first();

        if ($Photografer && password_verify($password, $Photografer['password'])) {

            session()->set([
                'id_photografer' => $Photografer['id_photografer'],
                'username' => $Photografer['nama_photografer'],
                'role' => 'photografer',
                'login' => true
                
            ]);

            return redirect()->to(base_url('dashboard'));
        }
            return redirect()->to('/login')
                 ->with('error', 'Username atau Password salah');
                 
    }

            public function logout()
            {
                session()->destroy();
                return redirect()->to('/login');
            }
}