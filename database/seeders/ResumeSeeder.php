<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resume;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resume::create([
            'title' => 'Resume',
            'content' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'sumary' => [
                'name' => 'ALEX SMITH',
                'sumary' => 'Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.<ul><li>Portland par 127,Orlando, FL</li><li>(123) 456-7891</li><li>alice.barkley@example.com</li></ul>'
            ],
            'education' => [
                ['title' => 'MASTER OF FINE ARTS & GRAPHIC DESIGN',
                'year' => '2015 - 2016',
                'content' => 'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'
            ],
            ['title' => 'MASTER OF FINE ARTS & GRAPHIC DESIGN',
                'year' => '2015 - 2016',
                'content' => 'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'
            ]
        ],
        'experience' => [
            [
                'title' => 'SENIOR GRAPHIC DESIGN SPECIALIST',
            'year' => '2019 - Present',
            'content' => '<ul><li> Lead in the design, development, and implementation of the graphic, layout, and production communication materials </li><li> Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li><li> Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design </li><li> Oversee the efficient use of production project budgets ranging from $2,000 - $25,000 </li></ul>'
            ],
            [
                'title' => 'SENIOR GRAPHIC DESIGN SPECIALIST',
            'year' => '2019 - Present',
            'content' => '<ul><li> Lead in the design, development, and implementation of the graphic, layout, and production communication materials </li><li> Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li><li> Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design </li><li> Oversee the efficient use of production project budgets ranging from $2,000 - $25,000 </li></ul>'
            ]
            ]
        ]);
    }
}
