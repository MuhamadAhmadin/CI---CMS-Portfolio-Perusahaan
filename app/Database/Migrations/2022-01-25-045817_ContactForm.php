<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactForm extends Migration
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
			'name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'subject'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
			],
			'message'      => [
                'type'           => 'TEXT',
                'null'           => true,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// set Primary Key
		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('contact_form', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('contact_form');
    }
}
