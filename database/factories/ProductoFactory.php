<?php

namespace Database\Factories;

use App\Models\Foto;
use App\Models\Producto;
use App\Models\Subcategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence($nbWords = 2, $variableNbWords = true);
        return [
            'name'=> $name,
            'slug'=> Str::slug($name,'-'),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->numberBetween($min = 1000, $max = 100000),
            'stock'=>$this->faker->numberBetween($min=0, $max = 1),
            'subcategoria_id'=>Subcategoria::pluck('id')[$this->faker->numberBetween(1,Subcategoria::count()-1)],
        ];
    }
}
