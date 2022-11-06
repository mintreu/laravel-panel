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
//
//Route::get('/', function () {
//    return view('basic');
//});


Route::get('/dashboard', \Mintreu\LaravelPanel\Http\Livewire\Dashboard::class);
//Route::get('/login',\Mintreu\LaravelPanel\Http\Livewire\Login::class);
