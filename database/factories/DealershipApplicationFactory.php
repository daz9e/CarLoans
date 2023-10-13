<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\DealershipApplication;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DealershipApplication>
 */
class DealershipApplicationFactory extends Factory
{
    protected $model = DealershipApplication::class;

    public function definition(): array
    {
        $status = $this->faker->randomElement(['new', 'in_progress', 'approved', 'rejected']);

        /** @var Bank $bank */
        $bank = Bank::inRandomOrder()->first() ?? Bank::factory()->create();

        return [
            'bank_id' => $bank->id,
            'dealer_name' => $this->faker->company,
            'contact_person' => $this->faker->name,
            'loan_amount' => $this->faker->numberBetween(5000, 50000),
            'loan_term' => $this->faker->numberBetween(6, 60),
            'interest_rate' => $this->faker->randomFloat(2, 3, 10),
            'reason' => $this->faker->sentence,
            'status' => $status,
        ];
    }
}
