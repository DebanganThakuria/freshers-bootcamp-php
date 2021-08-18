<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Route::get('db_health', function () {
    return view('db_test');
});

Route::post('/persons', [PersonController::class, 'createPerson']);
Route::get('/persons', [PersonController::class, 'getAllPersons']);
Route::get('/persons/{id}', [PersonController::class,'getPersonById']);
Route::delete('/persons/{id}', [PersonController::class,'deletePerson']);
