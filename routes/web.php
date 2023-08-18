<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view(
        'about',
        [
            "title" => "About",
            'name' => 'Ilham J.E',
            'email' => 'ilham5566@gmail.com',
            'image' => 'ilham.jpg',
        ]
    );
});


Route::get('/blog', [PostController::class, 'index']);


Route::get('post/{slug}', [PostController::class, 'show']);
