<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_penjual extends Model
{
    protected $table = 'tb_penjual';
    protected $primaryKey = 'id_penjual';
    protected $allowedFields = [
        'id_pasar',
        'id_user',
        'nama_toko',
        'kontak_toko',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
