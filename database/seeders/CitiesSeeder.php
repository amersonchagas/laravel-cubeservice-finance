<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CitiesSeeder extends Seeder
{
    public function run()
    {

        DB::table('states')->insert([
            'name' => 'Amapá',
            'letter' => 'AP'
        ]);

        DB::table('states')->insert([
            'name' => 'Pará',
            'letter' => 'PA'
        ]);


        DB::table('cities')->insert([
            'name' => 'Macapá',
            'state_id' => 1
        ]);

        DB::table('cities')->insert([
            'name' => 'Santana',
            'state_id' => 1
        ]);





    }
}
