<?php

namespace Database\Factories;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'date_birth' => fake()->dateTimeBetween('-30 years', '-18 years')->format('d-m-Y'),
            'job' => fake()->jobTitle(),
            'mentor_id' => Mentor::inRandomOrder()->first()->id,
        ];
    }
}
