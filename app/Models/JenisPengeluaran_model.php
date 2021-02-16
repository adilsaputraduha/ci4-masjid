<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPengeluaran_model extends Model
{
    public function getJenisPengeluaran()
    {
        $bulder = $this->db->table('jenis_pengeluaran');
        return $bulder->get();
    }
    public function saveJenisPengeluaran($data)
    {
        $query = $this->db->table('jenis_pengeluaran')->insert($data);
        return $query;
    }
    public function updateJenisPengeluaran($data, $id)
    {
        $query = $this->db->table('jenis_pengeluaran')->update($data, array('idp' => $id));
        return $query;
    }
    public function deleteJenisPengeluaran($id)
    {
        $query = $this->db->table('jenis_pengeluaran')->delete(array('idp' => $id));
        return $query;
    }
}
