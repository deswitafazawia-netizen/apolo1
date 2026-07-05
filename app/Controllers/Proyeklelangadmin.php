<?php

namespace App\Controllers;

use App\Models\ProyeklelangpelangganModel;

class Proyeklelangadmin extends BaseController
{
    public function index()
    {
        $model = new ProyeklelangpelangganModel();

        // Data proyek
        $data['proyek'] = $model
            ->select('proyek_lelang.*, pelanggan.nama_pelanggan')
            ->join('pelanggan', 'pelanggan.id_pelanggan = proyek_lelang.id_pelanggan')
            ->findAll();

        // Statistik
        $data['totalProyek'] = (new ProyeklelangpelangganModel())->countAll();

        $data['proyekAktif'] = (new ProyeklelangpelangganModel())
            ->where('id_status', 1)
            ->countAllResults();

        $data['proyekSelesai'] = (new ProyeklelangpelangganModel())
            ->where('id_status', 2)
            ->countAllResults();

        $data['proyekDitutup'] = (new ProyeklelangpelangganModel())
            ->where('id_status', 3)
            ->countAllResults();

        return view('pages/proyeklelangadmin', $data);
    }

    public function hapus($id)
    {
        $model = new ProyeklelangpelangganModel();

        $model->delete($id);

        return redirect()->to(base_url('dashboard/proyeklelangadmin'))
                         ->with('success', 'Data berhasil dihapus.');
    }
}