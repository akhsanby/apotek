<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ObatMigration extends Migration
{
	public function up()
	{
        $this->db->disableForeignKeyChecks();
		$this->forge->addField([
            'kode_obat' => [
                'type' => 'INT',
            ],
            'kode_supplier' => [
                'type' => 'INT',
            ],
            'kode_detil' => [
                'type' => 'INT',
            ],
            'nama_obat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'produsen' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type' => 'INT',
            ],
            'jml_stok' => [
                'type' => 'INT',
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('kode_obat', true);
        $this->forge->addForeignKey('kode_detil','detil_transaksi','kode_detil','RESTRICT','RESTRICT');
        $this->forge->addForeignKey('kode_supplier','supplier','kode_supplier','RESTRICT','RESTRICT');
        $this->forge->createTable('obat');
        $this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		 $this->forge->dropTable('obat');
	}
}
