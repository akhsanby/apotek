<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
	protected $table                = 'obat';
	protected $primaryKey           = 'kode_obat';
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_obat', 'kode_suplier', 'nama_obat', 'produsen', 'harga', 'jml_stok', 'icon'];

	public function getObat($kode_obat = false)
	{
		if ($kode_obat === false) return $this->findAll();
		return $this->where(['kode_obat' => $kode_obat])->first();
	}

	public function createObat()
	{
		$request = \Config\Services::request();

		$icon = $request->getFile('icon');
// dd($icon->getError() == 4);
		// jika tidak ada foto yang diupload
		if ($icon->getError() == 4) {
			$namaIcon = 'default.png';	
		} else {
			$namaIcon = $icon->getRandomName();
			$icon->move('img/obat', $namaIcon);
		}

		$data = $request->getVar();
		$data['icon'] = $namaIcon;

		$this->insert($data);
		return redirect()->to('/data/obat')->withInput()->with('created', 'Berhasil ditambahkan!');
	}

	public function updateObat($kode_obat)
	{
		$request = \Config\Services::request();

		$icon = $request->getFile('icon');

		// jika icon tidak di ganti
		if ($icon->getError() === 4) {
			$namaIcon = $request->getVar('iconLama');
		} else {
			// generate icon nama random
			$namaIcon = $icon->getRandomName();
			// pindahkan gambar ke folder /img/obat
			$icon->move('img/obat', $namaIcon);
			// hapus icon lama 
			unlink('img/obat/' . $request->getVar('iconLama'));
		}

		$data = $request->getVar();
		$data['icon'] = $namaIcon;

		$this->update($kode_obat ,$data);
		return redirect()->to('/data/obat')->withInput()->with('updated', 'Berhasil diubah!');
	}

	public function deleteObat($kode_obat)
	{
		$obat = $this->find($kode_obat);	

		// cek jika icon adalah default.png
		if ($obat['icon'] !== 'default.png') unlink('img/obat/' . $obat['icon']);

		$this->delete($kode_obat);
		return redirect()->to('/data/obat')->with('deleted', 'Berhasil dihapus!');
	}
}
