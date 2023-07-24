<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_transaksi_ikan extends Model
{
    protected $table = 'tb_transaksi_ikan';
    protected $primaryKey = 'id_transaksi_ikan';
    protected $allowedFields = [
        'id_ikan',
        'tanggal',
        'jumlah',
        'keterangan',
        'lokasi',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
