<?php

namespace App\Controllers;

use App\Models\Mod_berita;

class Con_berita extends BaseController
{
    protected $session;
    protected $Mod_berita;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_berita = new Mod_berita();
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
        $berita = $this->Mod_berita->findAll();

        $data = [
            'title' => 'Nama',
            'type' => 'Form Berita',
            'head' => 'Form Input Data Berita',
            'berita' => $berita,
        ];

        return view('admin/berita/index', $data);
    }
    function simpan_data()
    {
        $input = $this->request->getPost();

        $data = [
            'judul' => $input['judul'],
            'isi_berita' => $input['isi_berita'],
        ];

        $status = $this->Mod_berita->insert($data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function reviw($id)
    {
        $berita = $this->Mod_berita->where('id_berita', $id)->first();
        // dd($berita);
        $data = [
            'title' => 'Nama',
            'type' => 'Form Berita',
            'head' => 'Form Input Data Berita',
            'berita' => $berita,
        ];
        return view('admin/berita/detail', $data);
    }
}
