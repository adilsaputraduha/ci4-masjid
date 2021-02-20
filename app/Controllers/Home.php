<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		// Total donatur
		$totdonatur = $db->query("SELECT COUNT(*) AS jumlah FROM donatur");
		$row1 = $totdonatur->getResultArray();
		$data['totdonatur'] = $row1;
		// Total pengurus
		$totpengurus = $db->query("SELECT COUNT(*) AS jumlah FROM users");
		$row2 = $totpengurus->getResultArray();
		$data['totpengurus'] = $row2;
		// // Total pemasukan
		// $totdonatur = $db->query("SELECT COUNT(*) AS jumlah FROM donatur");
		// $row3 = $totdonatur->getResultArray();
		// $data['totdonatur'] = $row3;
		// // Total pengeluaran
		// $totdonatur = $db->query("SELECT COUNT(*) AS jumlah FROM donatur");
		// $row4 = $totdonatur->getResultArray();
		// $data['totdonatur'] = $row4;

		return view('v_home', $data);
	}
}
