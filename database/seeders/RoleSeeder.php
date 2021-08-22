<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::dropIfExists('roles');
        // Role::factory()->times(10)->create();
        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Author'
        ]);

        DB::table('roles')->insert([
            'name' => 'User'
        ]);
    }
}
