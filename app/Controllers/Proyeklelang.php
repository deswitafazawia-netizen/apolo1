<?php

namespace App\Controllers;

use App\Models\Proyeklelangpelangganmodel;

class Proyeklelang extends BaseController
{
    public function index()
    {
        $model = new Proyeklelangpelangganmodel();
        $role = session()->get('role');

        if ($role === 'admin') {
            $data['proyek'] = $model
                ->select('proyek_lelang.*, pelanggan.nama_pelanggan')
                ->join('pelanggan', 'pelanggan.id_pelanggan = proyek_lelang.id_pelanggan')
                ->findAll();
            $data['totalProyek'] = $model->countAll();
            $data['proyekAktif'] = $model->where('id_status', 1)->countAllResults();
            $data['proyekSelesai'] = $model->where('id_status', 2)->countAllResults();
            $data['proyekDitutup'] = $model->where('id_status', 3)->countAllResults();
        } elseif ($role === 'pelanggan') {
            $id = session()->get('id_pelanggan');
            $data['proyek'] = $model
                ->where('id_pelanggan', $id)
                ->orderBy('id_proyek', 'DESC')
                ->findAll();
        } elseif ($role === 'photografer') {
            $data['proyek'] = $model
                ->where('id_status', 1)
                ->orderBy('id_proyek', 'DESC')
                ->findAll();
        }

        $data['role'] = $role;
        return view('pages/proyeklelang', $data);
    }

    public function simpan()
    {
        $model = new Proyeklelangpelangganmodel();
        $file = $this->request->getFile('lampiran');
        $namaFile = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/proyek', $namaFile);
        }
        $model->save([
            'id_pelanggan'       => session()->get('id_pelanggan'),
            'judul_proyek'       => $this->request->getPost('judul_proyek'),
            'tgl_acara'          => $this->request->getPost('tgl_acara'),
            'lokasi'             => $this->request->getPost('lokasi'),
            'budget'             => $this->request->getPost('budget'),
            'deadline_penawaran' => $this->request->getPost('deadline_penawaran'),
            'deskripsi'          => $this->request->getPost('deskripsi'),
            'lampiran'           => $namaFile,
            'id_status'          => 1,
            'tgl_dibuat'         => date('Y-m-d H:i:s')
        ]);
        return redirect()->to(base_url('dashboard/proyeklelang'))
                        ->with('success', 'Proyek lelang berhasil dipublikasikan.');
    }

    public function tutup($id)
    {
        $model = new Proyeklelangpelangganmodel();
        $model->update($id, ['id_status' => 3]);
        return redirect()->to(base_url('dashboard/proyeklelang'))
                        ->with('success', 'Proyek berhasil ditutup.');
    }

    public function hapus($id)
    {
        $model = new Proyeklelangpelangganmodel();
        $model->delete($id);
        return redirect()->to(base_url('dashboard/proyeklelang'))
                        ->with('success', 'Proyek berhasil dihapus.');
    }
}
