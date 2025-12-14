<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index',[
        'tasks' => App\Models\Task::all()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id} ', function ($id) {
  return view('show', [ 'task' => App\Models\Task::findOrFail($id) ]);
})->name('tasks.show');

Route::post('/tasks', function(){
    dd('We have reached the store route');
})->name('tasks.store');

Route::fallback(function(){
    return redirect()->route('tasks.index');
});