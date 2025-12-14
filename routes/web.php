<?php

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index',[
        'tasks' => Task::all()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id} ', function ($id) {
  return view('show', [ 'task' => Task::findOrFail($id) ]);
})->name('tasks.show');

Route::post('/tasks', function(Request $request){
    $data = $request->validate([
        'title' => 'required | max:128',
        'description' => 'required | max:255',
        'long_description' => 'required'
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];

    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.store');

Route::fallback(function(){
    return redirect()->route('tasks.index');
});