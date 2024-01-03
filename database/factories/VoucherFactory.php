<?php

namespace Database\Factories;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $expiredAt = Carbon::now()->addMonths(3);
        return [
            'code' => $this->faker->unique()->uuid,
            'transaction_id' => Transaction::all()->random()->id,
            'expired_at' => $this->faker->dateTimeBetween(now(), $expiredAt),
        ];
    }
}
