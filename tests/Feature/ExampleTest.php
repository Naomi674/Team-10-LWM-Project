<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testLoginRedirect()
    {
        $response = $this->get('/');

        $response->assertStatus(302);

        $response = $this->get('/knowledge');

        $response->assertStatus(302);

        $response = $this->get('/status');

        $response->assertStatus(302);
    }

    public function testLoadingLoginPage() {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
