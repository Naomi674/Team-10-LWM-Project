<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HRServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Main Services
        DB::table('h_r_services')->insert([
            'category' => 'Main Service',
            'service' => 'Et accusantium sint sed omnis eos',
            'description' => 'Ut quos nemo a corporis dolores qui recusandae praesentium. Sed voluptatem quia a officiis eligendi non consequatur minima.

',
        ]);

        DB::table('h_r_services')->insert([
            'category' => 'Main Service',
            'service' => 'Aut quidem quam',
            'description' => 'Et mollitia soluta et voluptatum explicabo et deleniti quia eum aspernatur optio unde aliquam id velit repudiandae est quas minus.',
        ]);

        DB::table('h_r_services')->insert([
            'category' => 'Main Service',
            'service' => 'Aut quidem quam',
            'description' => 'Et mollitia soluta et voluptatum explicabo et deleniti quia eum aspernatur optio unde aliquam id velit repudiandae est quas minus.',
        ]);

        DB::table('h_r_services')->insert([
            'category' => 'Main Service',
            'service' => 'Et accusantium sint sed omnis eos',
            'description' => 'Ut quos nemo a corporis dolores qui recusandae praesentium. Sed voluptatem quia a officiis eligendi non consequatur minima.

',
        ]);

        //Requests
        DB::table('h_r_services')->insert([
            'category' => 'Requests',
            'service' => 'Request PTO',
            'description' => 'Put in a request for paid time off days',
        ]);

        DB::table('h_r_services')->insert([
            'category' => 'Requests',
            'service' => 'Aut quidem quam',
            'description' => 'Et mollitia soluta et voluptatum explicabo et deleniti quia eum aspernatur optio unde aliquam id velit repudiandae est quas minus.',
        ]);

        //Issues
        DB::table('h_r_services')->insert([
            'category' => 'Issues',
            'service' => 'Et accusantium sint sed omnis eos',
            'description' => 'Ut quos nemo a corporis dolores qui recusandae praesentium. Sed voluptatem quia a officiis eligendi non consequatur minima.

',
        ]);

        //Feedback
        DB::table('h_r_services')->insert([
            'category' => 'Feedback',
            'service' => 'Aut quidem quam',
            'description' => 'Et mollitia soluta et voluptatum explicabo et deleniti quia eum aspernatur optio unde aliquam id velit repudiandae est quas minus.',
        ]);

    }
}
