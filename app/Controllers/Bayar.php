<?php

namespace App\Controllers;

use App\Models\PemesananModel;
use App\Models\Pembayaranmodel;

class Bayar extends BaseController
{
    public function index($id)
    {
        $model = new PemesananModel();

        $pemesanan = $model
            ->select('
                pemesanan.*,
                photografer.nama_photografer,
                jenis_photography.nama_jenis
            ')
            ->join('photografer','photografer.id_photografer=pemesanan.id_photografer')
            ->join('jenis_photography','jenis_photography.id_jenis_photography=pemesanan.id_jenis_photography')
            ->find($id);

        if (!$pemesanan) {
            return redirect()->to('dashboard/pemesanan')
                ->with('error', 'Data pemesanan tidak ditemukan.');
        }

        $data['pemesanan'] = $pemesanan;

        return view('pages/bayar',$data);
    }

    public function simpan()
    {
        $pembayaranModel = new Pembayaranmodel();
        $pemesananModel = new PemesananModel();

        $idPemesanan = $this->request->getPost('id_pemesanan');
        $jenisPembayaran = $this->request->getPost('jenis_pembayaran');
        $jumlahBayar = $this->request->getPost('jumlah_bayar');
        $metodePembayaran = $this->request->getPost('metode_pembayaran');

        $file = $this->request->getFile('bukti_transfer');
        $namaFile = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/bukti', $namaFile);
        }

        $data = [
            'id_pemesanan'   => $idPemesanan,
            'jenis_pembayaran' => $jenisPembayaran . ' - ' . $metodePembayaran,
            'jumlah_bayar'    => (float)$jumlahBayar,
            'bukti_pembayaran' => $namaFile,
            'id_status'       => 1,
            'tgl_pembayaran'  => date('Y-m-d H:i:s'),
        ];

        $pembayaranModel->insert($data);
        $pemesananModel->update($idPemesanan, ['id_status' => 3]);

        session()->setFlashdata('success', 'Pembayaran berhasil dikirim.');
        return redirect()->to('dashboard/pemesanan');
    }
}