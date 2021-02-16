<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{ObatModel, SuplierModel};

class ObatController extends BaseController
{
	protected $obatModel;
	protected $suplierModel;
	protected $validation;

	public function __construct()
	{
		$this->obatModel = new ObatModel();
		$this->suplierModel = new SuplierModel();
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		// jika tidak ada session username kembalikan ke halaman /login
		if (!session()->has('username')) return redirect()->to('/');

		$data = [
			'title' => 'Daftar Data obat',
			'headerTitle' => 'Daftar Data Obat',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat()
		];

		return view('/data/obat/index', $data);	
	}

	public function new()
	{
		$data = [
			'title' => 'Data obat',
			'headerTitle' => 'Tambah Data Obat',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat(),
			'suplier' => $this->suplierModel->getSuplier(),
			'validation' => $this->validation
		];

		return view('/data/obat/new', $data);
	}

	public function create()
	{
		if (!$this->validate([
			'kode_obat'		=> 'required|integer|is_unique[obat.kode_obat]',
	        'kode_suplier'  => 'required|integer',
	        'nama_obat'     => 'required',
	        'produsen' 		=> 'required',
	        'harga' 		=> 'required|integer',
	        'jml_stok' 		=> 'required|integer',
	        'icon' 			=> 'max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/png,image/jpeg]'
		])) {
			return redirect()->to('/obat/new')->withInput();
		}

		return $this->obatModel->createObat();
	}

	public function edit($kode_obat)
	{
		$suplier = $this->suplierModel->getSuplier();
		foreach ($suplier as $suplier) {
			$kode_suplier[$suplier['kode_suplier']] = $suplier['kode_suplier'];
		}

		$data = [
			'title' => 'Data obat',
			'headerTitle' => 'Edit Data Obat',
			'username' => session()->get('username'),
			'obat' => $this->obatModel->getObat($kode_obat),
			'kode_suplier' => $kode_suplier,
			'validation' => $this->validation
		];

		return view('/data/obat/edit', $data);
	}

	public function update($kode_obat)
	{ 
		if (!$this->validate([
	        'nama_obat'     => 'required',
	        'produsen' 		=> 'required',
	        'harga' 		=> 'required|integer',
	        'jml_stok' 		=> 'required|integer',
	        'icon' 			=> 'max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/png,image/jpeg]'
		])) {
			return redirect()->to('/obat/edit/' . $kode_obat)->withInput();
		}

		return $this->obatModel->updateObat($kode_obat);
	}

	public function delete($kode_obat)
	{
		return $this->obatModel->deleteObat($kode_obat);
	}
}
