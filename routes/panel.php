<?php
use Illuminate\Support\Facades\Route;

Route::get('/',App\Http\Livewire\Panel\Panel::class)->name('panel');
Route::get('/myenrol',\App\Http\Livewire\Panel\MyEnrol::class)->name('myenrol');
Route::prefix('admin')->middleware('can:admin')->group(function (){
    Route::get('role',\App\Http\Livewire\Admin\UsersRole::class)->name('roles');
});
