<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAuthoravatarField extends Migration
{
    public function up()
    {
        $fields = array(
            'author_avatar' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
        );

        $this->forge->addColumn('author', $fields);
  
    }

    public function down()
    {
        $this->forge->dropColumn('author', 'avatar');
    }
}
