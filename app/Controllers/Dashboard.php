<?php

namespace App\Controllers;

use App\Models\Photografermodel;
use App\Models\Pemesananmodel;
use App\Models\Ratingmodel;
use Config\Database;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('login')) {
            return redirect()->to('/login');
        }

        $photograferModel = new Photografermodel();
        $pemesananModel = new Pemesananmodel();
        $ratingModel = new Ratingmodel();

        $totalPhotografer = $photograferModel->countAll();
        $proyekSelesai = $pemesananModel->where('id_status', 3)->countAllResults();

        $db = Database::connect();
        $avgQuery = $db->query('SELECT AVG(nilai_rating) as avg_rating FROM rating');
        $avgRating = $avgQuery->getRow()->avg_rating ?? 0;

        $data = [
            'total_photografer' => $totalPhotografer,
            'proyek_selesai' => $proyekSelesai,
            'avg_rating' => round($avgRating, 1),
        ];

        return view('pages/index', $data);
    }
}
