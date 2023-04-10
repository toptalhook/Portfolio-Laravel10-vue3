<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> 'jay Smith',
            'function'=>'Customer',
            'testimony'=> 'I get a good impression ,..........',
            'rating' => '4',
            'photo'=>'avatar.png'
        ];
    }
}
