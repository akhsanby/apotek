<?php

namespace App\Controllers;

use App\Models\UsersModel;

class HomeController extends BaseController
{
	public function index()
	{
		// jika tidak ada session username kembalikan ke halaman /login
		if (!session()->has('username')) return redirect()->to('/');

		$db = \Config\Database::connect();
		$obat = $db->table('obat');
		$suplier = $db->table('suplier');
		$transaksi = $db->table('transaksi');
		$users = $db->table('users');

		$data = [
			'title' => 'Home',
			'headerTitle' => 'Home',
			'username' => session()->get('username'),
			'totalObat' => $obat->countAll(),
			'totalSuplier' => $suplier->countAll(),
			'totalTransaksi' => $transaksi->countAll(),
			'totalUsers' => $users->countAll()
		];
		
		return view('home/index', $data);
	}
}
