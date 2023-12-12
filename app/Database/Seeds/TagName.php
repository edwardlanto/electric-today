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
                'slug' => 'news',
                'title' => 'News',
            ],
            [
                'post_id' => 1,
                'slug' => 'lineman-safety',
                'title' => 'Lineman Safety',
            ],
            [
                'post_id' => 1,
                'slug' => 'safety-best-practices',
                'title' => 'Safety Best Practices',
            ],
            [
                'post_id' => 1,
                'slug' => 'safety-technologies',
                'title' => 'Safety Technologies',
            ],
            [
                'post_id' => 1,
                'slug' => 'electrical-substation',
                'title' => 'Electrical Substations',
            ],
            [
                'post_id' => 1,
                'slug' => 'substation-automation',
                'title' => 'Substation Automation',
            ],
            [
                'post_id' => 1,
                'slug' => 'substation-technologies',
                'title' => 'Substation Technologies',
            ],
            [
                'post_id' => 1,
                'slug' => 'substation-testing-maintenance',
                'title' => 'Substation Testing & Maintenance',
            ],
            [
                'post_id' => 1,
                'slug' => 'td-automation',
                'title' => 'T&D Automation',
            ],
        ];

        $this->db->table('tag')->insertBatch($data);
    }
}
