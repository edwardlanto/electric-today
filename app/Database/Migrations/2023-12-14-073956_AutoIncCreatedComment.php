<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AutoIncCreatedComment extends Migration
{
    public function up()
    {
        $fields = array(
            'created_at' => array(
                'name' => 'created_at',
                'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            ),
        );
        $this->forge->modifyColumn('comment', $fields);
    }

    public function down()
    {
        //
    }
}
