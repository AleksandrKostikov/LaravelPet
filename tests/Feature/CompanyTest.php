<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    public function testAUserCanCreateACompany()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($user = User::factory()->create());

        $this->post('/companies', $attributes = ['name' => 'QSOFT']);

        $this->assertDatabaseHas('companies', $attributes);
    }

    public function testItRequiresNameOnCreate()
    {
        $this->actingAs($user = User::factory()->create());

        $this->post('/companies', [])->assertSessionHasErrors(['name']);
    }

    public function testGuestsMayNotCreateACompany()
    {
        $this->post('/companies', [])->assertRedirect('/login');
    }
}
