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

use \App\Http\Controllers\ProdutoController;
use \App\Models\Produto;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/produtos/novo', [ProdutoController::class, 'store'])->name('add-produto');

Route::model('produto', Produto::class);
Route::get('/produtos/remover/{produto}', [ProdutoController::class, 'destroy'])->name('rm-produto');

require __DIR__.'/auth.php';
