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




/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');
*/


Route::get('/login', function () {
    return 'Login';
})->name('login');


/*
Route::middleware([])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::name('admin.')->group(function () {
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

                Route::get('/produtos', 'TesteController@teste')->name('products');
                Route::get('/', function () {
                    return redirect()->route('admin.dashboard');
                })->name('home');
            });
        });
    });
});
*/

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function () {
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('products');

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});


Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

// route('url.name');

Route::get('/nome-url', function () {
    return 'Hey hey hey';
})->name('url.name');

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect1', function () {
//     return redirect('/redirect2');
// });

Route::get('redirect2', function () {
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s) {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('/categorias/{flag}', function ($prm1) {
    return "Produtos da categoria: {$prm1}";
});

Route::match(['post', 'get'], '/match', function () {
    return 'match';
});

Route::any('/any', function () {
    return 'Any';
});

Route::post('/register', function () {
    return '';
});

Route::get('/empresa', function () {
    return view('site.contact');
});

Route::get('/contato', function () {
    return 'Contato';
});

Route::get('/', function () {
    return view('welcome');
});
