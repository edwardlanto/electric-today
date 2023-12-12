<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'post_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
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
        $this->forge->addForeignKey('post_id', 'post', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('comment');
    }

    public function down()
    {
        $this->forge->dropTable('comment');
    }
}
