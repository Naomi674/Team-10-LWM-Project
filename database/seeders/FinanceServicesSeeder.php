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
            'service' => 'Book a meeting room',
            'description' => 'Make a room reservation with optional services.',
        ]);

        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'Cleaning',
            'description' => 'order cleaning service',
        ]);

        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'Furniture',
            'description' => 'Order furniture for your work place',
        ]);

        DB::table('finance_services')->insert([
            'category' => 'Main Service',
            'service' => 'Handy Man',
            'description' => 'Order a handyman service',
        ]);

        //Requests
        DB::table('finance_services')->insert([
            'category' => 'Requests',
            'service' => 'Handy Man',
            'description' => 'Order a handyman service',
        ]);

        //Issues
        DB::table('finance_services')->insert([
            'category' => 'Issues',
            'service' => 'Handy Man',
            'description' => 'Order a handyman service',
        ]);

        //Feedback
        DB::table('finance_services')->insert([
            'category' => 'Feedback',
            'service' => 'Handy Man',
            'description' => 'Order a handyman service',
        ]);

    }
}
