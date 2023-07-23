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
            'type' => 'Form Pasar',
            'pasar' => $pasar,
        ];

        return view('admin/pasar/index', $data);
    }
    function tambah_pasar()
    {
        $input = $this->request->getPost();
        $nama_pasar = ucfirst($input['nama_pasar']);

        $data = [
            'nama_pasar' => $nama_pasar,
            'alamat_pasar' => $input['alamat_pasar'],
            'deskripsi_pasar' => $input['deskripsi_pasar'],
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
    function hapus_pasar($id)
    {
        $status = $this->Mod_pasar->delete($id);

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->back();
    }
    function edit_pasar($id)
    {
        $var = $this->Mod_pasar->where('id_pasar', $id)->first();
        $data = [
            'title' => 'Edit Form Pasar | Wildan',
            'head' => 'Form Edit Pasar.',
            'type' => 'Form Edit Pasar ID. ' . $var['id_pasar'],
            'pasar' => $var,
        ];
        echo view('admin/pasar/edit_pasar', $data);
    }
    function simpan_edit_pasar($id)
    {
        $input = $this->request->getPost();
        $data = [
            'nama_pasar' => $input['nama_pasar'],
            'alamat_pasar' => $input['alamat_pasar'],
            'deskripsi_pasar' => $input['deskripsi_pasar'],
        ];
        $status = $this->Mod_pasar->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_edit', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_edit', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_pasar/index');
    }
}
