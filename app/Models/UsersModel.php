<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'username', 'password'];

	public function findUser($username, $password)
	{
		$user = $this->where(['username' => $username, 'password' => $password])->first();

		if ($user) {
			session()->set([
				'id_user' => $user['id_user'],
				'username' => $user['username']
			]);
			return redirect()->to('/home');
		} else {
			session()->setFlashData('kesalahan', 'Email/password salah!');
			return redirect()->to('/')->withInput();
		}
	}
}
