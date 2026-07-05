<?php

namespace App\Models;

use CodeIgniter\Model;

class Portofoliomodel extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id_portofolio';

    protected $allowedFields = [
        'id_photografer',
        'deskripsi',
        'foto',
        'tgl_upload'
    ];

    protected $useTimestamps = false;
    protected $returnType = 'array';
}