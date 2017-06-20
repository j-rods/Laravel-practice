<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller

{
    
    public function index()
    
    {
      //Use Eloquent in a dedicated class
      $tasks = Task::all();
      
      return view('tasks.index', compact('tasks'));
    
    }
    
    public function show(Task $task) //Task::find(wildcard);
    
    {
    
      return view('tasks.show', compact('task'));
        
    }
}
