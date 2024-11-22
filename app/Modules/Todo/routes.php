<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Todo\Controllers\TodoController;

Route::controller(TodoController::class)->middleware(['web','auth'])->group(function(){
	Route::get('/todo', 'index')->name('todo.index')->middleware('permission:todo.index');
	Route::get('/todo/create', 'create')->name('todo.create')->middleware('permission:todo.create');
	Route::post('/todo', 'store')->name('todo.store')->middleware('permission:todo.store');
	Route::get('/todo/{todo}', 'show')->name('todo.show')->middleware('permission:todo.show');
	Route::get('/todo/{todo}/edit', 'edit')->name('todo.edit')->middleware('permission:todo.edit');
	Route::patch('/todo/{todo}', 'update')->name('todo.update')->middleware('permission:todo.update');
	Route::get('/todo/{todo}/delete', 'destroy')->name('todo.destroy')->middleware('permission:todo.destroy');
});