<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ITServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('it_services')->insert([
            'category' => 'Main Service',
            'service' => 'SAP Reset Password',
            'description' => 'Password reset SAP account',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Main Service',
            'service' => 'Adobe Systems InDesign CC',
            'description' => 'Adobe Systems InDesign CC',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Main Service',
            'service' => 'MS Visio Pro (Office 365)',
            'description' => 'MS Visio Pro (Office 365)',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Main Service',
            'service' => 'Prolong Windows Account',
            'description' => 'Prolong Windows Account',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Main Service',
            'service' => 'Email Distribution List',
            'description' => 'Email Distribution List',
        ]);


        //Requests
        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'New Windows Account',
            'description' => 'Request a new windows account',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'New Laptop',
            'description' => 'Request a new laptop',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'Docking Station',
            'description' => 'Request a new docking station',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'Mouse',
            'description' => 'Request a new mouse',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'USB Headset',
            'description' => 'Request a new USB headset',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'Monitor',
            'description' => 'Request a new monitor',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'Change Phone Settings',
            'description' => 'Change Deskhone settings',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'New Smartphone',
            'description' => 'Request a new Smartphone',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'Request Software for My.Lambweston',
            'description' => 'Request Software for My.Lambweston',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Requests',
            'service' => 'Keyboard',
            'description' => 'Request a new keyboard',
        ]);

        //Issues
        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'Submit C4C Incident',
            'description' => 'Need for C4C support',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'Submit IT Incident',
            'description' => 'Something broken, not working as it should',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'Report Suspicious E-Mail',
            'description' => 'Report a suspicous e-mail',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'General Request',
            'description' => 'A special request for the IT Servicedesk',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'Submit SAP Incident',
            'description' => 'Need for SAP support',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'Restore Data Backup',
            'description' => 'Restore data backup',
        ]);

        DB::table('it_services')->insert([
            'category' => 'Issues',
            'service' => 'Ask a Question',
            'description' => 'Ask us a question about all the different services',
        ]);

        //Feedback
        DB::table('it_services')->insert([
            'category' => 'Feedback',
            'service' => 'Give us Feedback',
            'description' => 'How are we doing?',
        ]);

    }
}

