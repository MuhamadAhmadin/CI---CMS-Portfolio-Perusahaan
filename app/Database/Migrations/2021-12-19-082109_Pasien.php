<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
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
			'no_pasien'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '129',
                'null'           => true,
			],
			'nik'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
                'null'           => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
            'gender'       => [
                'type'           => 'CHAR',
                'constraint'     => '2',
                'null'           => true,
                'default'           => 'L',
            ],
            'alamat'      => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'telepon'      => [
                'type'           => 'VARCHAR',
                'constraint'    => '20',
                'null'           => true,
            ],
            'keluhan'      => [
                'type'           => 'VARCHAR',
                'constraint'    => '255',
                'null'           => true,
            ],
            'tanggal_datang' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'harga_jasa'      => [
                'type'           => 'INT',
                'default'           => 0,
            ],
			'dokter_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// set Primary Key
		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('pasien', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('dokter');
    }
}
