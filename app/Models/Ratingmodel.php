<?php

namespace App\Models;

use CodeIgniter\Model;

class Ratingmodel extends Model
{
    protected $table = 'rating';
    protected $primaryKey = 'id_rating';

    protected $allowedFields = [
        'id_pelanggan',
        'id_photografer',
        'id_pemesanan',
        'nilai_rating',
        'komentar',
        'tgl_rating'
    ];

    protected $returnType = 'array';
}
