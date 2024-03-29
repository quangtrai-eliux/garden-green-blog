<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'post_id' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->numberBetween(0,1),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
