<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChangeAuthorColumns extends Migration
{
    public function up()
    {
        $fields = [
            'slug' => [
                'name' => 'author_slug',
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'name' => [
                'name' => 'author_name',
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ];

        $this->forge->modifyColumn('author', $fields);
    }

    public function down()
    {
        $fields = [
            'author_slug' => [
                'name' => 'slug',
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'author_name' => [
                'name' => 'name',
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ];

        $this->forge->modifyColumn('author', $fields);
    }
}
