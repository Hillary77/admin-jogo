<?php

use App\Http\Controllers\LogicaController;
use App\Http\Controllers\JogadoresController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\CssController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;

Route::get('/perfil/edit', [PerfilController::class, 'editarPerfil'])->name('perfil.edit');
Route::post('/perfil/atualizar-perfil', [PerfilController::class, 'atualizarPerfil'])->name('perfil.atualizarPerfil');



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
    return view('welcome');
});

//página de dados
Route::get('/pages', function () {
    return view('pages');
})->name('pages');


Route::resource('/logica', LogicaController::class);
Route::resource('/html', HtmlController::class);
Route::resource('/css', CssController::class);
Route::resource('/jogadores', JogadoresController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
