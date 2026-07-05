<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\JenisPhotographyModel;
use App\Models\PhotograferModel;

class Photography extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $jenisModel = new JenisPhotographyModel();
        $photograferModel = new PhotograferModel();

        $data['kategori'] = $kategoriModel->findAll();

        $data['jenis'] = $jenisModel
            ->select('jenis_photography.*, kategori_photography.nama_kategori, photografer.nama_photografer')
            ->join('kategori_photography', 'kategori_photography.id_kategori = jenis_photography.id_kategori')
            ->join('photografer', 'photografer.id_photografer = jenis_photography.id_photografer')
            ->findAll();

        $data['totalKategori'] = $kategoriModel->countAll();

        $data['totalJenis'] = $jenisModel->countAll();

        $data['totalPhotografer'] = $photograferModel
            ->where('id_status', 1)
            ->countAllResults();

        $data['layananDigunakan'] = $jenisModel->countAll();

        return view('pages/photography', $data);
    }

    public function editKategori($id)
        {
            $model = new Kategorimodel();

            $data['kategori'] = $model->find($id);

            return view('pages/editkategori', $data);
        }
    
    public function updateKategori($id)
        {
            $model = new Kategorimodel();

            $model->update($id, [
                'nama_kategori' => $this->request->getPost('nama_kategori'),
                'deskripsi'     => $this->request->getPost('deskripsi')
            ]);

            return redirect()->to(base_url('dashboard/photography'))
                            ->with('success', 'Kategori berhasil diubah.');
        }

    public function hapusKategori($id)
        {
            $model = new Kategorimodel();

            $model->delete($id);

            return redirect()->to(base_url('dashboard/photography'))
                            ->with('success', 'Kategori berhasil dihapus.');
        }

    public function editJenis($id)
            {
                $jenisModel = new \App\Models\JenisPhotographyModel();
                $kategoriModel = new \App\Models\KategoriModel();

                $data['jenis'] = $jenisModel->find($id);
                $data['kategori'] = $kategoriModel->findAll();

                return view('pages/editjenis', $data);
            }

    public function updateJenis($id)
        {
            $model = new \App\Models\JenisphotographyModel();

            $model->update($id, [
                'id_kategori' => $this->request->getPost('id_kategori'),
                'nama_jenis'  => $this->request->getPost('nama_jenis'),
                'harga'       => $this->request->getPost('harga'),
                'deskripsi'   => $this->request->getPost('deskripsi')
            ]);

            return redirect()->to(base_url('dashboard/photography'))
                            ->with('success', 'Jenis photography berhasil diubah.');
        }

    public function hapusJenis($id)
        {
            $model = new \App\Models\JenisphotographyModel();

            $model->delete($id);

            return redirect()->to(base_url('dashboard/photography'))
                            ->with('success', 'Jenis photography berhasil dihapus.');
        }
}