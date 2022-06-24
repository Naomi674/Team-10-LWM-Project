<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesServices extends Seeder
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
            'service' => 'sit ullam nulla ut',
            'description' => 'Ut odio ut ipsum sunt vel quia autem qui quia maiores ad reiciendis distinctio sequi placeat. Est possimus necessitatibus sit consectetur',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Main Service',
            'service' => 'delectus voluptatem nam amet',
            'description' => 'Et fuga exercitationem a expedita ',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Main Service',
            'service' => 'Sit impedit quos At reiciendis',
            'description' => 'Quo libero praesentium At tempora doloribus ad dolor est enim esse ad architecto sequi et',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Main Service',
            'service' => 'laboriosam nam molestias',
            'description' => 'um dignissimos quae. Ut beatae doloremque et officiis corporis sit facilis eius ',
        ]);

        //Requests
        DB::table('facilities_services')->insert([
            'category' => 'Requests',
            'service' => 'recusandae non eaque ',
            'description' => 'Ut odio ut ipsum sunt vel quia autem qui quia maiores ad reiciendis distinctio sequi placeat.',
        ]);

        //Issues
        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'numquam et doloremque',
            'description' => 'Ut odio ut ipsum sunt vel quia autem qui quia maiores ad reiciendis distinctio sequi placeat.',
        ]);

        DB::table('facilities_services')->insert([
            'category' => 'Issues',
            'service' => 'Report a Broken light bulb',
            'description' => 'Report if a light is broken or just needs to be replaced',
        ]);

        //Feedback
        DB::table('facilities_services')->insert([
            'category' => 'Feedback',
            'service' => 'placeat ut veritatis',
            'description' => 'sit ullam nulla ut delectus voluptatem nam amet dolorem. Sit impedit quos At reiciendis',
        ]);

    }
}
