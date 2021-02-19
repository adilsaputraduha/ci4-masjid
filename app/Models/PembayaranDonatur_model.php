<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranDonatur_model extends Model
{
    public function getPembayaranDonatur()
    {
        return  $this->db->table('pembayaran_donatur')
            ->join('donatur', 'donatur.id = pembayaran_donatur.donatur')
            ->get()->getresultArray();
    }
    public function savePembayaranDonatur($data)
    {
        $query = $this->db->table('pembayaran_donatur')->insert($data);
        return $query;
    }
    public function updatePembayaranDonatur($data, $id)
    {
        $query = $this->db->table('pembayaran_donatur')->update($data, array('id' => $id));
        return $query;
    }
    public function deletePembayaranDonatur($id)
    {
        $query = $this->db->table('pembayaran_donatur')->delete(array('id' => $id));
        return $query;
    }

    public function getDetail($id)
    {
        return $this->db->table('pembayaran_donatur')
            ->join('bulan', 'bulan.idb = pembayaran_donatur.bulan')
            ->where(['donatur' => $id])->get();
    }
    public function getBulan()
    {
        $bulder = $this->db->table('bulan');
        return $bulder->get();
    }
}
