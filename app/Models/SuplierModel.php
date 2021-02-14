<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplierModel extends Model
{
	protected $table                = 'suplier';
	protected $primaryKey           = 'kode_suplier';
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_suplier', 'nama_suplier', 'alamat', 'kota', 'telp'];

	public function getSuplier($kode_suplier = false)
	{
		if ($kode_suplier === false) return $this->findAll();
		return $this->where(['kode_suplier' => $kode_suplier])->first();
	}

	public function createSuplier()
	{
		$request = \Config\Services::request();
		
		$this->insert($request->getVar());
		return redirect()->to('/data/suplier')->withInput()->with('created', 'Berhasil ditambahkan!');
	}

	public function updateSuplier($kode_suplier)
	{
		$request = \Config\Services::request();
		
		$this->update($kode_suplier, $request->getVar());
		return redirect()->to('/data/suplier')->withInput()->with('updated', 'Berhasil diedit!');
	}

	public function deleteSuplier($kode_suplier)
	{
		$this->delete($kode_suplier);
		return redirect()->to('/data/suplier')->with('deleted', 'Berhasil dihapus!');
	}
}
