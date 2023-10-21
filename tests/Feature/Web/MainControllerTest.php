<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;

class MainControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    public function test_can_display_index_page(): void
    {
        $response = $this->get(route('home'))->assertViewIs('index');

        $response->assertStatus(200);
    }
}
