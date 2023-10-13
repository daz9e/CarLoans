<?php

namespace Tests\Unit\Http\Controllers;

use App\Models\Bank;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BankControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex(): void
    {
        $response = $this->get('/api/banks');

        $response->assertStatus(200)
            ->assertJsonStructure(['data', 'current_page', 'first_page_url']);
    }

    public function testStore(): void
    {
        $data = [
            'title' => 'Example Bank',
            'location' => 'Example Location',
        ];

        $response = $this->post('/api/banks', $data);

        $response->assertStatus(201)
            ->assertJson($data);
    }

    public function testShow(): void
    {
        /** @var Bank $bank */
        $bank = Bank::factory()->create();
        $response = $this->get("/api/banks/$bank->id");

        $response->assertStatus(200)
            ->assertJson(['id' => $bank->id]);
    }

    public function testUpdate(): void
    {
        /** @var Bank $bank */
        $bank = Bank::factory()->create();

        $data = [
            'title' => 'Updated Title',
            'location' => 'Updated Location',
        ];

        $response = $this->put("/api/banks/$bank->id", $data);

        $response->assertStatus(200)
            ->assertJson($data);
    }

    public function testDestroy(): void
    {
        /** @var Bank $bank */
        $bank = Bank::factory()->create();

        $response = $this->delete("/api/banks/$bank->id");

        $response->assertStatus(204);

        $this->assertNull(Bank::find($bank->id));
    }
}
