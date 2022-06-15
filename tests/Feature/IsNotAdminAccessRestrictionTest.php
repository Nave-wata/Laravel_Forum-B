<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IsNotAdminAccessRestrictionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    private $loginUser;

    public function setUp(): void
    {
        parent::setUp();
        $this->loginUser = User::factory()->create();
    }

    public function test_access_admin_delete_thread()
    {
        $response = $this
            ->actingAs($this->loginUser)
            ->post('/jQuery.ajax/admin/delete_thread');

        $response->assertStatus(403);
    }

    public function test_access_admin_edit_thread()
    {
        $response = $this
            ->actingAs($this->loginUser)
            ->post('/jQuery.ajax/admin/edit_thread');

        $response->assertStatus(403);
    }

    public function test_access_admin_delete_message()
    {
        $response = $this
            ->actingAs($this->loginUser)
            ->post('/jQuery.ajax/admin/delete_message');

        $response->assertStatus(403);
    }

    public function test_access_admin_restore_message()
    {
        $response = $this
            ->actingAs($this->loginUser)
            ->post('/jQuery.ajax/admin/restore_message');

        $response->assertStatus(403);
    }
}
