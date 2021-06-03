<?php

namespace Database\Factories;

use App\Models\Adv;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number_block' => $this->faker->numberBetween(1,5), 
            'uri' => $this->faker->url(),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
