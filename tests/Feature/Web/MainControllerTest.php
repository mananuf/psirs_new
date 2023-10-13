<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MainControllerTest extends TestCase
{
    use DatabaseMigrations;

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
