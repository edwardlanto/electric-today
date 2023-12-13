<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDefaultFieldToPost extends Migration
{
    public function up()
    {
        $fields = array(
            'is_menu' => array(
                'type' => 'BOOLEAN',
                'default' => true,
                'null' => false,
            ),
        );

        $this->forge->modifyColumn('post', $fields);
    }

    public function down()
    {
        $fields = array(
            'is_menu' => array(
                'type' => 'INT',
                'constraint' => 1,
            ),
        );

        $this->forge->modify_column('post', $fields);
    }
}
