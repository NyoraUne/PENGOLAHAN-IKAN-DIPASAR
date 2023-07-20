<?php

namespace App\Controllers;

use App\Models\Mod_ikan;

class Con_ikan extends BaseController
{
    protected $session;
    protected $Mod_ikan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
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

        $data = [
            'title' => 'Nama',
            'head' => 'Form Input, Edit Dan Hapus Data Ikan.',
            'type' => 'Form Ikan',
            'ikan' => $ikan,
        ];



        return view('admin/ikan/index', $data);
    }
    function tambah_ikan()
    {
        $input = $this->request->getPost();
        $nama_ikan = ucfirst($input['nama_ikan']);

        $data = [
            'nama_ikan' => $nama_ikan,
            'habitat' => $input['habitat_ikan'],
            'deskripsi_ikan' => $input['deskripsi_ikan'],
        ];

        $status = $this->Mod_ikan->insert($data);

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function hapus_ikan($id)
    {
        $status = $this->Mod_ikan->delete($id);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->back();
    }
    function edit_ikan($id)
    {
        $var = $this->Mod_ikan->where('id_ikan', $id)->first();
        $data = [
            'title' => 'Edit Form ikan | Wildan',
            'head' => 'Form Edit ikan.',
            'type' => 'Form Edit ikan ID. ' . $var['id_ikan'],
            'ikan' => $var,
        ];
        echo view('admin/ikan/edit_ikan', $data);
    }
    function simpan_edit_ikan($id)
    {
        $input = $this->request->getPost();
        $data = [
            'nama_ikan' => $input['nama_ikan'],
            'habitat' => $input['habitat'],
            'deskripsi_ikan' => $input['deskripsi_ikan'],
        ];
        $status = $this->Mod_ikan->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_edit', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_edit', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_ikan/index');
    }
}
