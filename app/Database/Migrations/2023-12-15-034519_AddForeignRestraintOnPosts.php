<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignRestraintOnPosts extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('post', 'author_id', 'author', 'id', 'CASCADE');

    }

    public function down()
    {
        $this->dbforge->dropForeignKey('post', 'author_id');

    }
}
