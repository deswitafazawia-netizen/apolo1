<?php

namespace App\Controllers;

class Chat extends BaseController
{
    public function index($id_photografer)
    {
        $photograferModel = new \App\Models\PhotograferModel();

        $data['photografer'] = $photograferModel->find($id_photografer);

        return view('pages/chat', $data);
    }

    public function kirim()
    {
        $chatModel = new \App\Models\ChatModel();

        $chatModel->save([
            'id_pelanggan'   => session()->get('id_pelanggan'),
            'id_photografer' => $this->request->getPost('id_photografer'),
            'pesan'          => $this->request->getPost('pesan'),
            'pengirim'       => 'pelanggan'
        ]);

        return redirect()->back();
    }
}