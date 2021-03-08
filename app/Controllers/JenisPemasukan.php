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
    }

    public function update()
    {
        $model = new JenisPemasukan_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->updateJenisPemasukan($data, $id);
    }

    public function delete()
    {
        $model = new JenisPemasukan_model();
        $id = $this->request->getPost('id');
        $model->deleteJenisPemasukan($id);
    }

    public function table_jenispemasukan()
    {
        $model = new JenisPemasukan_model();
        $data['jenispemasukan'] = $model->getJenisPemasukan()->getresultArray();
        echo view('ajax/table_jenis_pemasukan', $data);
    }

    public function report()
    {
        $model = new JenisPemasukan_model();
        $data['jenispemasukan'] = $model->getJenisPemasukan()->getresultArray();
        echo view('report/lap_jenispemasukan', $data);
    }
}
