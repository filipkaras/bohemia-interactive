<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function test_login_redirect()
    {
        $this->get('/')->assertRedirect('/login');
    }

    public function test_login_page()
    {
        $this->get('/login')->assertSee('Please enter your login and password!');
    }

    public function test_register_page()
    {
        $this->get('/register')->assertSee('Create a new account!');
    }

    public function test_logged_in_redirect()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/login')->assertRedirect('/');
    }

    public function test_company_list()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/companies')->assertSee('Companies');
    }
}
