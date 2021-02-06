<?php

namespace App\Models;

use CodeIgniter\Model;

class CashIn_model extends Model
{
    public function getCashIn()
    {
        $bulder = $this->db->table('cash_in');
        return $bulder->get();
    }
    // public function saveType($data)
    // {
    //     $query = $this->db->table('tabel_jenis')->insert($data);
    //     return $query;
    // }
    // public function updateType($data, $id)
    // {
    //     $query = $this->db->table('tabel_jenis')->update($data, array('jenis_id' => $id));
    //     return $query;
    // }
    // public function deleteType($id)
    // {
    //     $query = $this->db->table('tabel_jenis')->delete(array('jenis_id' => $id));
    //     return $query;
    // }
}
