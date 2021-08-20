<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

// Person Routes
Route::post('/persons', [PersonController::class, 'CreatePerson']);
Route::get('/persons', [PersonController::class, 'GetAllPerson']);

// Post Routes
Route::get('/posts/{id}', [PostController::class, 'GetAllPostsByPerson']);
Route::post('/posts', [PostController::class, 'CreatePost']);

// Comments Routes
Route::get('/posts/{id}/comments', [CommentController::class, 'GetAllCommentsOnAPost']);
Route::post('/posts/{id}/comments', [CommentController::class, 'CreateComment']);
