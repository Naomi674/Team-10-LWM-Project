<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->insert([
            'title' => 'Buisness Service',
            'day1' => true,
            'day2' => false,
            'day3' => true,
            'day4' => true,
            'day5' => false,
            'status' => true,
        ]);

        DB::table('systems')->insert([
            'title' => 'Digital Workplace',
            'day1' => true,
            'day2' => true,
            'day3' => false,
            'day4' => true,
            'day5' => false,
            'status' => false,
        ]);

        DB::table('systems')->insert([
            'title' => 'E-Commerce',
            'day1' => true,
            'day2' => true,
            'day3' => true,
            'day4' => true,
            'day5' => true,
            'status' => true,
        ]);

        DB::table('systems')->insert([
            'title' => 'Files&Folders',
            'day1' => true,
            'day2' => true,
            'day3' => false,
            'day4' => true,
            'day5' => true,
            'status' => false,
        ]);
    }
}
