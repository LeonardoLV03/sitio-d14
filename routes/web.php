<?php

//use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\ContactoController;
use App\Models\Contacto;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacto/{tipo_usuario?}', [ContactoController::class, 'formContacto']);
Route::post('/guardar-formulario', [ContactoController::class, 'guardarFormulario']);
Route::get('/mensajes', [ContactoController::class, 'listado']);