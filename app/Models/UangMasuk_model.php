<?php

namespace App\Models;

use CodeIgniter\Model;

class UangMasuk_model extends Model
{
    public function getCashIn()
    {
        return  $this->db->table('cash_in')
            ->join('jenis_pemasukan', 'jenis_pemasukan.idp = cash_in.jenis')
            ->get()->getresultArray();
    }
    public function saveCashIn($data)
    {
        $query = $this->db->table('cash_in')->insert($data);
        return $query;
    }
    public function updateCashIn($data, $id)
    {
        $query = $this->db->table('cash_in')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteCashIn($id)
    {
        $query = $this->db->table('cash_in')->delete(array('id' => $id));
        return $query;
    }
}
