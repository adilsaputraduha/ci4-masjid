<?php

namespace App\Models;

use CodeIgniter\Model;

class UangKeluar_model extends Model
{
    public function getCashOut()
    {
        return  $this->db->table('cash_out')
            ->join('jenis_pengeluaran', 'jenis_pengeluaran.id = cash_out.jenis')
            ->get()->getresultArray();
    }
    public function saveCashOut($data)
    {
        $query = $this->db->table('cash_out')->insert($data);
        return $query;
    }
    public function updateCashOut($data, $id)
    {
        $query = $this->db->table('cash_out')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteCashOut($id)
    {
        $query = $this->db->table('cash_out')->delete(array('id' => $id));
        return $query;
    }
}
