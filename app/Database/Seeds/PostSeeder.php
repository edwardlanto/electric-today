<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Post 1
            [
                'title' => 'Hydrogen Monitoring in the Transformer Headspace Compared to Traditional In-Oil Monitoring',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/1-24-324x160.jpg',
                'author' => 'Chris Rutledge',
                'slug' => 'hydrogen-monitoring-in-the-transformer-headspace-compared-to-traditional-in-oil-monitoring',
            ],

            // Post 2
            [
                'title' => 'The Distribution Transformer – Critical Power System Component',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/5-17-324x160.jpg',
                'author' => 'R.W. Hurst',
                'slug' => 'the-distribution-transformer-critical-power-system-component',
            ],

            // Post 3
            [
                'title' => 'Grounding Transformers Explained',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/4-19-100x70.jpg',
                'slug' => 'grounding-transformers-explained',
            ],

            // Post 4
            [
                'title' => 'The importance of risk assessment and the role of Reliability-based DGA',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/3-23-100x70.jpg',
                'slug' => 'the-importance-of-risk-assessment-and-the-role-of-reliability-based-dga',
            ],

            // Post 5
            [
                'title' => 'Distribution Transformer DGA – The Future of Monitoring Distribution Systems',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/2-22-100x70.jpg',
                'slug' => 'distribution-transformer-dga-the-future-of-monitoring-distribution-systems',
            ],

            // Post 6
            [
                'title' => 'Grounding System Testing: Simplified Fall-Of-Potential And Step-And-Touch Voltage Testing',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/1-23-e1679528835630-100x70.jpg',
                'slug' => 'grounding-system-testing-simplified-fall-of-potential-and-step-and-touch-voltage-testing',
            ],

            // Post 7
            [
                'title' => 'Overhead T&D, Direct Current Technology',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/2-19-e1679528933178-100x70.jpg',
                'slug' => 'overhead-t-d-direct-current-technology',
            ],

            // Post 8
            [
                'title' => 'Distributed Energy Resources – Small Scale Power',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/3-100x70.png',
                'slug' => 'distributed-energy-resources-small-scale-power',
            ],

            // Post 9
            [
                'title' => 'Grounding Electrodes',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/4-18-e1679529014429-100x70.jpg',
                'slug' => 'grounding-electrodes',
            ],

            // Post 10
            [
                'title' => 'High Voltage AC Transmission Lines',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/4-17-100x70.jpg',
                'slug' => 'high-voltage-ac-transmission-lines',
            ],

            // Post 11
            [
                'title' => 'CONDITION MONITORING IN AN AGE OF MODERNIZATION: How (and Why) to Adapt',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/3-22-100x70.jpg',
                'slug' => 'condition-monitoring-in-an-age-of-modernization-how-and-why-to-adapt-2',
            ],

            // Post 12
            [
                'title' => 'Cable Cleats Testing – Crucial to Cable Management',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/2-3-100x70.png',
                'slug' => 'cable-cleats-testing-crucial-to-cable-management',
            ],

            // Post 13
            [
                'title' => 'IR Inspection Windows for Electrical System Reliability',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/1-22-100x70.jpg',
                'slug' => 'ir-inspection-windows-for-electrical-system-reliability',
            ],

            // Post 14
            [
                'title' => 'The Impact of COVID-19 on the Power Industry: A Perspective',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/1-19-100x70.jpg',
                'slug' => 'the-impact-of-covid-19-on-the-power-industry-a-perspective',
            ],

            // Post 15
            [
                'title' => 'The Basics of High Voltage Substation',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/3-20-100x70.jpg',
                'slug' => 'the-basics-of-high-voltage-substation',
            ],

            // Post 16
            [
                'title' => 'The Challenges of Integrating Renewables into the Grid',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/2-21-100x70.jpg',
                'slug' => 'the-challenges-of-integrating-renewables-into-the-grid',
            ],

            // Post 17
            [
                'title' => 'Power Quality Issues in Electrical Systems',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/1-21-100x70.jpg',
                'slug' => 'power-quality-issues-in-electrical-systems',
            ],

            // Post 18
            [
                'title' => 'The Future of the Smart Grid: Trends and Perspectives',
                'image' => 'https://www.electricity-today.com/wp-content/uploads/3-19-100x70.jpg',
                'slug' => 'the-future-of-the-smart-grid-trends-and-perspectives',
            ],
        ];

        $this->db->table('post')->insertBatch($data);
    }
}