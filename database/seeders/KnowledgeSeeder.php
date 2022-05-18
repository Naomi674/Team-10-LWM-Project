<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('knowledge')->insert([
            'title' => 'Who to read the time?',
            'body' => 'Some body lol',
            'author' => 'Lars',
            'category' => 'FAQ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
