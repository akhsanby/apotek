<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\SuplierModel;

class SuplierController extends ResourceController
{
	protected $suplierModel;
	public function __construct()
	{
		$this->suplierModel = new SuplierModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
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

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		$data = [
			'title' => 'Daftar Data Suplier',
			'headerTitle' => 'Tambah Data Suplier',
			'username' => session()->get('username')
		];

		return view('/data/suplier/new', $data);
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		//
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		//
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		//
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		//
	}
}
