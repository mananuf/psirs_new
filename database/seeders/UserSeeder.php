<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        Role::insertOrIgnore([
            [
                'id' => UserRole::admin(),
                'name' => 'Admin',
            ],
            [
                'id' => UserRole::subadmin(),
                'name' => 'SubAdmin',
            ],
            [
                'id' => UserRole::director(),
                'name' => 'Director',
            ],
            [
                'id' => UserRole::staff(),
                'name' => 'Staff',
            ],
        ]);

        User::updateOrCreate(
            [
                'name' => 'Admin',
                'email' => 'admin@psirs.com',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@psirs.com',
                'password' => Hash::make('password'),
                'role_id' => UserRole::admin(),
            ]);

        User::updateOrCreate([
                'name' => 'Sub Admin',
                'email' => 'subadmin@psirs.com',
            ],
            [
                'name' => 'Sub Admin',
                'email' => 'subadmin@psirs.com',
                'password' => Hash::make('password'),
                'role_id' => UserRole::subadmin()
            ]
            );

        User::updateOrCreate([
                'name' => 'Staff',
                'email' => 'staff@psirs.com',
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@psirs.com',
                'password' => Hash::make('password'),
                'role_id' => UserRole::staff()
            ]
        );
    }
}
