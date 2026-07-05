<?php

namespace App\Controllers;

use App\Models\PhotograferModel;

class Photografer extends BaseController
{
    public function index()
    {
        $model = new PhotograferModel();

        $data['photografi'] = $model->GetPortofolio();

        return view('pages/photografer', $data);
    }
}