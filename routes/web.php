<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/prueba', [ProductoController::class, 'storePrueba']);
Route::get('/productos/lista', [ProductoController::class, 'lista']);
Route::get('/productos/crear', [ProductoController::class, 'crear']);
Route::post('/productos', [ProductoController::class, 'store']);