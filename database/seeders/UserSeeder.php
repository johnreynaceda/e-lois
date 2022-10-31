<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
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
        $role = Role::create([
            'name' => 'admin',
        ]);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $role->id,
        ]);

        $role = Role::create([
            'name' => 'Lawyer',
        ]);

        $user = User::create([
            'name' => 'Lawyer',
            'email' => 'lawyer@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $role->id,
        ]);

        $role = Role::create([
            'name' => 'Client',
        ]);

        $user = User::create([
            'name' => 'Client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $role->id,
        ]);
    }
}
