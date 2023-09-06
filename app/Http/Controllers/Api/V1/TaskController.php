<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Http\Requests\StoreTaskRequest;

class TaskController extends Controller
{
    public function index() {
        return TaskResource::collection(Task::all());
    }

    public function show(Task $task) {
        return TaskResource::make($task);
    }

    public function store(StoreTaskRequest $request) {
        $task = Task::create($request->validated());

        return TaskResource::make($task);
    }
}
