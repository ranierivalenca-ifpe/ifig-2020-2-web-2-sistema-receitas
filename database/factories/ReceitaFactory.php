<?php

namespace Database\Factories;

use App\Models\Receita;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'receita' => $this->faker->paragraph
        ];
    }
}
