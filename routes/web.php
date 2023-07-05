<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing ;
use App\Http\Controllers\ListingController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index', ['title'=> 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title'=> 'About']);
});

Route::get('/register', function () {
    return view('register', ['title'=> 'Register']);
});

Route::get('/login', function () {
    return view('login', ['title'=> 'Login']);
});

Route::get('/post-job', function () {
    return view('postJob', ['title'=> 'Post Job']);
});

Route::get('/listing',[ListingController::class, 'index'] );

// Single Listing

Route::get('/listing/{id}', [ListingController::class, 'show']);
