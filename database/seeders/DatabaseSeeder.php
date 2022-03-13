<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'phone' => '01835061968',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);

        Role::create([
            'role_name' => 'Super Admin',
            'role_slug' => 'super-admin',
            'role_status' => 1
        ]);
    }
}
