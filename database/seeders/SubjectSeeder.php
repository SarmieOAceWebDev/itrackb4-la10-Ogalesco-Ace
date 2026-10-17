<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject; 

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'code' => 'CAP102',
            'subject' => 'Capstone Project 2',
            'units' => 3,
            'category' => 'Project',
        ]);

        Subject::create([
            'code' => 'ITPI333',
            'subject' => 'Information Assurance and Security 2',
            'units' => 2,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITPI441',
            'subject' => 'Systems Administration and Maintenance',
            'units' => 2,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITRACKB4',
            'subject' => 'Web Systems and Technologies: Web Programming 2',
            'units' => 2,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITTRACKB3',
            'subject' => 'Web Systems and Technologies: Web Programming 1',
            'units' => 2,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITEL301',
            'subject' => 'Professional Elective',
            'units' => 3,
            'category' => 'Elective',
        ]);

        Subject::create([
            'code' => 'ITPI221',
            'subject' => 'Database Management Systems',
            'units' => 3,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITPI222',
            'subject' => 'Data Structures and Algorithms',
            'units' => 3,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITPI223',
            'subject' => 'Computer Networks',
            'units' => 3,
            'category' => 'Major',
        ]);

        Subject::create([
            'code' => 'ITEL302',
            'subject' => 'Human Computer Interaction',
            'units' => 3,
            'category' => 'Elective',
        ]);
    }
}
