<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;


use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function show()
    {
        $projects =  Project::get();
        $tasks =  ProjectTask::get();
        $customers =  User::get();
        $users =  User::get();
        return view('manager.modules.dashboard.show', compact('projects', 'tasks','customers', 'users'));
    }



}
