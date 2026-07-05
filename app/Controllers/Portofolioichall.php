<?php

namespace App\Controllers;

use App\Models\PhotograferModel;
use App\Models\JenisPhotographyModel;

class Portofolioichall extends BaseController
{
    public function index($id)
    {
        $photograferModel = new PhotograferModel();
        $jenisModel = new JenisPhotographyModel();

        $data['photografer'] = $photograferModel->find($id);

        $data['jenis'] = $jenisModel->GetPortofolio($id);

        return view('pages/portofolioichall', $data);
    }

    public function edit($id)
    {
        $model = new \App\Models\PortofolioModel();

        $data['portofolio'] = $model->find($id);

        return view('pages/editportofolio', $data);
    }

    public function update($id)
    {
        $model = new \App\Models\PortofolioModel();

        $data = [
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        $foto = $this->request->getFile('foto');

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {

            $namaBaru = $foto->getRandomName();

            $foto->move('uploads/portofolio', $namaBaru);

            $data['foto'] = $namaBaru;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('dashboard/profil'))
                        ->with('success','Portofolio berhasil diperbarui');
    }

    public function hapus($id)
    {
        $model = new \App\Models\PortofolioModel();

        $model->delete($id);

        return redirect()->to(base_url('dashboard/profil'))
                        ->with('success','Portofolio berhasil dihapus');
    }
}