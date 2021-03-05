<?php

namespace App\Controllers;

use App\Models\JenisPengeluaran_model;

class JenisPengeluaran extends BaseController
{
    public function index()
    {
        $model = new JenisPengeluaran_model();
        $data['jenispengeluaran'] = $model->getJenisPengeluaran()->getresultArray();
        echo view('v_jenispengeluaran', $data);
    }
    public function save()
    {
        $model = new JenisPengeluaran_model();
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->saveJenisPengeluaran($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
    }

    public function update()
    {
        $model = new JenisPengeluaran_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->updateJenisPengeluaran($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
    }

    public function delete()
    {
        $model = new JenisPengeluaran_model();
        $id = $this->request->getPost('id');
        $model->deleteJenisPengeluaran($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    }

    public function table_jenispengeluaran()
    {
        $model = new JenisPengeluaran_model();
        $data['jenispengeluaran'] = $model->getJenisPengeluaran()->getresultArray();
        echo view('ajax/table_jenis_pengeluaran', $data);
    }
}
