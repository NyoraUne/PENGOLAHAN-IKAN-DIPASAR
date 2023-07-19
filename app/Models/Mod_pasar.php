<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pasar extends Model
{
    protected $table = 'tb_pasar';
    protected $primaryKey = 'id_pasar';
    protected $allowedFields = [
        'nama_pasar',
        'alamat_pasar',
        'deskripsi_pasar',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
