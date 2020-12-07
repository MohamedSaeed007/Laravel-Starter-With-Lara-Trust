<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional
        ]);
        
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);

        $user = Role::create([
            'name' => 'user',
            'display_name' => 'User', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);
    }
}
