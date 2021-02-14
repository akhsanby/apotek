<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{ObatModel, SuplierModel};

class ObatController extends BaseController
{
	protected $obatModel;
	protected $suplierModel;
	public function __construct()
	{
		$this->obatModel = new ObatModel();
		$this->suplierModel = new SuplierModel();
		helper('form');
	}

	public function index()
	{
		// jika tidak ada session username kembalikan ke halaman /login
		if (!session()->has('username')) return redirect()->to('/');

		$data = [
			'title' => 'Daftar Data obat',
			'headerTitle' => 'Daftar Data obat',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat()
		];

		return view('/data/obat/index', $data);	
	}

	public function new()
	{
		$data = [
			'title' => 'Data obat',
			'headerTitle' => 'Tambah Data obat',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat()
		];

		return view('/data/obat/new', $data);
	}

	public function create()
	{
		return $this->obatModel->createObat();
	}

	public function edit($kode_obat)
	{
		$suplier = $this->suplierModel->getSuplier();
		foreach ($suplier as $suplier) {
			$nama_suplier[$suplier['kode_suplier']] = $suplier['nama_suplier'];
		}

		$data = [
			'title' => 'Data obat',
			'headerTitle' => 'Edit Data obat',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat($kode_obat),
			'nama_suplier' => $nama_suplier
		];

		return view('/data/obat/edit', $data);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($kode_obat)
	{
		return $this->obatModel->updateobat($kode_obat);
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($kode_obat)
	{
		return $this->obatModel->deleteobat($kode_obat);
	}
}
