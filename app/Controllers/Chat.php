<?php

namespace App\Controllers;

class Chat extends BaseController
{
    public function index($id_photografer)
    {
        $photograferModel = new \App\Models\PhotograferModel();
        $chatModel = new \App\Models\ChatModel();

        $id_pelanggan = session()->get('id_pelanggan');

        $data['photografer'] = $photograferModel->find($id_photografer);

        $data['messages'] = $chatModel
            ->where('id_pelanggan', $id_pelanggan)
            ->where('id_photografer', $id_photografer)
            ->orderBy('waktu', 'ASC')
            ->findAll();

        $data['chat_with'] = 'photografer';
        $data['chat_id'] = $id_photografer;

        return view('pages/chat', $data);
    }

    public function inboxPelanggan()
    {
        $chatModel = new \App\Models\ChatModel();
        $id_pelanggan = session()->get('id_pelanggan');

        $conversations = $chatModel
            ->select('chat.*, photografer.nama_photografer, photografer.foto as foto_photografer')
            ->join('photografer', 'photografer.id_photografer = chat.id_photografer')
            ->where('chat.id_pelanggan', $id_pelanggan)
            ->orderBy('chat.waktu', 'DESC')
            ->findAll();

        $grouped = [];
        foreach ($conversations as $msg) {
            $pid = $msg['id_photografer'];
            if (!isset($grouped[$pid])) {
                $grouped[$pid] = [
                    'id_photografer' => $pid,
                    'nama_photografer' => $msg['nama_photografer'],
                    'foto_photografer' => $msg['foto_photografer'],
                    'last_message' => $msg['pesan'],
                    'last_time' => $msg['waktu']
                ];
            }
        }

        $data['conversations'] = $grouped;
        return view('pages/chat_inbox_pelanggan', $data);
    }

    public function inbox()
    {
        $chatModel = new \App\Models\ChatModel();
        $id_photografer = session()->get('id_photografer');

        $conversations = $chatModel
            ->select('chat.*, pelanggan.nama_pelanggan, pelanggan.foto as foto_pelanggan')
            ->join('pelanggan', 'pelanggan.id_pelanggan = chat.id_pelanggan')
            ->where('chat.id_photografer', $id_photografer)
            ->orderBy('chat.waktu', 'DESC')
            ->findAll();

        $grouped = [];
        foreach ($conversations as $msg) {
            $pid = $msg['id_pelanggan'];
            if (!isset($grouped[$pid])) {
                $grouped[$pid] = [
                    'id_pelanggan' => $pid,
                    'nama_pelanggan' => $msg['nama_pelanggan'],
                    'foto_pelanggan' => $msg['foto_pelanggan'],
                    'last_message' => $msg['pesan'],
                    'last_time' => $msg['waktu']
                ];
            }
        }

        $data['conversations'] = $grouped;

        return view('pages/chat_inbox', $data);
    }

    public function with($id_pelanggan)
    {
        $chatModel = new \App\Models\ChatModel();
        $pelangganModel = new \App\Models\PelangganModel();

        $id_photografer = session()->get('id_photografer');

        $data['pelanggan'] = $pelangganModel->find($id_pelanggan);

        $data['messages'] = $chatModel
            ->where('id_pelanggan', $id_pelanggan)
            ->where('id_photografer', $id_photografer)
            ->orderBy('waktu', 'ASC')
            ->findAll();

        $data['chat_with'] = 'pelanggan';
        $data['chat_id'] = $id_pelanggan;

        return view('pages/chat', $data);
    }

