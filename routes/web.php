<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductosPage;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class)->name('home');

Route::get('productos',[ProductoController::class,'index'])->name('productos.index');
Route::get('producto/{producto}',[ProductoController::class,'show'])->name('productos.show');

Route::get('categoria/{categoria}',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('categoria/{categoria}/subcategoria/{subcategoria}',[CategoriaController::class,'subcategoria'])->name('categoria.subcategoria'); 
// Route::get('categoria/{categoria}', function ($categoria) {
//     return $categoria;
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

