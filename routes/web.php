<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PostController;

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
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('create/', 'PostController@index')->name("post.create");
Route::post('store', [PostController::class, 'store'])->name("post.store");
Route::get('show', [PostController::class, 'show'])->name("post.show");
Route::get('edit/{id}', [PostController::class, 'edit'])->name("post.edit");
Route::put('update/put/{id}', [PostController::class, 'update'])->name("post.update");
Route::delete('delete/{id}', [PostController::class, 'destroy'])->name("post.destroy"); 
Route::get('post/{id}', 'PostController@getPostAuthor')->name('post');
Route::get('lang/change', 'LangController@change')->name('changeLang');
Route::get('show/{id}', 'PostController@showDetail')->name('detail');
