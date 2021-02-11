<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'kode_transaksi' => [
                'type' => 'INT',
            ],
            'kode_detil' => [
                'type' => 'INT',
            ],
            'id_user' => [
                'type' => 'INT',
            ],
            'nama_pembeli' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl_transaksi' => [
                'type' => 'DATE',
            ],
            'sub_total' => [
                'type' => 'INT',
            ],
            'total' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('kode_transaksi', true);
        $this->forge->createTable('transaksi');
	}

	public function down()
	{
		 $this->forge->dropTable('transaksi');
	}
}
