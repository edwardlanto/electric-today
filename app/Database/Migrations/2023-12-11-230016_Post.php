<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
