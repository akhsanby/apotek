<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SuplierModel;

class SuplierController extends BaseController
{
	protected $suplierModel;
	public function __construct()
	{
		$this->suplierModel = new SuplierModel();
	}

	public function index()
	{
		// jika tidak ada session username kembalikan ke halaman /login
		if (!session()->has('username')) return redirect()->to('/');

		$data = [
			'title' => 'Daftar Data Suplier',
			'headerTitle' => 'Daftar Data Suplier',
			'username' => session()->get('username'),
			'suplier' => $this->suplierModel->getSuplier()
		];

		return view('/data/suplier/index', $data);	
	}

	public function new()
	{
		$data = [
			'title' => 'Data Suplier',
			'headerTitle' => 'Tambah Data Suplier',
			'username' => session()->get('username')
		];

		return view('/data/suplier/new', $data);
	}

	public function create()
	{
		return $this->suplierModel->createSuplier();
	}

	public function edit($kode_suplier)
	{
		$data = [
			'title' => 'Data Suplier',
			'headerTitle' => 'Edit Data Suplier',
			'username' => session()->get('username'),
			'suplier' => $this->suplierModel->getSuplier($kode_suplier)
		];

		return view('/data/suplier/edit', $data);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($kode_suplier)
	{
		return $this->suplierModel->updateSuplier($kode_suplier);
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($kode_suplier)
	{
		return $this->suplierModel->deleteSuplier($kode_suplier);
	}
}
