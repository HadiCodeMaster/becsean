<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'role' => 'Administrateur',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Role::create([
            'name' => 'dev',
            'role' => 'Développeur',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Role::create([
            'name' => 'consultant',
            'role' => 'Consultant',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Role::create([
            'name' => 'super-admin',
            'role' => 'Super Administrateur',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
