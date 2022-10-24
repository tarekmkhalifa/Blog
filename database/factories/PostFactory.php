<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->unique()->text(10),
            'details' => $this->faker->text(200),
            'user_id' => 1
            // 'user_id' => rand(1,4)
        ];
    }
}
