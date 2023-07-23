<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pembenihan extends Model
{
    protected $table = 'tb_pembenihan';
    protected $primaryKey = 'id_pembenihan';
    protected $allowedFields = [
        'id_ikan',
        'tgl_benih',
        'lokasi_benih',
        'metode',
        'jumlah_betina',
        'jumlah_jantan',
        'jumlah_telur',
        'status_benih',
        'keterangan',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
