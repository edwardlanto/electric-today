<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveContentFromTag extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('tag', 'content');
    }

    public function down()
    {
        $this->forge->addColumn('tag', [
            'content' => [
                'type' => 'TEXT',
                // Add any other necessary constraints here
            ],
        ]);
    }
}
