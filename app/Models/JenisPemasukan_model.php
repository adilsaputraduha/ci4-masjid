<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPemasukan_model extends Model
{
    public function getJenisPemasukan()
    {
        $bulder = $this->db->table('jenis_pemasukan');
        return $bulder->get();
    }
    public function saveJenisPemasukan($data)
    {
        $query = $this->db->table('jenis_pemasukan')->insert($data);
        return $query;
    }
    public function updateJenisPemasukan($data, $id)
    {
        $query = $this->db->table('jenis_pemasukan')->update($data, array('idp' => $id));
        return $query;
    }
    public function deleteJenisPemasukan($id)
    {
        $query = $this->db->table('jenis_pemasukan')->delete(array('idp' => $id));
        return $query;
    }
}
