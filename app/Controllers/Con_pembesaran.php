<?php

namespace App\Controllers;

use App\Models\Mod_ikan;
use App\Models\Mod_pembesaran;

class Con_pembesaran extends BaseController
{
    protected $session;
    protected $Mod_ikan;
    protected $Mod_pembesaran;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
        $this->Mod_pembesaran = new Mod_pembesaran();
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
        $pembesaran = $this->Mod_pembesaran
            ->join('tb_ikan', 'tb_ikan.id_ikan=tb_pembesaran.id_ikan')
            ->orderBy('tb_pembesaran.created_at', 'desc')
            ->findAll();
        $data = [
            'title' => 'Nama',
            'type' => 'Form Pembesaran Ikan',
            'head' => 'Form Input Untuk Data Pembesaran Ikan ',
            'ikan' => $ikan,
            'pembesaran' => $pembesaran,
        ];

        return view('admin/pembesaran/index', $data);
    }
    function simpan_data()
    {
        $input = $this->request->getPost();
        $data = [
            'id_ikan' => $input['id_ikan'],
            'tgl_mulai' => $input['tgl_mulai'],
            'tgl_selesai' => $input['tgl_selesai'],
            'lokasi' => $input['lokasi'],
            'suhu_air' => $input['suhu_air'],
            'jumlah_pakan' => $input['jumlah_pakan'],
            'kondisi_kesehatan' => $input['kondisi_kesehatan'],
            'keterangan' => $input['keterangan'],
        ];
        $status = $this->Mod_pembesaran->insert($data);

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function detail($id)
    {
        $pembesaran = $this->Mod_pembesaran
            ->join('tb_ikan', 'tb_ikan.id_ikan=tb_pembesaran.id_ikan')
            ->where('id_pembesaran', $id)
            ->first();
        $ikan = $this->Mod_ikan->findAll();

        $data = [
            'title' => 'Nama',
            'type' => 'Form Pembesaran ID. ' . $pembesaran['id_pembesaran'] . ' - ' . $pembesaran['nama_ikan'],
            'head' => 'Form Edit Pembesaran',
            'pembesaran' => $pembesaran,
            'ikan' => $ikan,
        ];

        return view('admin/pembesaran/detail', $data);
    }
    function simpan_edit($id)
    {
        $input = $this->request->getPost();
        $data = [
            'id_ikan' => $input['id_ikan'],
            'tgl_mulai' => $input['tgl_mulai'],
            'tgl_selesai' => $input['tgl_selesai'],
            'lokasi' => $input['lokasi'],
            'suhu_air' => $input['suhu_air'],
            'jumlah_pakan' => $input['jumlah_pakan'],
            'kondisi_kesehatan' => $input['kondisi_kesehatan'],
            'keterangan' => $input['keterangan'],
        ];

        $status = $this->Mod_pembesaran->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function hapus_data($id)
    {
        $status = $this->Mod_pembesaran
            ->where('id_pembesaran', $id)
            ->delete();

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_pembesaran');
    }
}
