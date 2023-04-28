<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'guard_name' => 'web' ],
        ]);
    }
}

// Seeder for model_has_role table
class ModelHasRoleTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = DB::table('roles')->where('name', 'admin')->first()->id;
        // $userRole = DB::table('roles')->where('name', 'user')->first()->id;
        
        DB::table('model_has_roles')->insert([
            ['role_id' => $adminRole, 'model_type' => 'App\Models\User', 'model_id' => 1],

        ]);
    }
}
