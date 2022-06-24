<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('facilities_services')->insert([
            'category' => 'Main Service',
            'service' => 'Register a Visitor',
            'description' => 'Register your visitor or contractor here ',
        ]);

        //Requests
        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Cleaning',
            'description' => 'Order a cleaning service here, when for example... you spilled some coffee, or the waste bin is full',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Mobility on Request',
            'description' => 'You can use this item when there are no pool cars available, or if you have special transportation needs.',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Space and Moving',
            'description' => 'Order this service to remove or move archive, furniture or IT',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Furniture',
            'description' => 'Order furniture for your workplace',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Office Supplies',
            'description' => 'Order special office supplies',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Handyman',
            'description' => 'Order handyman service for example, to hand a coat rack or whiteboard',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Printing',
            'description' => 'Order your business card or print request',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Lunch Service',
            'description' => 'Order lunch service to serve between 11:30 and 13:30 in the meetingroom (minimum of 5 persons).',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'Meeting Service',
            'description' => 'Order meeting service to serve between 08:30 and 14:30 in the meetingroom (minimum of 5 persons). ',
        ]);

        //Issues
        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Building Issue',
            'description' => 'Register a building defect such as a broken window, a defect door, or a hole in the wall.',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Climate Issue',
            'description' => 'Report a climate issue here, like it being to cold, warm, or the installation making noise',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Coffee Machine Issue',
            'description' => 'Report an issue with a coffee machine like, an outage, empty products, or notifications',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Pest Control',
            'description' => 'Report pests, such as mice, ants, etc. so the pest control service can be informed',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Kitchen Issues',
            'description' => 'Report a kitchen defect, such as a dishwasher defect or a non-working water cooler.',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Technical Issue',
            'description' => 'Any technical issue in a space can be reported here, such as: broken lamp/light, sun screens',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Furniture Issue',
            'description' => 'Please report defect furniture here, like a broken chair, shutters or an issue with a plant',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Sanitary Issue',
            'description' => 'Please report a sanitary defect here, like a broken towel dispenser, empty toilet paper, or a clogged toilet',
        ]);

        //Feedback
        DB::table('facilities_services')->insert([
            'category' => 'Feedback',
            'service' => 'Feedback',
            'description' => 'Leave your feedback about Facilities here, like did any facilities meet expectations, are there any facilities you would like to have available to you, is there any thing you think can be improved?',
        ]);

    }
}
