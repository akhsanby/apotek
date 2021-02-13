<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplierModel extends Model
{
	protected $table                = 'suplier';
	protected $primaryKey           = 'kode_suplier';
	protected $protectFields        = true;
	protected $allowedFields        = [];

	public function getSuplier()
	{
		return $this->findAll();
	}

	public function totalSuplier()
	{
		return $this->countAll();
	}
}
