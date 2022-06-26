<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog_tickets')->insert([
            'title' => 'Cleaning',
            'description' => 'the trash cans are over flowing in the office and need to be changed',
            'location' => 'GW307',
            'author' =>'Polly',
        ]);
    }
}
