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

// Return a view when the URL is reached
Route::get('/', function () {
    return view('welcome');
});

// Return a string when the URL is reached
Route::get('/users', function () {
    return 'Users page';
});

// Returned as JSON by default
Route::get('/users', function () {
    return ['PHP', 'Laravel'];
});

//Return JSON 
Route::get('/users', function () {
    return response()->json([
        'name' => 'nuni',
        'journey' => 'Foetus to Advanced'
    ]);
});

//Redirect function when the URL is reached
Route::get('/users', function () {
    return redirect('/');
});