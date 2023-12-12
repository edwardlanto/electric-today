<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAuthorTable extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('author');

        $this->forge->addColumn('post', [
            'author_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ]);

        $this->forge->addForeignKey('author_id', 'author', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {

        $this->forge->dropTable('author');
        $this->forge->dropForeignKey('post', 'post_author_id_foreign');
        $this->forge->dropColumn('post', 'author_id');
    }
}
