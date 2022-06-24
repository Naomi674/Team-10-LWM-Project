<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\Models\User;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $route = route('admin.userManagement.store');
        $requestBody = [
            'name' => 'AutomaticFooUser',
            'email' => 'automaticfoomail@example.com',
            'password' => $this->faker->password(12),
            'role_id' => $this->faker->numberBetween(0, 1), // Normal User
        ];

        $response = $this->post($route, $requestBody);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseHas('users', [
            'name' => 'AutomaticFooUser',
            'email' => 'automaticfoomail@example.com',
        ]);
    }

    public function testWrongRegistrationInput() {
        $route = route('admin.userManagement.store');
        $requestBody = [
            'name' => 'AutomaticFooUser',
            'email' => 'automaticfoomail@example.com',
            'password' => 'password',
            'role_id' => 42, // Role does not exist
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['role_id']);
        $this->assertDatabaseMissing('users' , [
            'name' => 'AutomaticFooUser',
            'email' => 'automaticfoomail@example.com',
            'role_id' => 42, // Role does not exist
        ]);
    }
}
