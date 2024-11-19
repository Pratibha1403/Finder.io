<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(5)->create();
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured' => false,
            'job_type' => 'Full Time',
        ],
        [
            'featured' => true,
            'job_type' => 'Part Time',
        ]
    ));
    }
}