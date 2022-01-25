<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tim extends Migration
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
			'nama'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '129',
                'null'           => true,
			],
			'jabatan'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '129',
                'null'           => true,
			],
			'twitter'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'facebook'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'instagram'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'linkedin'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'photo'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// set Primary Key
		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('tim', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tim');
    }
}
