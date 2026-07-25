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
                'foto' => $Pelanggan['foto'],
                'login' => true
            ]);

            return redirect()->to(base_url('dashboard'));
        }

        $photograferM = new PhotograferModel();
        $Photografer = $photograferM
            ->where('nama_photografer', $username)
            ->first();

        if ($Photografer && password_verify($password, $Photografer['password'])) {

            // Cek apakah akun dibekukan
            if (!empty($Photografer['tgl_beku_hingga']) && strtotime($Photografer['tgl_beku_hingga']) > time()) {
                $sisa = ceil((strtotime($Photografer['tgl_beku_hingga']) - time()) / (60 * 60 * 24));
                return redirect()->to('/login')
                     ->with('error', "Akun Anda dibekukan selama {$sisa} hari karena pembatalan mendadak.");
            }

            // Jika masa beku sudah lewat, aktifkan kembali
            if (!empty($Photografer['tgl_beku_hingga']) && strtotime($Photografer['tgl_beku_hingga']) <= time()) {
                $photograferM->update($Photografer['id_photografer'], [
                    'id_status' => 1,
                    'tgl_beku_hingga' => null
                ]);
            }

            session()->set([
                'id_photografer' => $Photografer['id_photografer'],
                'username' => $Photografer['nama_photografer'],
                'role' => 'photografer',
                'foto' => $Photografer['foto'],
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
