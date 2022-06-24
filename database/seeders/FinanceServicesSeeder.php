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
            'service' => 'Book Project Costs',
            'description' => ' Special request to let Accounting book project costs. ',
        ]);

        //Requests
        DB::table('finance_services')->insert([
            'category' => 'Requests',
            'service' => 'Request to change a task',
            'description' => 'Request to change a task',
        ]);

        //Issues

        //Feedback
        DB::table('finance_services')->insert([
            'category' => 'Feedback',
            'service' => 'Give Us Feedback',
            'description' => 'How are we doing?',
        ]);

    }
}
