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

foreach (config('panel.panels') as $panel)
{

    Route::prefix($panel['slug'])->group(function (){
        Route::get('/dashboard', \Mintreu\LaravelPanel\Panel\Panel::class);
        Route::get('/login', \Mintreu\LaravelPanel\Panel\Panel::class);

//        Route::get('/dashboard/profile', \Mintreu\LaravelPanel\Http\Livewire\Pages\Profile::class);
//        Route::get('/dashboard/users', \Mintreu\LaravelPanel\Http\Livewire\Pages\Users::class)->name('panel.users');
    });
}



//
//Route::get('/dashboard/setting', \Mintreu\LaravelPanel\Http\Livewire\Pages\Setting::class);


//Route::get('/login',\Mintreu\LaravelPanel\Http\Livewire\Login::class);
