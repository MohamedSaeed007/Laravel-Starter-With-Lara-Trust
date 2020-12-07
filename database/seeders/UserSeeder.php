<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = User::create([
            'name' => 'Owner',
            'email' => 'owner@owner.com', // optional
            'password' => Hash::make('123456'), // optional
        ]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com', // optional
            'password' => Hash::make('123456'), // optional
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com', // optional
            'password' => Hash::make('123456'), // optional
        ]);

        $user->attachRole('user');
        $admin->attachRole('admin');
        $owner->attachRole('owner');
    }
}
