<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImagePost extends Migration
{
    public function up()
    {
        $this->forge->addColumn('post', [
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255, // Adjust the constraint accordingly
                'after' => 'content', // You can change the position of the new column
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('post', 'image');
    }
}
