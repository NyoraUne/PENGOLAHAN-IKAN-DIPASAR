<?php

namespace App\Controllers;

use App\Models\Mod_pasar;

class Con_pasar extends BaseController
{
    protected $session;
    protected $Mod_pasar;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_pasar = new Mod_pasar();
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

        $pasar = $this->Mod_pasar->findAll();

        $data = [
            'title' => 'Form Pasar | Wildan',
            'head' => 'Form Input, Edit Dan Hapus Data Pasar.',
            'type' => 'Pasar',
            'pasar' => $pasar,
        ];

        return view('admin/pasar/index', $data);
    }
    function tambah_pasar()
    {
        $input = $this->request->getPost();
        $nama_pasar = ucfirst($input['nama_pasar']);
        $nama_penjual = ucfirst($input['nama_penjual']);

        $data = [
            'nama_pasar' => $nama_pasar,
            'date' => $input['tgl'],
            'nama_penjual' => $nama_penjual,
        ];

        $status = $this->Mod_pasar->insert($data);

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
