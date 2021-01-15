<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categoria::factory(6)->create();
        \App\Models\Subcategoria::factory(18)->create();
        \App\Models\Departamento::factory(10)->create();
        \App\Models\Ciudade::factory(10)->create();
        \App\Models\Role::factory(2)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Producto::factory(10)->create();
        \App\Models\Foto::factory(20)->create();
        \App\Models\Comentario::factory(15)->create();
    }
}
