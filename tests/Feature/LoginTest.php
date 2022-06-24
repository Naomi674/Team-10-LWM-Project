<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testLoginRedirect()
    {
        $response = $this->get('/');

        $response->assertRedirect('/login');

        $response = $this->get('/knowledge');

        $response->assertRedirect('/login');

        $response = $this->get('/status');

        $response->assertRedirect('/login');
    }

    public function testLoadingLoginPage() {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
