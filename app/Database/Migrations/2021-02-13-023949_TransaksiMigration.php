<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiMigration extends Migration
{
	public function up()
	{
        $this->db->disableForeignKeyChecks();
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
        $this->forge->addForeignKey('id_user','users','id_user','RESTRICT','RESTRICT');
        $this->forge->addForeignKey('kode_detil','detil_transaksi','kode_detil','RESTRICT','RESTRICT');
        $this->forge->createTable('transaksi');
        $this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}
