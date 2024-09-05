<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Profil Pengguna : Nasywa Syafinka Widyamara ';
});

Route::get('/user/{name}', function ($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID){
    return 'Pos ke-'.$postID." Komentar ke-".$commentID;
});

Route::get('/articles/{id}', function ($ID){
    return 'Halaman artikel dengan ID '.$ID;
});

Route::get('/user/{name?}', function ($name='nasywa syafinka'){
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});


// prak 2
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/', [WelcomeController::class,'index']);
// Route::get('/about', [WelcomeController::class,'about']);
// Route::get('/articles/{id}', [WelcomeController::class,'articles']);
// Route::get('modif/{id}', [WelcomeController::class, 'modif']);

// use App\Http\Controllers\PhotoController;
// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class) ->only(['index','show']);
// Route::resource('photos', PhotoController::class) -> except(['create','store','update','destroy']);


// prak 3
// Route::get('/greeting', function(){
//     return view('hello', ['name' => 'Nasywa Syafinka']);
// });

// Route::get('/greeting', function(){
//     return view('blog.hello', ['name' => 'Nasywa Syafinka']);
// });

// Tugas Jobsheet 2
Route::get('/home', [WelcomeController::class,'home']);
Route::get('/category/food-beverage', [WelcomeController::class, 'food']);
Route::get('/category/beauty-health', [WelcomeController::class, 'beauty']);
Route::get('/category/home-care', [WelcomeController::class, 'homecare']);
Route::get('/category/baby-kid', [WelcomeController::class, 'baby']);
Route::get('/user', [WelcomeController::class,'user']);
Route::get('/pos', [WelcomeController::class,'pos']);
