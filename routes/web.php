<?php

//import the Task class
use App\Task;

Route::get('/', function () {
    
    $tasks = DB::table('tasks')->latest()->get();
    
    // return $tasks;
    
    return view('welcome', compact('tasks'));
    
});

Route::get('/tasks', function () {
    
    //Use Eloquent in a dedicated class
    $tasks = Task::all();
    
    
    return view('tasks.index', compact('tasks'));
    
});

Route::get('/tasks/{task}', function ($id) {
    
    $task = Task::find($id);
    
    return view('tasks.show', compact('task'));
    
});

Route::get('/about', function () {
    return view('about');
    
});