<?php

namespace App\Http\Controllers;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function showTask($id){
        $task = Task::find($id);

        return view('tasks.show', compact('task'));
    }
}
