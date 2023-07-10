<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pasar extends Model
{
    protected $table = 'tb_pasar';
    protected $primaryKey = 'id_pasar';
    protected $allowedFields = [
        'nama_pasar',
        'tanggal',
        'nama_penjual',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at_pasar';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
