<?php

namespace Database\Seeders;

use App\Models\System;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     //   \App\Models\User::factory(10)->create();
        //$this->call(FacilitiesServicesSeeder::class);
        $this->call(BusinessSupportServicesSeeder::class);
        $this->call(FinanceServicesSeeder::class);
        //$this->call(HRServices::class);
        //$this->call(ITServicesSeeder::class);
        //$this->call(MasterdataServicesSeeder::class);
        //$this->call(KnowledgeSeeder::class);
        //$this->call(PendingKnowledgeSeeder::class);
        //$this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SystemsSeeder::class);
    }
}
