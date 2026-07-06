<?php

namespace App\Models;

use CodeIgniter\Model;

class PhotograferModel extends Model
{
    protected $table = 'photografer';
    protected $primaryKey = 'id_photografer';

    protected $allowedFields = [
        'nama_photografer',
        'email',
        'no_hp',
        'alamat',
        'password',
        'foto',
        'id_status'
    ];

    protected $useTimestamps = false;
    protected $returnType = 'array';

    public function GetPhotografer()
    {
        $db = \Config\Database::connect();
        $query = $db->query("
            SELECT photografer.*, 
                   COALESCE((SELECT AVG(nilai_rating) FROM rating WHERE rating.id_photografer = photografer.id_photografer), 0) as nilai_rating
            FROM photografer
        ");
        return $query->getResultArray();
    }
}
