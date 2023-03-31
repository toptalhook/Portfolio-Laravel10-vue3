<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Modern Website Portfolio',
            'description'=> 'Website adaptable for all devices',
            'link' => 'https://github.com/mohmdrezaei',
            'photo'=> 'avatar.png'
        ];
    }
}
