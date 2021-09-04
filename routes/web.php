<?php
use App\Http\Controllers\{
    PostagemController
};

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
Route::get('/posts/novo',[PostagemController::class, 'create'])->name('posts.create');
Route::get('/posts',[PostagemController::class, 'index'])->name('posts.index');

Route::get('/', function () {
    return view('welcome');
});
