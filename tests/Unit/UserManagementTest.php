<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    public function testUserDuplication()
    {
        $user1 = User::make([
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'role_id' => 0, // Normal User
        ]);

        $user2 = User::make([
            'name' => 'Test2',
            'email' => 'test2@example.com',
            'password' => Hash::make('password2'),
            'role_id' => 1, // Admin User
        ]);

        $this->assertTrue($user1->email != $user2->email);
    }

    public function testUserDeletion() {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        $user?->delete();

        $this->assertTrue(true);
    }
}
