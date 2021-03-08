<?php

namespace App\Controllers;

use App\Models\Donatur_model;

class Donatur extends BaseController
{
    public function index()
    {
        $model = new Donatur_model();
        $data['donatur'] = $model->getDonatur()->getresultArray();
        echo view('v_donatur', $data);
    }
    public function save()
    {
        $model = new Donatur_model();
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nohp' => $this->request->getPost('nohp'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->saveDonatur($data);
    }

    public function update()
    {
        $model = new Donatur_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nohp' => $this->request->getPost('nohp'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->updateDonatur($data, $id);
    }

    public function delete()
    {
        $model = new Donatur_model();
        $id = $this->request->getPost('id');
        $model->deleteDonatur($id);
    }

    public function table_donatur()
    {
        $model = new Donatur_model();
        $data['donatur'] = $model->getDonatur()->getresultArray();
        echo view('ajax/table_donatur', $data);
    }

    public function report()
    {
        $model = new Donatur_model();
        $data['donatur'] = $model->getDonatur()->getresultArray();
        echo view('report/lap_donatur', $data);
    }
}
