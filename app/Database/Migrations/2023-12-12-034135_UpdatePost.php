<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdatePost extends Migration
{
    public function up()
    {
        $this->forge->addColumn('post', [
            'view_count' => [
                'type' => 'INT',
                'constraint' => 11, // Adjust the constraint accordingly
                'default' => 0, // You can set a default value if needed
                'after' => 'content', // You can change the position of the new column
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('post', 'view_count');
    }
}
