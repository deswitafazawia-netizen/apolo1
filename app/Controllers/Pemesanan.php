<?php

namespace App\Controllers;

use App\Models\Pemesananmodel;

class Pemesanan extends BaseController
{
    public function index()
    {
        $model = new Pemesananmodel();
        $role = session()->get('role');

        $builder = $model
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left');

        if ($role === 'admin') {
            $data['pemesanan'] = $builder->findAll();
        } elseif ($role === 'photografer') {
            $id = session()->get('id_photografer');
            $data['pemesanan'] = $builder
                ->where('pemesanan.id_photografer', $id)
                ->findAll();
        } elseif ($role === 'pelanggan') {
            $id = session()->get('id_pelanggan');
            $data['pemesanan'] = $builder
                ->where('pemesanan.id_pelanggan', $id)
                ->findAll();
        }

        $total = count($data['pemesanan']);
        $menunggu = 0;
        $diproses = 0;
        $selesai = 0;
        $ditolak = 0;
        $dibatalkan = 0;
        foreach ($data['pemesanan'] as $p) {
            $s = $p['id_status'];
            if ($s == 1) $menunggu++;
            elseif ($s == 2) $diproses++;
            elseif ($s == 3) $selesai++;
            elseif ($s == 4) $ditolak++;
            elseif ($s == 5) $dibatalkan++;
        }

        $data['role'] = $role;
        $data['total'] = $total;
        $data['menunggu'] = $menunggu;
        $data['diproses'] = $diproses;
        $data['selesai'] = $selesai;
        $data['ditolak'] = $ditolak;
        $data['dibatalkan'] = $dibatalkan;

        return view('pages/pemesanan', $data);
    }

    public function terima($id)
    {
        $model = new Pemesananmodel();
        $model->update($id, ['id_status' => 2]);
        return redirect()->back()->with('success', 'Pesanan diterima.');
    }

    public function tolak($id)
    {
        $model = new Pemesananmodel();
        $model->update($id, ['id_status' => 4]);
        return redirect()->back()->with('success', 'Pesanan ditolak.');
    }

    public function batalkan($id)
    {
        $model = new Pemesananmodel();
        $model->update($id, ['id_status' => 5]);
        return redirect()->back()->with('success', 'Pesanan dibatalkan.');
    }
}
