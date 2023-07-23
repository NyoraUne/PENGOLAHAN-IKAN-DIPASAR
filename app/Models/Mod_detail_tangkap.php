<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_detail_tangkap extends Model
{
    protected $table = 'detail_tangkap';
    protected $primaryKey = 'id_detail_tangkap';
    protected $allowedFields = [
        'id_perikanan_tangkap',
        'id_ikan',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
