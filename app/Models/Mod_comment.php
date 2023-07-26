<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_comment extends Model
{
    protected $table = 'tb_comment';
    protected $primaryKey = 'id_comment';
    protected $allowedFields = [
        'id_login',
        'id_berita',
        'isi',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
