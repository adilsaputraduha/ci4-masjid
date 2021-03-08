<?php

namespace App\Controllers;

use App\Models\UangKeluar_model;
use App\Models\JenisPengeluaran_model;

class UangKeluar extends BaseController
{
    public function index()
    {
        $model = new UangKeluar_model();
        $model1 = new JenisPengeluaran_model();
        $data['cashout'] = $model->getCashOut();
        $data['jenispengeluaran'] = $model1->getJenisPengeluaran()->getresultArray();
        echo view('v_uangkeluar', $data);
    }
    public function save()
    {
        $model = new UangKeluar_model();
        $data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis' => $this->request->getPost('jenispengeluaran'),
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
            'jenis' => $this->request->getPost('jenispengeluaran'),
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

    public function table_uang_keluar()
    {
        $model = new UangKeluar_model();
        $model1 = new JenisPengeluaran_model();
        $data['cashout'] = $model->getCashOut();
        $data['jenispengeluaran'] = $model1->getJenisPengeluaran()->getresultArray();
        echo view('ajax/table_uang_keluar', $data);
    }

    public function report()
    {
        $model = new UangKeluar_model();
        $model1 = new JenisPengeluaran_model();
        $data['cashout'] = $model->getCashOut();
        $data['jenispengeluaran'] = $model1->getJenisPengeluaran()->getresultArray();
        echo view('report/lap_uangkeluar', $data);
    }
}
