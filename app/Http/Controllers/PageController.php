<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tasks(Request $request){

        $user = $request->user;
        $title = $request->title;
        $description = $request->description;

        return view('tasks', [
            'tasks' => Task::orderBy('id', 'DESC')
                ->user($user)
                ->title($title)
                ->description($description)
                ->paginate(6)
        ]);
    }

    public function task(Task $task){
        return view('task', ['task' => $task]);
    }
}
