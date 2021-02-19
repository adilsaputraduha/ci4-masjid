<?php

namespace App\Controllers;

use App\Models\PembayaranDonatur_model;
use App\Models\Donatur_model;

class PembayaranDonatur extends BaseController
{
    public function index()
    {
        $model = new Donatur_model();
        $data['donatur'] = $model->getDonatur()->getResultArray();
        echo view('v_pembayarandonatur', $data);
    }

    public function tambah($id)
    {
        $model = new Donatur_model();
        $data['donatur'] = $model->getDonaturPembayaran($id);
        echo view('v_tambahpd', $data);
    }

    public function save()
    {
        $model = new PembayaranDonatur_model();
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->savePembayaranDonatur($data);
        session()->setFlashdata('pesan', 'Data berhasil disimpan.');
        return redirect()->to('/pembayarandonatur');
    }

    public function update()
    {
        $model = new PembayaranDonatur_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->updatePembayaranDonatur($data, $id);
        session()->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/pembayarandonatur');
    }

    public function delete()
    {
        $model = new PembayaranDonatur_model();
        $id = $this->request->getPost('id');
        $model->deletePembayaranDonatur($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pembayarandonatur');
    }
}
