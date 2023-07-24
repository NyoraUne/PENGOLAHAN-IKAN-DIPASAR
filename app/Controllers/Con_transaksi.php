<?php

namespace App\Controllers;

use App\Models\Mod_ikan;
use App\Models\Mod_transaksi_ikan;

class Con_transaksi extends BaseController
{
    protected $session;
    protected $Mod_ikan;
    protected $Mod_transaksi_ikan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
        $this->Mod_transaksi_ikan = new Mod_transaksi_ikan();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/Auth/login');
        }

        //cek role dari session
        if ($this->session->get('hak_akses') != 1) {
            return redirect()->to('/user');
        }

        $ikan = $this->Mod_ikan->findAll();
        $transaksi = $this->Mod_transaksi_ikan
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_transaksi_ikan.id_ikan')
            ->findAll();
        $data = [
            'title' => 'Nama',
            'type' => 'Form Keluar Masuk Ikan',
            'head' => 'Form Input Data Keluar Masuk Ikan',
            'ikan' => $ikan,
            'transaksi' => $transaksi,
        ];

        return view('admin/transaksi/index', $data);
    }
    function simpan_data()
    {
        $input = $this->request->getPost();
        $data = [
            'id_ikan' => $input['id_ikan'],
            'tanggal' => $input['tanggal'],
            'jumlah' => $input['jumlah'],
            'keterangan' => $input['keterangan'],
            'lokasi' => $input['lokasi'],
        ];

        $status = $this->Mod_transaksi_ikan->insert($data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
}
