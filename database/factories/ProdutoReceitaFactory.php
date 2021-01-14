<?php

namespace Database\Factories;

use App\Models\ProdutoReceita;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoReceitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProdutoReceita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantidade' => $this->faker->randomDigit
        ];
    }
}
