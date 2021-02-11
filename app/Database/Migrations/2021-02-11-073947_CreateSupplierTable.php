<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSupplierTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'kode_supplier' => [
                'type' => 'INT'
            ],
            'nama_supplier' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'telp' => [
                'type' => 'INT'
            ]
        ]);
        $this->forge->addKey('kode_supplier', true);
        $this->forge->createTable('supplier');
	}

	public function down()
	{
		 $this->forge->dropTable('supplier');
	}
}
