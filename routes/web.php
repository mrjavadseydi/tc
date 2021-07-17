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

Route::view('/','welcome');
Route::get('sign-up',\App\Http\Livewire\Auth\SignUp::class)->name('signup');
Route::get('sign-in',\App\Http\Livewire\Auth\SignIn::class)->name('signin');
Route::get('logout',function (){
    session()->flush();
    return redirect(\route('wellcome'));
})->name('logout');
