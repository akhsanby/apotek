<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table                = 'transaksi';
	protected $primaryKey           = 'kode_transaksi';
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_transaksi', 'kode_detil', 'id_user', 'nama_pembeli', 'tgl_transaksi', 'sub_total', 'total'];

	public function getTransaksi()
	{
		return $this->findAll();
	}
}
