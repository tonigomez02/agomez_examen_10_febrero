<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\App;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource("posts", PostController::class)->middleware("auth");

Route::get("/set_language/{lang}", function ($lang){
    App::setLocale($lang);
    return view("posts.create");
})->name("set_language");

Route::fallback([PostController::class, "create"]);

require __DIR__.'/auth.php';
