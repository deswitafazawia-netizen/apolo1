<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model
{
    protected $table = 'chat';
    protected $primaryKey = 'id_chat';

    protected $allowedFields = [
        'id_pelanggan',
        'id_photografer',
        'pesan',
        'pengirim',
        'waktu'
    ];

    protected $returnType = 'array';
}