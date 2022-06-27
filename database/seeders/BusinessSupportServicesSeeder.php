<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSupportServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('businesssupport_services')->insert([
            'category' => 'Main Service',
            'service' => 'New Destruction Request',
            'description' => 'New Destruction Request',
        ]);

        DB::table('businesssupport_services')->insert([
            'category' => 'Main Service',
            'service' => 'Request low value Purchase Order',
            'description' => 'For non-contracted goods & services up to 5000 EUR or an equivalent. Paid at full delivery & execution, to be invoiced on 1 invoice.',
        ]);

        DB::table('businesssupport_services')->insert([
            'category' => 'Main Service',
            'service' => 'Create a Capital Budgeting Demand',
            'description' => 'Create a Capital Budgeting Demand',
        ]);

        DB::table('businesssupport_services')->insert([
            'category' => 'Main Service',
            'service' => 'Edit an existing capital budgeting demand',
            'description' => 'Edit an existing capital budgeting demand',
        ]);

        //Requests


        //Issues


        //Feedback
        DB::table('businesssupport_services')->insert([
            'category' => 'Feedback',
            'service' => 'Give Feedback on Business Support',
            'description' => 'How do you think we are doing?',
        ]);

    }
}
