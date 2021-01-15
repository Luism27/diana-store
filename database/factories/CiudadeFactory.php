<?php

namespace Database\Factories;

use App\Models\Ciudade;
use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class CiudadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ciudade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->city,
            'departamento_id'=> Departamento::pluck('id')[$this->faker->numberBetween(1,Departamento::count()-1)],
        ];
    }
}
