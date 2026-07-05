<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PhotograferModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function register()
    {
        $username = $this->request->getPost('username');
        $email    = $this->request->getPost('email');
        $nohp     = $this->request->getPost('nohp');
        $password = password_hash(
            $this->request->getPost('password'),
            PASSWORD_DEFAULT
        );
        $role     = $this->request->getPost('role');

        if ($role == 'pelanggan') {

            $pelanggan = new PelangganModel();

            $pelanggan->save([
                'nama_pelanggan' => $username,
                'email'          => $email,
                'no_hp'          => $nohp,
                'password'       => $password,
                'id_status'      => 1
            ]);

        } elseif ($role == 'photografer') {

            $photografer = new PhotograferModel();

            $photografer->save([
                'nama_photografer' => $username,
                'email'            => $email,
                'no_hp'            => $nohp,
                'password'         => $password,
                'id_status'        => 1
            ]);
        }

        return redirect()->to('/login')
            ->with('success', 'Registrasi berhasil, silakan login.');
    }
}