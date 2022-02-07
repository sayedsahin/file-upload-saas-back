<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->unique()->uuid(),
            'name' => $this->faker->word().'.jpg',
            'path' => 'files/abc.jpg',
            'size' => '5000',
        ];
    }
}
