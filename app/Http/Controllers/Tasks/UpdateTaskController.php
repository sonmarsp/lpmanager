<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\Tasks\TaskUpdateInterface;
use App\Http\Requests\CreateTaskRequest;

class UpdateTaskController extends Controller
{
    //

    public function updateTaskCr(CreateTaskRequest $createTaskRequest, TaskUpdateInterface $taskUpdateInterface)
    {

        $res = $taskUpdateInterface->taskСollector($createTaskRequest);

    }
}
