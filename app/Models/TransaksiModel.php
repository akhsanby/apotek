<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table                = 'transaksi';
	protected $primaryKey           = 'kode_transaksi';
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_transaksi', 'id_user', 'nama_pembeli', 'nama_obat', 'tgl_transaksi', 'sub_total', 'total'];

	public function getTransaksi($kode_transaksi = false)
	{
		if ($kode_transaksi == false) return $this->findAll();
		return $this->where(['kode_transaksi' => $kode_transaksi])->first();
	}

	public function createTransaksi()
	{
		$request = \Config\Services::request();
		
		$data = $request->getVar();
		$data['id_user'] = session()->get('id_user');

		$this->insert($data);
		return redirect()->to('/data/transaksi')->withInput()->with('created', 'Berhasil ditambahkan!');
	}

	public function deleteTransaksi($kode_transaksi)
	{
		$this->delete($kode_transaksi);
		return redirect()->to('/data/transaksi')->with('deleted', 'Berhasil dihapus!');
	}
}
