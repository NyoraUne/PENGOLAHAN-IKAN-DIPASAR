<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_detail_harga extends Model
{
    protected $table = 'detail_harga';
    protected $primaryKey = 'id_detail_harga';
    protected $allowedFields = [
        'id_ikan',
        'id_harga_ikan',
        'harga',
        'banyak',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
