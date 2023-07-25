<?php

namespace App\Controllers;

use App\Models\Mod_detail_harga;
use App\Models\Mod_hargaikan;
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Output\Options as OutputOptions;
use Dompdf\Output\DefaultRenderer;


class Lap_hikan extends BaseController


{
    protected $session;
    protected $Mod_hargaikan;
    protected $Mod_detail_harga;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_hargaikan = new Mod_hargaikan();
        $this->Mod_detail_harga = new Mod_detail_harga();
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
            'type' => 'Laporan Harga Ikan',
            'head' => 'Data Laporan Harga Ikan',
        ];

        return view('admin/Laporan/hikan/index', $data);
    }
    function filter()
    {
        $lap = $this->request->getPost();

        $tgl1 = $lap['tm'];
        $tgl2 = $lap['ta'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $var = $this->Mod_hargaikan
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_harga_ikan.id_pasar')
                ->findAll();

            $var2 = $this->Mod_detail_harga
                ->join('tb_ikan', 'tb_ikan.id_ikan = detail_harga.id_ikan')
                ->orderBy('detail_harga.created_at', 'desc')->findAll();



            $msg = '';
        } else if (empty($tgl1)) {
            $var = $this->Mod_hargaikan
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_harga_ikan.id_pasar')
                ->findAll();

            $var2 = $this->Mod_detail_harga
                ->join('tb_ikan', 'tb_ikan.id_ikan = detail_harga.id_ikan')
                ->where('detail_harga.created_at <=', $tgl2)
                ->findAll();

            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $var = $this->Mod_hargaikan
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_harga_ikan.id_pasar')
                ->findAll();

            $var2 = $this->Mod_detail_harga
                ->join('tb_ikan', 'tb_ikan.id_ikan = detail_harga.id_ikan')
                ->where('detail_harga.created_at >=', $tgl1)
                ->findAll();

            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $var = $this->Mod_hargaikan
                ->join('tb_pasar', 'tb_pasar.id_pasar=tb_harga_ikan.id_pasar')
                ->findAll();

            $var2 = $this->Mod_detail_harga
                ->join('tb_ikan', 'tb_ikan.id_ikan = detail_harga.id_ikan')
                ->where('detail_harga.created_at <=', $tgl2)
                ->where('detail_harga.created_at >=', $tgl1)
                ->findAll();

            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        // dd($var2);



        $data = [
            'hikan' => $var,
            'msg' => $msg,
            'title' => 'Laporan Data Harga Ikan',
            'harga' => $var2,
        ];
        // dd($data);

        // echo view('user/laporan/dataikan', $data);

        // return view('admin/Laporan/ikan/cetak');
        $html = view('admin/Laporan/hikan/cetak', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();


        $dompdf->stream('laporan.pdf', [
            'Attachment' => false // This is set to false to display the PDF directly
        ]);
    }
}
