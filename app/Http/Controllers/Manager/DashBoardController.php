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
        $users =  User::get();
        return view('manager.modules.dashboard.show', compact( 'users'));
    }



}
