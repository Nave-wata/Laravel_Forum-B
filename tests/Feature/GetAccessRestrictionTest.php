<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetAccessRestrictionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_access_getRow()
    {
        $response = $this->get('/jQuery.ajax/getRow');

        $response->assertStatus(404);
    }

    public function test_access_sendRow()
    {
        $response = $this->get('/jQuery.ajax/getRow');

        $response->assertStatus(404);
    }

    public function test_access_create_thread()
    {
        $response = $this->get('/jQuery.ajax/create_thread');

        $response->assertStatus(404);
    }

    public function test_access_like()
    {
        $response = $this->get('/jQuery.ajax/like');

        $response->assertStatus(404);
    }

    public function test_access_unlike()
    {
        $response = $this->get('/jQuery.ajax/unlike');

        $response->assertStatus(404);
    }

    public function test_access_admin_delete_thread()
    {
        $response = $this->get('/jQuery.ajax/admin/delete_thread');

        $response->assertStatus(404);
    }

    public function test_access_admin_edit_thread()
    {
        $response = $this->get('/jQuery.ajax/admin/edit_thread');

        $response->assertStatus(404);
    }

    public function test_access_admin_delete_message()
    {
        $response = $this->get('/jQuery.ajax/admin/delete_message');

        $response->assertStatus(404);
    }

    public function test_access_admin_restore_message()
    {
        $response = $this->get('/jQuery.ajax/admin/restore_message');

        $response->assertStatus(404);
    }
}
