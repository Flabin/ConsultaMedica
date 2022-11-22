<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('consulta', [ConsultaController::class, 'index'])->name('consulta.index');
Route::get('consulta/{id}/edit', [ConsultaController::class, 'edit'])->name('consulta.edit');
Route::get('consulta/create', [ConsultaController::class, 'create'])->name('consulta.create');

Route::resource('paciente', PacienteController::class);

Route::resource('medico', MedicoController::class);
