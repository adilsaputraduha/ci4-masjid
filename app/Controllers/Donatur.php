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
            'nohp' => $this->request->getPost('nohp')
        );
        $model->saveDonatur($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/donatur');
    }

    public function update()
    {
        $model = new Donatur_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'nohp' => $this->request->getPost('nohp')
        );
        $model->updateDonatur($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/donatur');
    }

    public function delete()
    {
        $model = new Donatur_model();
        $id = $this->request->getPost('id');
        $model->deleteDonatur($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/donatur');
    }
}
