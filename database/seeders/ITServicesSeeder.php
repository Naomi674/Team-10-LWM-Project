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
        DB::table('i_t_services')->insert([
            'category' => 'Main Service',
            'service' => 'Et consequatur placeat',
            'description' => 'Ut libero omnis qui cumque voluptas qui architecto ratione quo nihil rerum sed distinctio quas est odio perferendis id error exercitationem. ',
        ]);

        DB::table('i_t_services')->insert([
            'category' => 'Main Service',
            'service' => 'eos eveniet omnis',
            'description' => 'Lorem ipsum dolor sit amet. Est totam illum eum aliquid voluptate est quia earum 33 dolorem illum sit earum nulla sed praesentium dolor?',
        ]);

        DB::table('i_t_services')->insert([
            'category' => 'Main Service',
            'service' => 'Et consequatur placeat',
            'description' => 'Ut libero omnis qui cumque voluptas qui architecto ratione quo nihil rerum sed distinctio quas est odio perferendis id error exercitationem. ',
        ]);

        DB::table('i_t_services')->insert([
            'category' => 'Main Service',
            'service' => 'eos eveniet omnis',
            'description' => 'Lorem ipsum dolor sit amet. Est totam illum eum aliquid voluptate est quia earum 33 dolorem illum sit earum nulla sed praesentium dolor?',
        ]);

        //Requests
        DB::table('i_t_services')->insert([
            'category' => 'Requests',
            'service' => 'aut dignissimos',
            'description' => 'Ut libero omnis qui cumque voluptas qui architecto ratione quo nihil rerum sed distinctio quas est odio perferendis id error exercitationem. ',
        ]);

        DB::table('i_t_services')->insert([
            'category' => 'Requests',
            'service' => 'Request A Monitor',
            'description' => 'Put in a request for a monitor for your work space',
        ]);

        //Issues
        DB::table('i_t_services')->insert([
            'category' => 'Issues',
            'service' => 'Et consequatur placeat',
            'description' => 'Lorem ipsum dolor sit amet. Est totam illum eum aliquid voluptate est quia earum 33 dolorem illum sit earum nulla sed praesentium dolor?',
        ]);

        //Feedback
        DB::table('i_t_services')->insert([
            'category' => 'Feedback',
            'service' => 'eos eveniet omnis',
            'description' => 'Ut libero omnis qui cumque voluptas qui architecto ratione quo nihil rerum sed distinctio quas est odio perferendis id error exercitationem. ',
        ]);

    }
}

