<?php

namespace App\Controllers;

use App\Models\JenisPemasukan_model;

class JenisPemasukan extends BaseController
{
    public function index()
    {
        $model = new JenisPemasukan_model();
        $data['jenispemasukan'] = $model->getJenisPemasukan()->getresultArray();
        echo view('v_jenispemasukan', $data);
    }
    public function save()
    {
        $model = new JenisPemasukan_model();
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->saveJenisPemasukan($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/jenispemasukan');
    }

    public function update()
    {
        $model = new JenisPemasukan_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->updateJenisPemasukan($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/jenispemasukan');
    }

    public function delete()
    {
        $model = new JenisPemasukan_model();
        $id = $this->request->getPost('id');
        $model->deleteJenisPemasukan($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/jenispemasukan');
    }
    public function table_jenispemasukan()
    {
        $model = new JenisPemasukan_model();
        $data['jenispemasukan'] = $model->getJenisPemasukan()->getresultArray();
        echo view('ajax/table_jenis_pemasukan', $data);
    }
}
