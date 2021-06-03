<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'content' => $this->faker->text($maxNbChars = 300),
            'user_id' => $this->faker->numberBetween(1,10),
            'post_type_id' => $this->faker->numberBetween(1,10), 
            'view' => $this->faker->numberBetween(100,1000),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
