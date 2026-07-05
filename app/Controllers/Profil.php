<?php

namespace App\Controllers;

use App\Models\Photografermodel;
use App\Models\Portofoliomodel;

class Profil extends BaseController
{
        public function index()
        {
            $id = session()->get('id_photografer');

            $photografermodel = new Photografermodel();
            $portofoliomodel  = new Portofoliomodel();

            $data['photografer'] = $photografermodel->find($id);

            $data['fotoProfil'] = $portofoliomodel
                ->where('id_photografer', $id)
                ->first();

            $data['portofolio'] = $portofoliomodel
                ->where('id_photografer', $id)
                ->findAll();

            return view('pages/profil', $data);
        }

    public function editPortofolio($id)
        {
            $model = new \App\Models\Portofoliomodel();

            $data['portofolio'] = $model->find($id);

            return view('pages/editportofolio', $data);
        }

    public function updatePortofolio($id)
        {
            $model = new \App\Models\Portofoliomodel();

            $data = [
                'deskripsi' => $this->request->getPost('deskripsi')
            ];

            $foto = $this->request->getFile('foto');

            if ($foto && $foto->isValid() && !$foto->hasMoved()) {

                $namaFoto = $foto->getRandomName();

                $foto->move('uploads/portofolio', $namaFoto);

                $lama = $model->find($id);

                if ($lama && !empty($lama['foto'])) {

                    $path = FCPATH.'uploads/portofolio/'.$lama['foto'];

                    if (file_exists($path)) {
                        unlink($path);
                    }
                }

                $data['foto'] = $namaFoto;
            }

            $model->update($id,$data);

            return redirect()->to(base_url('dashboard/profil'))
                            ->with('success','Portofolio berhasil diubah.');
        }

    public function hapusPortofolio($id)
        {
            $model = new \App\Models\Portofoliomodel();

            $data = $model->find($id);

            if($data){

                if(!empty($data['foto'])){

                    $path = FCPATH.'uploads/portofolio/'.$data['foto'];

                    if(file_exists($path)){
                        unlink($path);
                    }

                }

                $model->delete($id);
            }

            return redirect()->to(base_url('dashboard/profil'))
                            ->with('success','Portofolio berhasil dihapus.');
        }
}