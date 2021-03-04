<?php

namespace App\Controllers;

use App\Models\User_model;

class GantiPassword extends BaseController
{
    public function index()
    {
        return view('v_gantipassword');
    }

    public function update()
    {
        $rules = [
            'baruulang' => 'matches[baru]'
        ];
        if($this->validate($rules)){
            $model = new User_model();
            $id = $this->request->getPost('id');
            $data = array(
                'password_hash' => password_hash($this->request->getPost('baruulang'),PASSWORD_DEFAULT)
            );
            $model->updatePassword($data, $id);
            session()->setFlashdata('pesan', 'Password berhasil diubah.');
            return redirect()->to('/gantipassword');
        }
    }
}
