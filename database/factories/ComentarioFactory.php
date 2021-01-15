<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->paragraph(),
            'calificacion'=> $this->faker->numberBetween($min = 1, $max = 5),
            'producto_id'=>Producto::pluck('id')[$this->faker->numberBetween(1,Producto::count()-1)],
            'user_id'=>User::pluck('id')[$this->faker->numberBetween(1,User::count()-1)]

        ];
    }
}
