<?php

namespace App\Controllers;

use App\Models\ProyeklelangpelangganModel;

class Proyeklelangphotografer extends BaseController
{
    public function index()
    {
        $model = new ProyeklelangpelangganModel();

        $data['proyek'] = $model
            ->where('id_status', 1)
            ->orderBy('id_proyek', 'DESC')
            ->findAll();

        return view('pages/proyeklelangphotografer', $data);
    }
}