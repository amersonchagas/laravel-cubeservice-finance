<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users =  User::paginate(env('RECORDS_PER_PAGE'))->withQueryString();
        return view('manager.modules.user.list', compact('users'));
    }

    public function show($uuid)
    {
        $user = User::where('uuid', $uuid)->first();

        if($user){
            return view('manager.modules.user.show', compact('user'));
        }

        return redirect()->route('/');

    }



}
