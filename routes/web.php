<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('Home', [
        "title" => "home"]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "about",
        "name" => "Milton Juan Dermawan",
        "email" => "milton@mail.gov",
        "image" => "image1.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);