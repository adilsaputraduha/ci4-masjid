<?php

namespace App\Controllers;

use App\Models\CashIn_model;

class CashIn extends BaseController
{
    public function index()
    {
        $model = new CashIn_model();
        $data['cashin'] = $model->getCashIn()->getresultArray();
        echo view('v_cashin', $data);
    }
    // public function save()
    // {
    //     $model = new CashIn_model();
    //     // Validasi
    //     if (!$this->validate([
    //         'name' => [
    //             'rules' => 'is_unique[tabel_jenis.jenis_nama]',
    //             'errors' => [
    //                 'is_unique' => 'Car type already exist.'
    //             ]
    //         ]
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back()->withInput();
    //     } else {
    //         print_r($this->request->getVar());
    //     }
    //     $data = array(
    //         'jenis_nama' => $this->request->getPost('id'),
    //     );
    //     $model->saveType($data);
    //     session()->setFlashdata('pesan', 'Data successfully added.');
    //     return redirect()->to('/carstype');
    // }

    // public function update()
    // {
    //     $model = new CashIn_model();
    //     $id = $this->request->getPost('id');
    //     if (!$this->validate([
    //         'name' => [
    //             'rules' => 'is_unique[tabel_jenis.jenis_nama]',
    //             'errors' => [
    //                 'is_unique' => 'Car type already exist.'
    //             ]
    //         ]
    //     ])) {
    //         session()->setFlashdata('error', $this->validator->listErrors());
    //         return redirect()->back()->withInput();
    //     } else {
    //         print_r($this->request->getVar());
    //     }
    //     $data = array(
    //         'jenis_nama' => $this->request->getPost('name')
    //     );
    //     $model->updateType($data, $id);
    //     session()->setFlashdata('pesan', 'Data successfully updated.');
    //     return redirect()->to('/carstype');
    // }

    // public function delete()
    // {
    //     $model = new CashIn_model();
    //     $id = $this->request->getPost('id');
    //     $model->deleteType($id);
    //     session()->setFlashdata('pesan', 'Data successfully deleted.');
    //     return redirect()->to('/carstype');
    // }
}
