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
        DB::table('business_support_services')->insert([
            'category' => 'Main Service',
            'service' => 'Lorem ipsum dolor sit amet.',
            'description' => 'Qui aperiam tempore eum totam quos est aspernatur aliquid et consectetur officiis et nobis ipsum At quia numquam rem magnam veritatis?',
        ]);

        DB::table('business_support_services')->insert([
            'category' => 'Main Service',
            'service' => 'Ea porro neque quo tempora',
            'description' => 'nulla et distinctio cupiditate id voluptate inventore sed quod repellat non saepe eius et magni nihil.',
        ]);

        DB::table('business_support_services')->insert([
            'category' => 'Main Service',
            'service' => 'Id esse aperiam non',
            'description' => 'consequatur obcaecati sit galisum obcaecati vel ullam quidem et obcaecati cumque.',
        ]);

        DB::table('business_support_services')->insert([
            'category' => 'Main Service',
            'service' => 'Et fuga exercitationem ',
            'description' => 'a expedita odit qui sapiente ipsa. Quo libero praesentium At tempora doloribus ad dolor',
        ]);

        //Requests
        DB::table('business_support_services')->insert([
            'category' => 'Requests',
            'service' => 'est enim esse ad',
            'description' => 'architecto sequi et provident unde eum dignissimos quae. Ut beatae doloremque et',
        ]);

        //Issues
        DB::table('business_support_services')->insert([
            'category' => 'Issues',
            'service' => 'officiis corporis sit facilis',
            'description' => 'eius sed vero odio est rerum iste ut cumque sunt eum praesentium repellat. ',
        ]);

        //Feedback
        DB::table('business_support_services')->insert([
            'category' => 'Feedback',
            'service' => '33 officia quam sit',
            'description' => 'Ut odio ut ipsum sunt vel quia autem qui quia maiores ad reiciendis distinctio sequi placeat. Est possimus necessitatibus sit consectetur obcaecati sed exercitationem dolores ',
        ]);

    }
}
