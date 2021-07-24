<?php
use Illuminate\Support\Facades\Route;

Route::get('/',App\Http\Livewire\Panel\Panel::class)->name('panel');
Route::get('/myenrol',\App\Http\Livewire\Panel\MyEnrol::class)->name('myenrol');
Route::prefix('admin')->middleware('can:admin')->group(function (){
    Route::get('role',\App\Http\Livewire\Admin\UsersRole::class)->name('roles');
    Route::get('exam-create',\App\Http\Livewire\Exam\Create::class)->name('create.exam');
    Route::get('exam-index',\App\Http\Livewire\Exam\Index::class)->name('index.exam');
    Route::get('exam-edit/{id}',\App\Http\Livewire\Exam\Edit::class)->name('edit.exam');
    Route::get('statistics/{id}',\App\Http\Livewire\Admin\Statistics::class)->name('report.exam');
});
