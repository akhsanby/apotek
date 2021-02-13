<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table                = 'transaksi';
	protected $primaryKey           = 'kode_transaksi';
	protected $protectFields        = true;
	protected $allowedFields        = [];

	public function getTransaksi()
	{
		return $this->findAll();
	}

	public function totalTransaksi()
	{
		return $this->countAll();
	}
}
