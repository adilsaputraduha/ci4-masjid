<?php

namespace App\Models;

use CodeIgniter\Model;

class Donatur_model extends Model
{
    public function getDonatur()
    {
        $bulder = $this->db->table('donatur');
        return $bulder->get();
    }
    public function saveDonatur($data)
    {
        $query = $this->db->table('donatur')->insert($data);
        return $query;
    }
    public function updateDonatur($data, $id)
    {
        $query = $this->db->table('donatur')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteDonatur($id)
    {
        $query = $this->db->table('donatur')->delete(array('id' => $id));
        return $query;
    }
}
