<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portfolio extends Migration
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
			'app_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
			'category'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '129',
                'null'           => true,
			],
			'client_name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
            'description'      => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'project_date' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'thumbnail' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// set Primary Key
		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('portfolio', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('portfolio');
    }
}
