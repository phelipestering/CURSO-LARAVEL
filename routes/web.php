<?php

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

use App\Http\Controllers\ControleProdutos;
use App\Http\Controllers\ProductController;

// inserindo rotas para crud

/*
Route::delete('produtos/{id}', [ControleProdutos::class, 'destroy'])->name('produtos.destroy');
Route::put('produtos/{id}/update', [ControleProdutos::class, 'update'])->name('produtos.update');
Route::post('produtos', [ControleProdutos::class, 'index'])->name('produtos.index');
Route::get('produtos/{id}/edit', [ControleProdutos::class, 'edit'])->name('produtos.edit');
Route::get('produtos/create', [ControleProdutos::class, 'create'])->name('produtos.create');
Route::get('produtos/{id}', [ControleProdutos::class, 'show'])->name('produtos.show');
Route::get('produtos', [ControleProdutos::class, 'store'])->name('produtos.store');
*/

// do jeito mais facinho....

Route::resource('produtos', ProductController::class);

/*

php artisan make:controller ProductController --resource

esse comando cria controler com todas as rotas de crud necessarias





*/

Route::get('/', function () {
    return view('welcome');
});



