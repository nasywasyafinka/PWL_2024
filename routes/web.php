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
    return 'Nama : Nasywa Syafinka Widyamara | NIM: 2241760002';
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