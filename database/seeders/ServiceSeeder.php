<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Service',
            'subtitle' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
            'content' => [
                [
                'icon' => 'icon.jpg',
                'content' => 'content1',
                ],
                [
                    'icon' => 'icon1.jpg',
                    'content' => 'content2',
                ]
            ]
        ]);
    }
}
