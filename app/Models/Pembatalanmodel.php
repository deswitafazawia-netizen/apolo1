<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembatalanmodel extends Model
{
    protected $table = 'pembatalan';
    protected $primaryKey = 'id_pembatalan';

    protected $allowedFields = [
        'id_pemesanan',
        'pihak_pembatal',
        'status_sebelumnya',
        'alasan',
        'status_verifikasi',
        'tgl_pembatalan'
    ];

    protected $returnType = 'array';
}
