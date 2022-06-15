<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotLoginAccessRestrictionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_access_dashboard()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_access_hub()
    {
        $response = $this->get('/hub');

        $response->assertRedirect('/login');
    }

    public function test_access_hub_thread_name1_id1()
    {
        $response = $this->get('/hub/thread_name=1/id=1');

        $response->assertRedirect('/login');
    }

    public function test_access_hub_thread_name1_id0()
    {
        $response = $this->get('/hub/thread_name=1/id=');

        $response->assertRedirect('/login');
    }

    public function test_access_hub_thread_name0_id1()
    {
        $response = $this->get('/hub/thread_name=/id=1');

        $response->assertRedirect('/login');
    }

    public function test_access_hub_thread_name0_id0()
    {
        $response = $this->get('/hub/thread_name=/id=');

        $response->assertRedirect('/login');
    }

    public function test_access_mypage()
    {
        $response = $this->get('/mypage');

        $response->assertRedirect('/login');
    }
}
