<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_ikan extends Model
{
    protected $table = 'tb_ikan';
    protected $primaryKey = 'id_ikan';
    protected $allowedFields = [
        'nama_ikan',
        'habitat',
        'deskripsi_ikan',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_ikan';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
