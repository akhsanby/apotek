<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
	protected $table                = 'obat';
	protected $primaryKey           = 'kode_obat';
	protected $useAutoIncrement     = false;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_obat', 'kode_supplier', 'kode_detil', 'nama_obat', 'produsen', 'harga', 'jml_stok', 'foto'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	public function getObat()
	{
		return $this->findAll();
	}
}
