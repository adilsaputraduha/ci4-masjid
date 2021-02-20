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
        $model1 = new PembayaranDonatur_model();
        $data['donatur'] = $model->getDonaturPembayaran($id)->getResultArray();

        // Ambil bulan
        $db = \Config\Database::connect();
        $bulan = $db->query("SELECT * FROM bulan WHERE idb NOT IN (SELECT bulan FROM pembayaran_donatur WHERE donatur=" . $id . ")");
        $row = $bulan->getResultArray();
        $data['bulan'] = $row;
        $data['detail'] = $model1->getDetail($id)->getResultArray();
        echo view('v_tambahpd', $data);
    }

    public function savedetail()
    {
        $model = new PembayaranDonatur_model();
        $id = $this->request->getPost('id');
        $data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'donatur' => $this->request->getPost('id'),
            'bulan' => $this->request->getPost('bulan'),
            'jumlah' => $this->request->getPost('jumlah')
        );
        $model->savePembayaranDonatur($data);
        return redirect()->to('/pembayarandonatur/tambah/' . $id);
    }

    // public function update()
    // {
    //     $model = new PembayaranDonatur_model();
    //     $id = $this->request->getPost('id');
    //     $data = array(
    //         'nama' => $this->request->getPost('nama')
    //     );
    //     $model->updatePembayaranDonatur($data, $id);
    //     session()->setFlashdata('pesan', 'Data berhasil diupdate.');
    //     return redirect()->to('/pembayarandonatur');
    // }

    public function deletedetail($id, $bulan)
    {
        $model = new PembayaranDonatur_model();
        $model->deletePembayaranDonatur($id, $bulan);
        return redirect()->to('/pembayarandonatur/tambah/' . $id);
    }
}
