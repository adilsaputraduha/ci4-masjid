<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    public function updatePassword($data, $id)
    {
        $query = $this->db->table('users')->update($data, array('id' => $id));
        return $query;
    }
}
