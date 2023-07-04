<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing ;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/post-job', function () {
    return view('postJob');
});

Route::get('/listing', function(){
    return view('listing', [
    'listing' => Listing::all() 

     

     ]) ;
});

// Single Listing

Route::get('/listing/{id}', function($id){
  return view('single-listing', ['listing' => Listing::find($id)  ]);
});
