<?php

namespace Tests\Unit\Http\Controllers;

use App\Models\Bank;
use App\Models\DealershipApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DealershipApplicationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex(): void
    {
        $response = $this->get('/api/applications');

        $response->assertStatus(200)
            ->assertJsonStructure(['data','current_page','first_page_url']);
    }

    public function testStore(): void
    {
        /** @var Bank $bank */
        $bank = Bank::inRandomOrder()->first() ?? Bank::factory()->create();

        $data = [
            'bank_id' => $bank->id,
            'dealer_name' => 'Example Dealer',
            'contact_person' => 'John Doe',
            'loan_amount' => 1000.0,
            'loan_term' => 12,
            'interest_rate' => 5.5,
            'reason' => 'Example reason',
            'status' => 'new',
        ];

        $response = $this->post('/api/applications', $data);

        $response->assertStatus(201)
            ->assertJson($data);
    }

    public function testShow(): void
    {
        /** @var DealershipApplication $application */
        $application = DealershipApplication::factory()->create();
        $response = $this->get("/api/applications/$application->id");

        $response->assertStatus(200)
            ->assertJson(['id' => $application->id]);
    }

    /**
     * @return void
     */
    public function testUpdate(): void
    {
        /** @var DealershipApplication $application */
        $application = DealershipApplication::factory()->create();

        $data = [
            'dealer_name' => 'Dealer Name',
        ];

        $response = $this->put("/api/applications/$application->id", $data);

        $response->assertStatus(200)
            ->assertJson($data);
    }

    public function testDestroy(): void
    {
        /** @var DealershipApplication $application */
        $application = DealershipApplication::factory()->create();

        $response = $this->delete("/api/applications/$application->id");

        $response->assertStatus(204);

        $this->assertNull(DealershipApplication::find($application->id));
    }
}

