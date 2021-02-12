<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ObatModel;

class ObatController extends ResourceController
{
	protected $obatModel;
	public function __construct()
	{
		$this->obatModel = new ObatModel();
	}

	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
       
		$data = [
			'title' => 'Daftar Data Obat',
			'headerTitle' => 'Daftar Data Obat',
			'obat' => $this->obatModel->getObat()
		];
		return view('/data/obat/index', $data);
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		$data = [
			'title' => 'Daftar Data Obat',
			'headerTitle' => 'Tambah Data Obat'
		];

		return view('/data/obat/new', $data);
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
