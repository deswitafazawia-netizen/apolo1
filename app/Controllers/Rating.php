<?php

namespace App\Controllers;

use App\Models\Ratingmodel;
use App\Models\Pemesananmodel;

class Rating extends BaseController
{
    public function index()
    {
        $model = new Ratingmodel();
        $role = session()->get('role');

        if ($role === 'admin') {
            $data['ratings'] = $model
                ->select('rating.*, pelanggan.nama_pelanggan, photografer.nama_photografer')
                ->join('pelanggan', 'pelanggan.id_pelanggan = rating.id_pelanggan', 'left')
                ->join('photografer', 'photografer.id_photografer = rating.id_photografer', 'left')
                ->orderBy('rating.tgl_rating', 'DESC')
                ->findAll();
        } elseif ($role === 'photografer') {
            $id = session()->get('id_photografer');
            $data['ratings'] = $model
                ->select('rating.*, pelanggan.nama_pelanggan')
                ->join('pelanggan', 'pelanggan.id_pelanggan = rating.id_pelanggan', 'left')
                ->where('rating.id_photografer', $id)
                ->orderBy('rating.tgl_rating', 'DESC')
                ->findAll();
            $avg = $model->selectAvg('nilai_rating')
                ->where('id_photografer', $id)
                ->get()->getRowArray();
            $data['avg_rating'] = $avg['nilai_rating'] ?? 0;
            $data['total_rating'] = $model->where('id_photografer', $id)->countAllResults();
        } elseif ($role === 'pelanggan') {
            $idPelanggan = session()->get('id_pelanggan');
            $pemesananModel = new Pemesananmodel();
            $data['completed'] = $pemesananModel
                ->select('pemesanan.*, photografer.nama_photografer, jenis_photography.nama_jenis')
                ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
                ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
                ->where('pemesanan.id_pelanggan', $idPelanggan)
                ->where('pemesanan.id_status', 3)
                ->findAll();
            $data['ratings'] = $model
                ->select('rating.*, photografer.nama_photografer')
                ->join('photografer', 'photografer.id_photografer = rating.id_photografer', 'left')
                ->where('rating.id_pelanggan', $idPelanggan)
                ->orderBy('rating.tgl_rating', 'DESC')
                ->findAll();
            // Track which pemesanan IDs are already rated
            $ratedPemesananIds = array_column($data['ratings'], 'id_pemesanan');
            $data['ratedIds'] = $ratedPemesananIds;
        }

        $data['role'] = $role;
        return view('pages/rating', $data);
    }

    public function simpan()
    {
        $model = new Ratingmodel();
        $idPemesanan = $this->request->getPost('id_pemesanan');
        $idPhotografer = $this->request->getPost('id_photografer');
        $nilaiRating = $this->request->getPost('nilai_rating');
        $komentar = $this->request->getPost('komentar');

        // Check duplicate per booking
        $existing = $model->where('id_pemesanan', $idPemesanan)->first();
        if ($existing) {
            return redirect()->back()->with('error', 'Pemesanan ini sudah diberi rating.');
        }

        $model->save([
            'id_pelanggan'   => session()->get('id_pelanggan'),
            'id_photografer' => $idPhotografer,
            'id_pemesanan'   => $idPemesanan,
            'nilai_rating'   => (float)$nilaiRating,
            'komentar'       => $komentar,
            'tgl_rating'     => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('dashboard/rating'))
                        ->with('success', 'Rating dan ulasan berhasil dikirim.');
    }
}
