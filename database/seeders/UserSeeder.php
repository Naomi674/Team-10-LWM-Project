<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!(DB::table('users')->find('1'))) {
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.test',
                'email_verified_at' => now(),
                'password' => Hash::make('admin42'), // password
                'remember_token' => Str::random(10),
                'role_id' => 1, // Admin role (user is 0)
            ]);
        }

        User::factory(5)->create();
    }
}
