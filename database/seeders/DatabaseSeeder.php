<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 50 Users
        $users = User::factory(50)->create();

        // 5 Roles (unique)
        $roles = Role::factory(5)->create();

        // Attach roles to users
        foreach ($users as $user) {
            $user->role()->attach(
                $roles->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}