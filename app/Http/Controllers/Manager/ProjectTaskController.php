<?php

namespace App\Http\Controllers\Manager;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectTaskController extends Controller
{
    public function list($uuid_user = false)
    {
        $logged = auth()->user();
        $properties = false;
        return view('admin.modules.producer.list', compact('producers'));
    }

    public function show(Request $request)
    {
        $user = User::where('gamertag', $request->gamertag)->first();

        if($user){
            return view('admin.modules.user.show', compact('user'));
        }

        return redirect()->route('/');

    }

    public function store(Request $request){
        $logged = auth()->user();

        #VERIFICA SE O USUARIO TEM PERMISSAO PRA ADICIONAR PROPRIEDADE
        $AttachUser = $logged->producers->where('uuid', $request->uuid)->first();

        if($AttachUser){

            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255']
            ]);

            if ($validator->fails()) {
                $validator->errors();
            }

            $property = $AttachUser->properties()->create([
                'uuid' => Str::uuid(),
                'name' => $request->name,
                'address' => $request->address,
                'zipcode' => $request->zipcode,
                'city_id' => 1
            ]);

            session()->flash('success', 'Propriedade Cadastrada com Sucesso!');
            return redirect()->route('manager.producer.show', $AttachUser->uuid);

        }else{
            session()->flash('error', 'EsteProdutor não está vinculado a Você!');
            return redirect()->back();
        }

    }



}
