<?php

namespace App\Http\Controllers\Manager;


use App\Http\Controllers\Controller;
use App\Models\Entity;
use App\Models\Project;

class EntityController extends Controller
{


    public function list()
    {
        $entities = Entity::paginate();

        return view('manager.modules.entity.list', compact('entities'));
    }

}
