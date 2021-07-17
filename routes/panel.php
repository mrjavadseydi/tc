<?php
use Illuminate\Support\Facades\Route;

Route::get('/',App\Http\Livewire\Panel\Panel::class)->name('panel');
Route::get('/myenrol',\App\Http\Livewire\Panel\MyEnrol::class)->name('myenrol');
