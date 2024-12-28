<?php

namespace App\Controllers;

use App\Models\HouseModel;

class PredictionController extends BaseController
{
    public function index()
    {
        return view('prediction_form');
    }

    public function predict()
    {
        $luas_tanah = $this->request->getPost('luas_tanah');
        $jumlah_kamar = $this->request->getPost('jumlah_kamar');
        $lokasi = $this->request->getPost('lokasi');

        $model = new HouseModel();

        // Fetch data untuk model regresi
        $data = $model->findAll();
        if (empty($data)) {
            return view('result', ['error' => 'Tidak ada data untuk prediksi.']);
        }

        // Hitung regresi linear sederhana
        $harga_total = 0;
        $count = 0;

        foreach ($data as $row) {
            if ($row['lokasi'] === $lokasi) {
                $harga_total += ($row['harga'] / $row['luas_tanah']) * $luas_tanah;
                $count++;
            }
        }

        $prediksi = ($count > 0) ? $harga_total / $count : 0;

        return view('result', ['prediksi' => $prediksi]);
    }
}
