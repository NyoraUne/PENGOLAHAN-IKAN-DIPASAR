<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_user extends Model
{
    protected $table = 'tb_login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = [
        'username',
        'password',
        'hak_akses',
    ];
}
