<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\NewTaskRequest;

class TaskController extends Controller
{
    public function create()
    {
      return view('create-task');
    }

    public function store(NewTaskRequest $request)
    {
      $task = Task::create(request()->only('text'));

      $message = "task created : " . $task->text;

      return view("success", compact('message'));
    }
}
