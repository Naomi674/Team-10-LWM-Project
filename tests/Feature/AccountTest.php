<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class AccountTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    use WithFaker;

    public function testUpdateAccount()
    {
        $user = User::factory()->create();
        $route = route('user-profile-information.update');
        $requestBody = [
            'name' => 'TestFooUser',
            'email' => 'updated@foo.com',
        ];

        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->put($route, $requestBody);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('users', $requestBody);
    }

    public function testUpdateAccountWithWrongData()
    {
        $user = User::factory()->create();
        $route = route('user-profile-information.update');
        $requestBody = [
            'name' => 'TestFooUser',
            'email' => 'updatedfoo.com', // missing @, will fail
        ];

        $response = $this->actingAs($user)
            ->withSession(['banned' => false])
            ->put($route, $requestBody);
        
        $this->assertDatabaseMissing('users', $requestBody);
    }
}
