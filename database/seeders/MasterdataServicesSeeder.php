<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterdataServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('masterdata_services')->insert([
            'category' => 'Main Service',
            'service' => 'n excepturi blanditiis 33',
            'description' => 'd praesentium magni vel recusandae illo aut libero quia aut laboriosam voluptatem ab earum quasi vel consectetur dignissimos. ',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Main Service',
            'service' => 'At odit praesentium',
            'description' => 'd praesentium magni vel recusandae illo aut libero quia aut laboriosam voluptatem ab earum quasi vel consectetur dignissimos. ',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Main Service',
            'service' => 'At odit praesentium',
            'description' => 'Id molestias magnam ab illum fugiat est nihil voluptatum. Sed recusandae suscipit est itaque asperiores ut vero voluptatem.',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Main Service',
            'service' => 'n excepturi blanditiis 33',
            'description' => 'd praesentium magni vel recusandae illo aut libero quia aut laboriosam voluptatem ab earum quasi vel consectetur dignissimos. ',
        ]);

        //Requests
        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => ' Aut velit',
            'description' => 'Id molestias magnam ab illum fugiat est nihil voluptatum. Sed recusandae suscipit est itaque asperiores ut vero voluptatem.',
        ]);

        //Issues
        DB::table('masterdata_services')->insert([
            'category' => 'Issues',
            'service' => 'At odit praesentium',
            'description' => 'd praesentium magni vel recusandae illo aut libero quia aut laboriosam voluptatem ab earum quasi vel consectetur dignissimos. ',
        ]);

        //Feedback
        DB::table('masterdata_services')->insert([
            'category' => 'Feedback',
            'service' => 'n excepturi blanditiis 33',
            'description' => 'Id molestias magnam ab illum fugiat est nihil voluptatum. Sed recusandae suscipit est itaque asperiores ut vero voluptatem.',
        ]);

    }
}


