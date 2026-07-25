<?php

namespace App\Controllers;

use App\Models\Pemesananmodel;
use App\Models\Proyeklelangpelangganmodel;

class Laporan extends BaseController
{
    public function index()
    {
        $pemesananModel = new Pemesananmodel();
        $proyekModel = new Proyeklelangpelangganmodel();

        $tanggal_awal = $this->request->getGet('tanggal_awal');
        $tanggal_akhir = $this->request->getGet('tanggal_akhir');
        $kategori = $this->request->getGet('kategori') ?? 'semua';

        $builderPemesanan = $pemesananModel
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis,
                status.nama_status
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->join('status', 'status.id_status = pemesanan.id_status', 'left');

        if ($tanggal_awal) {
            $builderPemesanan->where('pemesanan.tgl_pemesanan >=', $tanggal_awal);
        }
        if ($tanggal_akhir) {
            $builderPemesanan->where('pemesanan.tgl_pemesanan <=', $tanggal_akhir . ' 23:59:59');
        }

        $dataPemesanan = $builderPemesanan->findAll();

        $builderProyek = $proyekModel
            ->select('
                proyek_lelang.*,
                pelanggan.nama_pelanggan,
                status.nama_status
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = proyek_lelang.id_pelanggan', 'left')
            ->join('status', 'status.id_status = proyek_lelang.id_status', 'left');

        if ($tanggal_awal) {
            $builderProyek->where('proyek_lelang.tgl_dibuat >=', $tanggal_awal);
        }
        if ($tanggal_akhir) {
            $builderProyek->where('proyek_lelang.tgl_dibuat <=', $tanggal_akhir . ' 23:59:59');
        }

        $dataProyek = $builderProyek->findAll();

        $totalPemesanan = count($dataPemesanan);
        $totalProyek = count($dataProyek);
        $totalSemua = $totalPemesanan + $totalProyek;

        $pemesananSelesai = 0;
        $pemesananDiproses = 0;
        $pemesananDibatalkan = 0;
        foreach ($dataPemesanan as $p) {
            if ($p['id_status'] == 3) $pemesananSelesai++;
            if ($p['id_status'] == 2) $pemesananDiproses++;
            if ($p['id_status'] == 5) $pemesananDibatalkan++;
        }

        $proyekAktif = 0;
        $proyekSelesai = 0;
        foreach ($dataProyek as $pr) {
            if ($pr['id_status'] == 1) $proyekAktif++;
            if ($pr['id_status'] == 2) $proyekSelesai++;
        }

        $data = [
            'dataPemesanan'       => $dataPemesanan,
            'dataProyek'          => $dataProyek,
            'totalSemua'          => $totalSemua,
            'totalPemesanan'      => $totalPemesanan,
            'totalProyek'         => $totalProyek,
            'pemesananSelesai'    => $pemesananSelesai,
            'pemesananDiproses'   => $pemesananDiproses,
            'pemesananDibatalkan' => $pemesananDibatalkan,
            'proyekAktif'         => $proyekAktif,
            'proyekSelesai'       => $proyekSelesai,
            'kategori'            => $kategori,
            'tanggal_awal'        => $tanggal_awal,
            'tanggal_akhir'       => $tanggal_akhir,
        ];

        return view('pages/laporan', $data);
    }
}
