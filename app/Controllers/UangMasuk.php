<?php

namespace App\Controllers;

use App\Models\UangMasuk_model;
use App\Models\JenisPemasukan_model;

class UangMasuk extends BaseController
{
    public function index()
    {
        $model = new UangMasuk_model();
        $model1 = new JenisPemasukan_model();
        $data['cashin'] = $model->getCashIn();
        $data['jenispemasukan'] = $model1->getJenisPemasukan()->getresultArray();
        $db = \Config\Database::connect();
        $bulan = $db->query("SELECT id, tanggal, jenis, keterangan, jumlah, SUM(jumlah) AS total FROM cash_in");
        $row = $bulan->getResultArray();
        $data['total'] = $row;
        echo view('v_uangmasuk', $data);
    }
    public function save()
    {
        $model = new UangMasuk_model();
        $data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis' => $this->request->getPost('jenispemasukan'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->saveCashIn($data);
    }

    public function update()
    {
        $model = new UangMasuk_model();
        $id = $this->request->getPost('id');
        $data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis' => $this->request->getPost('jenispemasukan'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->updateCashIn($data, $id);
    }

    public function delete()
    {
        $model = new UangMasuk_model();
        $id = $this->request->getPost('id');
        $model->deleteCashIn($id);
    }

    public function table_uang_masuk()
    {
        $model = new UangMasuk_model();
        $model1 = new JenisPemasukan_model();
        $data['cashin'] = $model->getCashIn();
        $data['jenispemasukan'] = $model1->getJenisPemasukan()->getresultArray();
        $db = \Config\Database::connect();
        $bulan = $db->query("SELECT id, tanggal, jenis, keterangan, jumlah, SUM(jumlah) AS total FROM cash_in");
        $row = $bulan->getResultArray();
        $data['total'] = $row;
        echo view('ajax/table_uang_masuk', $data);
    }

    public function report()
    {
        $model = new UangMasuk_model();
        $model1 = new JenisPemasukan_model();
        $data['cashin'] = $model->getCashIn();
        $data['jenispemasukan'] = $model1->getJenisPemasukan()->getresultArray();
        $db = \Config\Database::connect();
        $bulan = $db->query("SELECT id, tanggal, jenis, keterangan, jumlah, SUM(jumlah) AS total FROM cash_in");
        $row = $bulan->getResultArray();
        $data['total'] = $row;
        echo view('report/lap_uangmasuk', $data);
    }
}
