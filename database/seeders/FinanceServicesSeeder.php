<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'Aut quia obcaecati aut ',
            'description' => 'In vitae mollitia At doloremque molestiae et totam amet? ',
        ]);

        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'et totam amet?',
            'description' => 'Eos sint impedit est quos autem aut beatae necessitatibus et galisum consequatur. ',
        ]);

        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'Aut quia obcaecati aut ',
            'description' => 'In vitae mollitia At doloremque molestiae et totam amet? ',
        ]);

        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'et totam amet?',
            'description' => 'Aut labore corrupti et excepturi doloribus qui facere galisum. ',
        ]);

        //Requests
        DB::table('finance_services')->insert([
            'category' => 'Requests',
            'service' => 'Cum nesciunt laborum ',
            'description' => 'Eos sint impedit est quos autem aut beatae necessitatibus et galisum consequatur. ',
        ]);

        //Issues
        DB::table('finance_services')->insert([
            'category' => 'Issues',
            'service' => 'Cum nesciunt laborum ',
            'description' => 'In vitae mollitia At doloremque molestiae et totam amet? ',
        ]);

        //Feedback
        DB::table('finance_services')->insert([
            'category' => 'Feedback',
            'service' => 'Aut quia obcaecati aut ',
            'description' => 'Eos sint impedit est quos autem aut beatae necessitatibus et galisum consequatur. ',
        ]);

    }
}
