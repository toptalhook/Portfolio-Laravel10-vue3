<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'institution' => 'Islamic-Azad-University',
            'period' => '2018-2021',
            'degree' => "Bachelor's degree",
            'department' => 'Computer software Engineering'
        ];
    }
}
