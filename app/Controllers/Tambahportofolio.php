<?php

namespace App\Controllers;

use App\Models\Portofoliomodel;
use App\Models\Jenisphotographymodel;

class Tambahportofolio extends BaseController
{
    public function index()
    {
        $jenisModel = new Jenisphotographymodel();
        $data['jenis'] = $jenisModel
            ->where('id_photografer', session()->get('id_photografer'))
            ->findAll();

        return view('pages/tambahportofolio', $data);
    }

    public function simpan()
    {
        $model = new Portofoliomodel();

        $foto = $this->request->getFile('foto');

        $namaFoto = 'default.png';

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('uploads/portofolio', $namaFoto);
        }

        $model->save([
            'id_photografer'       => session()->get('id_photografer'),
            'id_jenis_photography' => $this->request->getPost('id_jenis_photography'),
            'harga'                => $this->request->getPost('harga'),
            'deskripsi'            => $this->request->getPost('deskripsi'),
            'foto'                 => $namaFoto,
            'tgl_upload'           => date('Y-m-d')
        ]);

        session()->setFlashdata('success', 'Portofolio berhasil ditambahkan.');
        return redirect()->to(base_url('dashboard/profil'));
    }
}
