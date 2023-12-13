<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMenuFieldToPost extends Migration
{
    public function up()
    {
        $this->forge->addColumn('post', [
            'is_menu' => [
                'type' => 'BOOLEAN',
                'after' => 'content',
                'default' => false 
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('post', 'is_menu');
    }
}
