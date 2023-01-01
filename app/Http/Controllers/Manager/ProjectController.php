<?php

namespace App\Http\Controllers\Manager;


use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{


    public function list()
    {
        $projects = Project::paginate();


        return view('manager.modules.project.list', compact('projects'));
    }

}
