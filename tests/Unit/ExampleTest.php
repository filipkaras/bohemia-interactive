<?php

namespace Tests\Unit;

use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function test_company()
    {
        Company::factory()->create();
        Company::factory()->create();

        $companies = Company::all();

        $this->assertCount(2, $companies);
    }

    public function test_user()
    {
        User::factory()->create();
        User::factory()->create();

        $users = User::all();

        $this->assertCount(2, $users);
    }

    public function test_user_company()
    {
        $name = 'This is the best company ever';

        User::factory()->create([
            'company_id' => Company::factory()->create([
                'name' => $name
            ])
        ]);

        $user = User::first();

        $this->assertEquals($name, $user->company->name);
    }
}
