<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kode_dokter'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
                'null'           => true,
			],
			'nama'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '129',
                'null'           => true,
			],
			'gender'      => [
                'type'           => 'CHAR',
                'constraint'     => '1',
                'null'           => true,
                'default'       => 'L'
			],
			'alamat'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// set Primary Key
		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('dokter', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('dokter');
    }
}
