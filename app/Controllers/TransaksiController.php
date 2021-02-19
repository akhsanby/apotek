<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{TransaksiModel, DetilTransaksiModel, ObatModel};

class TransaksiController extends BaseController
{
	protected $transaksiModel;
	protected $detilTransaksiModel;
	protected $obatModel;

	public function __construct()
	{
		$this->transaksiModel = new TransaksiModel();
		$this->detilTransaksiModel = new DetilTransaksiModel();
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
			'kode_obat'		=> 'required',
			'sub_total'		=> 'required|integer',
			'total' 		=> 'required|integer'
		])) {
			return redirect()->to('/transaksi/new')->withInput();
		}

		$this->transaksiModel->createTransaksi();
		$this->detilTransaksiModel->createDetilTransaksi();
		return redirect()->to('/data/transaksi')->withInput()->with('created', 'Berhasil ditambahkan!');
	}

	public function delete($kode_transaksi)
	{
		return $this->transaksiModel->deleteTransaksi($kode_transaksi);
	}
}
