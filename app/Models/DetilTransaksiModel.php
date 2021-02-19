<?php

namespace App\Models;

use CodeIgniter\Model;

class DetilTransaksiModel extends Model
{
	protected $table                = 'detil_transaksi';
	protected $primaryKey           = 'kode_detil';
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_detil', 'kode_transaksi', 'kode_obat', 'sub_total', 'total'];

	public function createDetilTransaksi()
	{
		$request = \Config\Services::request();
		
		$data = [
			'kode_transaksi' => $request->getVar('kode_transaksi'),
			'kode_obat' => $request->getVar('kode_obat'),
			'sub_total' => $request->getVar('sub_total'),
			'total' => $request->getVar('total')
		];

		return $this->insert($data);
	}
}
