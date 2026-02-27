<?php

namespace App\Controllers;

use App\Models\Model_admin;

class Home extends BaseController
{
    protected $m_admin;
    protected $m_auth;
    public function __construct()
    {
        $this->m_admin = new Model_admin();
        helper('form');
    }

    public function index(): string
    {

        $data = array(
            'title' => 'Objek',
            'polygon' => $this->m_admin->get_polygon()->getResult(),
            'longsor' => $this->m_admin->get_longsor()->getResult(),
            'banjir' => $this->m_admin->get_banjir()->getResult(),
            'gempa' => $this->m_admin->get_gempa()->getResult(),
            'cuaca' => $this->m_admin->get_cuaca()->getResult(),
        );

       
        return view('front/mainpage', $data);
    }

    public function grafik_situs_sulteng()
    {
        // Ambil semua data objek (sesuaikan nama model/method jika berbeda)
        $data = $this->m_admin->get_situs()->getResult();

        $counts = [];

        foreach ($data as $row) {
            // Pastikan field prov dan status tersedia
            $prov = isset($row->prov) ? trim($row->prov) : '';
            $status = isset($row->status_cb_odcb) ? trim($row->status_cb_odcb) : '';

            // Filter hanya data dari Provinsi Sulawesi Tengah (case-insensitive)
            if ($prov === '' || stripos($prov, 'sulawesi tengah') === false) {
                continue;
            }

            // Hanya hitung yang memiliki status CB/ODCB (tidak kosong / bukan '-')
            if ($status === '' || $status === '-' || strtolower($status) === 'null') {
                continue;
            }

            // Nama kabupaten (fallback jika kosong)
            $kab = isset($row->kab) && trim($row->kab) !== '' ? trim($row->kab) : 'Tidak Diketahui';

            if (! isset($counts[$kab])) {
                $counts[$kab] = 0;
            }
            $counts[$kab]++;
        }

        // Urutkan descending berdasarkan jumlah (opsional)
        arsort($counts);

        $categories = array_keys($counts);
        $dataSeries = array_values($counts);

        // Pastikan data numeric (cast ke int)
        $dataSeries = array_map('intval', $dataSeries);

        $series = [
            [
                'name' => 'Jumlah',
                'data' => $dataSeries
            ]
        ];

        return $this->response->setJSON([
            'categories' => $categories,
            'series'     => $series
        ]);
    }

    public function grafik_situs_sulbar()
    {
        // Ambil semua data objek (sesuaikan nama model/method jika berbeda)
        $data = $this->m_admin->get_situs()->getResult();

        $counts = [];

        foreach ($data as $row) {
            // Pastikan field prov dan status tersedia
            $prov = isset($row->prov) ? trim($row->prov) : '';
            $status = isset($row->status_cb_odcb) ? trim($row->status_cb_odcb) : '';

            // Filter hanya data dari Provinsi Sulawesi Tengah (case-insensitive)
            if ($prov === '' || stripos($prov, 'sulawesi barat') === false) {
                continue;
            }

            // Hanya hitung yang memiliki status CB/ODCB (tidak kosong / bukan '-')
            if ($status === '' || $status === '-' || strtolower($status) === 'null') {
                continue;
            }

            // Nama kabupaten (fallback jika kosong)
            $kab = isset($row->kab) && trim($row->kab) !== '' ? trim($row->kab) : 'Tidak Diketahui';

            if (! isset($counts[$kab])) {
                $counts[$kab] = 0;
            }
            $counts[$kab]++;
        }

        // Urutkan descending berdasarkan jumlah (opsional)
        arsort($counts);

        $categories = array_keys($counts);
        $dataSeries = array_values($counts);

        // Pastikan data numeric (cast ke int)
        $dataSeries = array_map('intval', $dataSeries);

        $series = [
            [
                'name' => 'Jumlah',
                'data' => $dataSeries
            ]
        ];

        return $this->response->setJSON([
            'categories' => $categories,
            'series'     => $series
        ]);
    }
}
