<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\Projects\ProjectCreateInterface;
use App\Http\Requests\CreateProjectRequest;

class CreateProjectController extends Controller
{
    public function createProjectCr(CreateProjectRequest $сreateProjectRequest, ProjectCreateInterface $projectCreateInterface)
    {

        $res = $projectCreateInterface->projectСollector($сreateProjectRequest);

    }

}
