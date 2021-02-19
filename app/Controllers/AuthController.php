<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AuthController extends BaseController
{
	protected $usersModel;
	public function __construct()
	{
		$this->usersModel = new UsersModel();

	}

	public function login()
	{
		// jika sudah ada session username kembalikan ke halaman /home
		if (session()->has('username')) return redirect()->to('/home');

		$data = [
			'title' => "Login",
			'validation' => \Config\Services::validation()
		];

		return view('auth/login', $data);
	}

	public function register()
	{
		// jika sudah ada session username kembalikan ke halaman /home
		if (session()->has('username')) return redirect()->to('/home');

		$data = [
			'title' => "Register",
			'validation' => \Config\Services::validation()
		];

		return view('auth/register', $data);
	}

	public function loged()
	{
		$username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
		$password = md5($this->request->getVar('password', FILTER_SANITIZE_STRING));
		
		return $this->usersModel->findUser($username, $password);
	}

	public function registered()
	{	
		if (!$this->validate([
			'username' => 'required|is_unique[users.username]',
			'password' => 'required|min_length[3]|matches[password1]',
			'password1' => 'required|matches[password]',
		])) {
			return redirect()->to("/register")->withInput();
		}

		return $this->usersModel->register();
	}

	public function logout()
	{
		session()->remove('username');
		session()->setFlashdata('logout', 'Berhasil logout!');

		return redirect()->to('/');
	}
}
