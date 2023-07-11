<?php

namespace App\Controllers;

class Con_hargaikan extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = session();
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
        $data = [
            'title' => 'Nama',
            'type' => 'Dashboard',
            'head' => 'Sistem informasi ketersediaan harga ikan di pasar pada kantor dinas perikanan(DISKAN) Rantau Kabupaten Tapin Berbasis WEB',
        ];

        return view('admin/harga_ikan/index', $data);
    }
}
