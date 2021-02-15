<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuplierModel;

class SuplierController extends BaseController
{
	protected $suplierModel;
	protected $validation;

	public function __construct()
	{
		$this->suplierModel = new SuplierModel();
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		// jika tidak ada session username kembalikan ke halaman /login
		if (!session()->has('username')) return redirect()->to('/');

		$data = [
			'title' 		=> 'Daftar Data Suplier',
			'headerTitle' 	=> 'Daftar Data Suplier',
			'username' 		=> session()->get('username'),
			'suplier' 		=> $this->suplierModel->getSuplier()
		];

		return view('/data/suplier/index', $data);	
	}

	public function new()
	{
		$data = [
			'title' 		=> 'Data Suplier',
			'headerTitle'	=> 'Tambah Data Suplier',
			'username'		=> session()->get('username'),
			'validation'	=> $this->validation
		];

		return view('/data/suplier/new', $data);
	}

	public function create()
	{
		if (!$this->validate([
			'kode_suplier'  => 'required',
			'nama_suplier'  => 'required',
	        'alamat' 		=> 'required',
	        'kota' 			=> 'required',
	        'telp' 			=> 'required|integer'
		])) {
			return redirect()->to('/suplier/new')->withInput();
		}

		return $this->suplierModel->createSuplier();
	}

	public function edit($kode_suplier)
	{
		$data = [
			'title' 		=> 'Data Suplier',
			'headerTitle' 	=> 'Edit Data Suplier',
			'username' 		=> session()->get('username'),
			'validation'	=> $this->validation,
			'suplier' 		=> $this->suplierModel->getSuplier($kode_suplier)
		];

		return view('/data/suplier/edit', $data);
	}

	public function update($kode_suplier)
	{
		if (!$this->validate([
	        'nama_suplier'  => 'required',
	        'alamat' 		=> 'required',
	        'kota' 			=> 'required',
	        'telp' 			=> 'required|integer'
		])) {
			return redirect()->to('/suplier/edit/' . $kode_suplier)->withInput();
		}

		return $this->suplierModel->updateSuplier($kode_suplier);
	}

	public function delete($kode_suplier)
	{
		return $this->suplierModel->deleteSuplier($kode_suplier);
	}
}
