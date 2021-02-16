<?php

namespace App\Controllers;

use App\Models\UangKeluar_model;

class UangKeluar extends BaseController
{
    public function index()
    {
        $model = new UangKeluar_model();
        $data['cashout'] = $model->getCashOut()->getresultArray();
        echo view('v_uangkeluar', $data);
    }
    public function save()
    {
        $model = new UangKeluar_model();
        $data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->saveCashOut($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/uangkeluar');
    }

    public function update()
    {
        $model = new UangKeluar_model();
        $id = $this->request->getPost('id');
        $data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->updateCashOut($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/uangkeluar');
    }

    public function delete()
    {
        $model = new UangKeluar_model();
        $id = $this->request->getPost('id');
        $model->deleteCashOut($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/uangkeluar');
    }
}
