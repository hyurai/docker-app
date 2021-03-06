<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    public function getTask(Request $request) {
        return TaskResource::collection(Task::all());
    }
}
