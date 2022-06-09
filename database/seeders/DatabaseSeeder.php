<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(KnowledgeSeeder::class);
        $this->call(RoleSeeder::class);
//        $this->call(TicketSeeder::class);
        $this->call(UserSeeder::class);
        $ticket = Ticket::factory(3)->create();

        User::factory(1)->create()->each(function($user) use ($ticket) {
            $user->tickets()->saveMany($ticket);
        });

        User::factory(1)->create()->each(function($user) use ($ticket) {
            $user->assignedTickets()->saveMany($ticket);
        });
    }
}
