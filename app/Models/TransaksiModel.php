<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table                = 'transaksi';
	protected $primaryKey           = 'kode_transaksi';
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_transaksi', 'id_user', 'nama_pembeli', 'tgl_transaksi'];

	public function getTransaksi()
	{
		return $this->db->table('transaksi')
		->join('detil_transaksi', 'detil_transaksi.kode_transaksi = transaksi.kode_transaksi')
		->join('obat', 'obat.kode_obat = detil_transaksi.kode_obat')
		->join('users', 'users.id_user = transaksi.id_user')
		->get()->getResultArray();
			
		// if ($kode_transaksi == false) return $this->findAll();
		// return $this->where(['kode_transaksi' => $kode_transaksi])->first();
	}

	public function createTransaksi()
	{
		$request = \Config\Services::request();
		
		$data = $request->getVar();
		$data['id_user'] = session()->get('id_user');

		return $this->insert($data);
	}

	public function deleteTransaksi($kode_transaksi)
	{
		$this->delete($kode_transaksi);
		return redirect()->to('/data/transaksi')->with('deleted', 'Berhasil dihapus!');
	}
}
