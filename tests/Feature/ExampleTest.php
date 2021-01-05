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
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function careersTest()
    {
        $response = $this->get('/careers');

        $response->assertStatus(200);
    }

    public function contactUsTest()
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
    }

    public function applyJobTest()
    {
        $response = $this->get('/apply-job');

        $response->assertStatus(200);
    }
}
