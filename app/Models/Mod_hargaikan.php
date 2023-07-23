<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_hargaikan extends Model
{
    protected $table = 'tb_harga_ikan';
    protected $primaryKey = 'id_harga_ikan';
    protected $allowedFields = [
        'id_pasar',
        'id_ikan',
        'harga',
        'volume',
        'created_at',
        'update_at',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = '';
}
