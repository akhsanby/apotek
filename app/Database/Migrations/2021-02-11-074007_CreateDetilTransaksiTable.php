<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetilTransaksiTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'kode_detil' => [
                'type' => 'INT',
            ],
            'kode_transaksi' => [
                'type' => 'INT',
            ],
            'kode_obat' => [
                'type' => 'INT',
            ],
            'sub_total' => [
                'type' => 'INT',
            ],
            'total' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('kode_detil', true);
        $this->forge->createTable('detil_transaksi');
	}

	public function down()
	{
		 $this->forge->dropTable('detil_transaksi');
	}
}
