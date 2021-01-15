<?php

namespace Database\Factories;

use App\Models\Foto;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class FotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Foto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'=>$this->faker->unique()->imageUrl,
            'main'=>$this->faker->numberBetween(0,1),
            'producto_id'=>Producto::pluck('id')[$this->faker->numberBetween(1,Producto::count()-1)],
        ];
    }
}
