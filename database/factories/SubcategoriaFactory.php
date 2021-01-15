<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubcategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $name = $this->faker->words($nb = 2, $asText = true);
        return [
            'name'=> $name,
            'slug'=>Str::slug($name,'-'),
            'categoria_id'=> Categoria::pluck('id')[$this->faker->numberBetween(1,Categoria::count()-1)]
        ];
    }
}
