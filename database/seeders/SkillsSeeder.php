<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skills;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::create([
            'title' => 'Skills',
            'content' => 'This Is My Content',
            'skills' => [
                ["skill" => "HTML",
                "percentage" => 80],
                ["skill" => "CSS",
                "percentage" => 70],
                ["skill" => "LARAVEL",
                "percentage" => 80],
            ],
        ]);
    }
}
