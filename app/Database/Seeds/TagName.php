<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TagName extends Seeder
{
    public function run()
    {
        $data = [
            [
                'post_id' => 1,
                'slug' => 'test',
                'title' => 'test',
            ],
        ];

        $this->db->table('tag')->insertBatch($data);
    }
}
