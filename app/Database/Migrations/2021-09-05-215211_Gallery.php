<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gallery extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'price' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
			'type' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
			'front_image' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
			'back_image' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gallery');
	}

	public function down()
	{
		$this->forge->dropTable('gallery');
	}
}
