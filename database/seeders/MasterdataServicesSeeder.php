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
            'service' => 'Adjust Line Rate',
            'description' => 'Adjust the line rate for a material',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Main Service',
            'service' => 'Check Box Height',
            'description' => 'Change box height',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Main Service',
            'service' => 'Change PM BOM - Prev.Maint.Plan',
            'description' => 'Maintain the Bill of Material in SAP',
        ]);

        //Requests
        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Copy From Plant Spare Part Material',
            'description' => 'Request to extend a material for another plant',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Change Spare Part Material',
            'description' => 'Request a change on a spare part material',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'New Spare Part Material',
            'description' => 'Request a new spare part material',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'New Vendor Request',
            'description' => 'Vendor Application Form',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'New Vendor Request (RAW)',
            'description' => 'Vendor Application Form (RAW)',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Vendor Change Request',
            'description' => 'Request to change a vendor',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'New Vendor Request (Employee)',
            'description' => 'Vendor application form',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Create Restack',
            'description' => 'Request a restack for a material',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Request new batter',
            'description' => 'Request new batter',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Incident/Other',
            'description' => 'Register an incident or question regarding a material for mastersdata',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Plantswitch ',
            'description' => 'Request a plant switch for materials',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => '',
            'description' => '',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Change BOM Component ',
            'description' => 'Request a Change on a BOM component',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Change BOM Usage',
            'description' => 'Request a change on a BOM usage',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Requests',
            'service' => 'Change Material Status',
            'description' => 'Request change on the material status',
        ]);

        //Issues
        DB::table('masterdata_services')->insert([
            'category' => 'Issues',
            'service' => 'Create New Frozen',
            'description' => 'Create a new frozen',
        ]);

        DB::table('masterdata_services')->insert([
            'category' => 'Issues',
            'service' => 'Create New ORR (Backend)',
            'description' => 'Create a new OOR',
        ]);

        //Feedback
        DB::table('masterdata_services')->insert([
            'category' => 'Feedback',
            'service' => 'n excepturi blanditiis 33',
            'description' => 'Id molestias magnam ab illum fugiat est nihil voluptatum. Sed recusandae suscipit est itaque asperiores ut vero voluptatem.',
        ]);

    }
}


