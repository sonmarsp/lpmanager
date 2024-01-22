<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\Tasks\TaskCreateInterface;
use App\Http\Requests\CreateTaskRequest;


class CreateTaskController extends Controller
{
    //

    public function createTaskCr(CreateTaskRequest $createTaskRequest, TaskCreateInterface $taskCreateInterface)
    {

        

    }
}