    public function kirim()
    {
        $chatModel = new \App\Models\ChatModel();
        $role = session()->get('role');

        if ($role === 'pelanggan') {
            $chatModel->save([
                'id_pelanggan'   => session()->get('id_pelanggan'),
                'id_photografer' => $this->request->getPost('chat_id'),
                'pesan'          => $this->request->getPost('pesan'),
                'pengirim'       => 'pelanggan',
                'waktu'          => date('Y-m-d H:i:s')
            ]);
        } elseif ($role === 'photografer') {
            $chatModel->save([
                'id_pelanggan'   => $this->request->getPost('chat_id'),
                'id_photografer' => session()->get('id_photografer'),
                'pesan'          => $this->request->getPost('pesan'),
                'pengirim'       => 'photografer',
                'waktu'          => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->back();
    }

    public function kirimAjax()
    {
        $chatModel = new \App\Models\ChatModel();
        $role = session()->get('role');

        if ($role === 'pelanggan') {
            $chatModel->save([
                'id_pelanggan'   => session()->get('id_pelanggan'),
                'id_photografer' => $this->request->getPost('chat_id'),
                'pesan'          => $this->request->getPost('pesan'),
                'pengirim'       => 'pelanggan',
                'waktu'          => date('Y-m-d H:i:s')
            ]);
        } elseif ($role === 'photografer') {
            $chatModel->save([
                'id_pelanggan'   => $this->request->getPost('chat_id'),
                'id_photografer' => session()->get('id_photografer'),
                'pesan'          => $this->request->getPost('pesan'),
                'pengirim'       => 'photografer',
                'waktu'          => date('Y-m-d H:i:s')
            ]);
        }

        return $this->response->setJSON(['status' => 'ok']);
    }

    public function polling()
    {
        $chatModel = new \App\Models\ChatModel();
        $role = session()->get('role');

        if ($role === 'pelanggan') {
            $id_pelanggan = session()->get('id_pelanggan');
            $id_photografer = $this->request->getGet('chat_id');

            $messages = $chatModel
                ->where('id_pelanggan', $id_pelanggan)
                ->where('id_photografer', $id_photografer)
                ->orderBy('waktu', 'ASC')
                ->findAll();
        } elseif ($role === 'photografer') {
            $id_photografer = session()->get('id_photografer');
            $id_pelanggan = $this->request->getGet('chat_id');

            $messages = $chatModel
                ->where('id_pelanggan', $id_pelanggan)
                ->where('id_photografer', $id_photografer)
                ->orderBy('waktu', 'ASC')
                ->findAll();
        } else {
            return $this->response->setJSON([]);
        }

        $result = [];
        foreach ($messages as $msg) {
            $isMine = ($msg['pengirim'] === 'pelanggan' && $role === 'pelanggan') ||
                      ($msg['pengirim'] === 'photografer' && $role === 'photografer');
            $result[] = [
                'id'       => $msg['id_chat'],
                'pesan'    => $msg['pesan'],
                'waktu'    => date('H:i', strtotime($msg['waktu'])),
                'isMine'   => $isMine,
                'pengirim' => $msg['pengirim']
            ];
        }

        return $this->response->setJSON($result);
    }

    public function typing()
    {
        $role = session()->get('role');
        $db = \Config\Database::connect();

        if ($role === 'pelanggan') {
            $id_pelanggan = session()->get('id_pelanggan');
            $id_photografer = $this->request->getPost('chat_id');

            $db->query("INSERT INTO chat_typing (id_pelanggan, id_photografer, pengirim, last_typing) 
                        VALUES (?, ?, 'pelanggan', NOW())
                        ON DUPLICATE KEY UPDATE last_typing = NOW()",
                        [$id_pelanggan, $id_photografer]);
        } elseif ($role === 'photografer') {
            $id_photografer = session()->get('id_photografer');
            $id_pelanggan = $this->request->getPost('chat_id');

            $db->query("INSERT INTO chat_typing (id_pelanggan, id_photografer, pengirim, last_typing) 
                        VALUES (?, ?, 'photografer', NOW())
                        ON DUPLICATE KEY UPDATE last_typing = NOW()",
                        [$id_pelanggan, $id_photografer]);
        }

        return $this->response->setJSON(['status' => 'ok']);
    }

    public function isTyping()
    {
        $role = session()->get('role');
        $db = \Config\Database::connect();

        if ($role === 'pelanggan') {
            $id_pelanggan = session()->get('id_pelanggan');
            $id_photografer = $this->request->getGet('chat_id');

            $result = $db->query("SELECT last_typing FROM chat_typing 
                                  WHERE id_pelanggan = ? AND id_photografer = ? AND pengirim = 'photografer'
                                  AND last_typing > DATE_SUB(NOW(), INTERVAL 3 SECOND)",
                                  [$id_pelanggan, $id_photografer])->getRow();
        } elseif ($role === 'photografer') {
            $id_photografer = session()->get('id_photografer');
            $id_pelanggan = $this->request->getGet('chat_id');

            $result = $db->query("SELECT last_typing FROM chat_typing 
                                  WHERE id_pelanggan = ? AND id_photografer = ? AND pengirim = 'pelanggan'
                                  AND last_typing > DATE_SUB(NOW(), INTERVAL 3 SECOND)",
                                  [$id_pelanggan, $id_photografer])->getRow();
        }

        return $this->response->setJSON(['typing' => $result ? true : false]);
    }

    public function stopTyping()
    {
        $role = session()->get('role');
        $db = \Config\Database::connect();

        if ($role === 'pelanggan') {
            $id_pelanggan = session()->get('id_pelanggan');
            $id_photografer = $this->request->getPost('chat_id');
            $db->query("DELETE FROM chat_typing WHERE id_pelanggan = ? AND id_photografer = ? AND pengirim = 'pelanggan'",
                        [$id_pelanggan, $id_photografer]);
        } elseif ($role === 'photografer') {
            $id_photografer = session()->get('id_photografer');
            $id_pelanggan = $this->request->getPost('chat_id');
            $db->query("DELETE FROM chat_typing WHERE id_pelanggan = ? AND id_photografer = ? AND pengirim = 'photografer'",
                        [$id_pelanggan, $id_photografer]);
        }

        return $this->response->setJSON(['status' => 'ok']);
    }
}
