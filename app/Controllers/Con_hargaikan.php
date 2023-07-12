<?php

namespace App\Controllers;

use App\Models\Mod_hargaikan;
use App\Models\Mod_ikan;
use App\Models\Mod_pasar;

class Con_hargaikan extends BaseController
{
    protected $session;
    protected $Mod_hargaikan;
    protected $Mod_ikan;
    protected $Mod_pasar;

    public function __construct()
    {
        $this->session = session();

        $this->Mod_hargaikan = new Mod_hargaikan();
        $this->Mod_ikan = new Mod_ikan();
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

        $ikan = $this->Mod_ikan->findAll();
        $pasar = $this->Mod_pasar->findAll();

        $val = $this->Mod_hargaikan
            ->select('*')
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_harga_ikan.id_ikan', 'left')
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_harga_ikan.id_pasar', 'left')
            ->orderBy('update_at', 'desc')
            ->findAll();


        //->join('table2', 'table1.id = table2.table1_id', 'left')
        $data = [
            'title' => 'Nama',
            'type' => 'Dashboard',
            'head' => 'Sistem informasi ketersediaan harga ikan di pasar pada kantor dinas perikanan(DISKAN) Rantau Kabupaten Tapin Berbasis WEB',
            'harga' => $val,
            'ikan' => $ikan,
            'pasar' => $pasar,
        ];

        return view('admin/harga_ikan/index', $data);
    }
    function tambah_harga()
    {
        $input = $this->request->getPost();

        $data = [
            'id_ikan' => $input['id_ikan'],
            'harga' => $input['harga'],
            'id_pasar' => $input['id_pasar'],
            'volume' => $input['volume'],
        ];

        $status = $this->Mod_hargaikan->insert($data);

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function hapus_harga($id)
    {
        // dd($id);
        $status = $this->Mod_hargaikan->where('id_harga_ikan', $id)->delete();
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->back();
    }
    function edit_harga()
    {

        $val = $this->Mod_hargaikan
            ->select('*')
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_harga_ikan.id_ikan', 'left')
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_harga_ikan.id_pasar', 'left')
            ->orderBy('update_at', 'desc')
            ->first();

        $data = [
            'title' => 'Nama',
            'head' => 'Form Edit Harga Ikan',
            'type' => 'a',
            'harga' => $val
        ];

        return view('admin/harga_ikan/edit_harga', $data);
    }
    function simpan_edit($id)
    {
        $input = $this->request->getPost();
        $data = [
            'id_pasar' => $input['id_pasar'],
            'id_ikan' => $input['id_ikan'],
            'harga' => $input['harga'],
            'volume' => $input['volume'],
        ];

        $status = $this->Mod_hargaikan->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_edit', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_edit', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_hargaikan/index');
    }
}
