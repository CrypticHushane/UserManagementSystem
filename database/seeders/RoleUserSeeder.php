<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=1; $i <=count(User::all()) ; $i++) { 
        //     # code...
        //     DB::table('roles_user')->insert([
        //         'user_id' => $i,
        //         'role_id' => rand(1,3),
        //     ]);
        // }

        $roles = Role::all();

        User::all()->each(function($user) use ($roles) {
            $user->roles()->sync(
                $roles->random(1)->pluck('id')
            );
        });
    }
}
