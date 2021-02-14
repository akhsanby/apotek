<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
	protected $transaksiModel;
	public function __construct()
	{
		$this->transaksiModel = new TransaksiModel();
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
			'username' => session()->get('username')
		];

		return view('/data/transaksi/new', $data);
	}

	public function create()
	{
		//
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
