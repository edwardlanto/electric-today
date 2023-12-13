<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddExcerptField extends Migration
{
    public function up()
    {
        $this->forge->addColumn('post', [
            'excerpt' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('post', 'excerpt');
    }
}
