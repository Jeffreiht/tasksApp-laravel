<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tasks(){
        return view('tasks', [
            'tasks' => Task::with('user')->latest()->paginate()
        ]);
    }

    public function task(Task $task){
        return view('task', ['task' => $task]);
    }
}
