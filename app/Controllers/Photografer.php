<?php

namespace App\Controllers;

use App\Models\PhotograferModel;
use App\Models\KategoriModel;

class Photografer extends BaseController
{
    public function index()
    {
        $model = new PhotograferModel();
        $kategoriModel = new KategoriModel();

        $photografer = $model->Getphotografer();

        $db = \Config\Database::connect();
        foreach ($photografer as &$p) {
            $q = $db->query("
                SELECT DISTINCT k.id_kategori, k.nama_kategori
                FROM jenis_photography j
                JOIN kategori_photography k ON k.id_kategori = j.id_kategori
                WHERE j.id_photografer = ?
            ", [$p['id_photografer']]);
            $p['kategori'] = array_column($q->getResultArray(), 'nama_kategori');
        }

        $data['photografer'] = $photografer;
        $data['kategori'] = $kategoriModel->findAll();
        return view('pages/photografer', $data);
    }
}
