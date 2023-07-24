<?php

namespace App\Controllers;

use App\Models\Mod_penjual;
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Output\Options as OutputOptions;
use Dompdf\Output\DefaultRenderer;


class Lap_penjual extends BaseController


{
    protected $session;
    protected $Mod_penjual;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_penjual = new Mod_penjual();
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
            'type' => 'Laporan Penjual',
            'head' => 'Data Laporan Penjual',
        ];

        return view('admin/Laporan/penjual/index', $data);
    }
    function filter()
    {
        $lap = $this->request->getPost();

        $tgl1 = $lap['tm'];
        $tgl2 = $lap['ta'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $var = $this->Mod_penjual
                ->join('tb_user', 'tb_user.id_user=tb_penjual.id_user')
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_penjual.id_pasar')
                ->orderBy('tb_penjual.created_at', 'desc')->findAll();

            $msg = '';
        } else if (empty($tgl1)) {
            $var = $this->Mod_penjual
                ->join('tb_user', 'tb_user.id_user=tb_penjual.id_user')
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_penjual.id_pasar')
                ->where('tb_penjual.created_at <=', $tgl2)
                ->orderBy('tb_penjual.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $var = $this->Mod_penjual
                ->join('tb_user', 'tb_user.id_user=tb_penjual.id_user')
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_penjual.id_pasar')
                ->where('tb_penjual.created_at >=', $tgl1)
                ->orderBy('tb_penjual.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $var = $this->Mod_penjual
                ->join('tb_user', 'tb_user.id_user=tb_penjual.id_user')
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_penjual.id_pasar')
                ->where('tb_penjual.created_at >=', $tgl1)
                ->where('tb_penjual.created_at <=', $tgl2)
                ->orderBy('tb_penjual.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'penjual' => $var,
            'msg' => $msg,
            'title' => 'Laporan Data Penjual',
        ];
        // dd($data);

        // echo view('user/laporan/dataikan', $data);

        // return view('admin/Laporan/ikan/cetak');
        $html = view('admin/Laporan/penjual/cetak', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();


        $dompdf->stream('laporan.pdf', [
            'Attachment' => false // This is set to false to display the PDF directly
        ]);
    }
}
