<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{TransaksiModel, ObatModel};

class TransaksiController extends BaseController
{
	protected $transaksiModel;
	protected $obatModel;
	public function __construct()
	{
		$this->transaksiModel = new TransaksiModel();
		$this->obatModel = new ObatModel();
	}

	public function index()
	{
		// jika tidak ada session username kembalikan ke halaman /login
		if (!session()->has('username')) return redirect()->to('/');

		$data = [
			'title' => 'Daftar Data Transaksi',
			'headerTitle' => 'Daftar Data Transaksi',
			'username' => session()->get('username'),
			'transaksi' => $this->transaksiModel->getTransaksi()
		];

		return view('/data/transaksi/index', $data);
	}

	public function new()
	{
		$data = [
			'title' => 'Daftar Data Transaksi',
			'headerTitle' => 'Tambah Data Transaksi',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat()
		];

		return view('/data/transaksi/new', $data);
	}

	public function create()
	{
		if (!$this->validate([
			'kode_transaksi'  => 'required',
			'nama_pembeli'  => 'required',
	        'tgl_transaksi'	=> 'required',
	        'nama_obat'		=> 'required',
	        'sub_total'		=> 'required|integer',
	        'total' 		=> 'required|integer'
		])) {
			return redirect()->to('/data/transaksi/new')->withInput();
		}
		dd($this->request->getVar());
		return $this->transaksiModel->createTransaksi();
	}

	public function edit($id = null)
	{
		//
	}

	public function update($id = null)
	{
		//
	}

	public function delete($id = null)
	{
		//
	}
}
