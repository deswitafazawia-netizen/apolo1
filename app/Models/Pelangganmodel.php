<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';

    protected $allowedFields = [
        'nama_pelanggan',
        'email',
        'no_hp',
        'password',
        'id_status'
    ];

    protected $useTimestamps = false;

    protected $returnType = 'array';
}