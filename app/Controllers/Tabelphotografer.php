<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PhotograferModel;

class Tabelphotografer extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $photograferModel = new PhotograferModel();

        // Data tabel photografer
        $data['photografer'] = $photograferModel->findAll();

        // Statistik
        $data['totalPelanggan'] = $pelangganModel->countAll();
        $data['totalPhotografer'] = $photograferModel->countAll();
        $data['totalPengguna'] = $data['totalPelanggan'] + $data['totalPhotografer'];

        $data['akunAktif'] =
            $pelangganModel->where('id_status', 1)->countAllResults()
            +
            $photograferModel->where('id_status', 1)->countAllResults();

        return view('pages/tabelphotografer', $data);
    }
}