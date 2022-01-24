<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kamar extends Migration
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
			'no_kamar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
                'null'           => true,
			],
			'lantai'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '25',
                'null'           => true,
			],
			'max_orang'      => [
                'type'           => 'INT',
                'null'           => true,
                'default'       => 1
			],
            'kelas'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '25',
                'null'           => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// set Primary Key
		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('kamar', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kamar');
    }
}
