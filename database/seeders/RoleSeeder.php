<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            ['name' => 'Agent', 'label' => 1],
            ['name' => 'Team Leader', 'label' => 2],
            ['name' => 'Assistant Manager', 'label' => 3],
            ['name' => 'Operation Team', 'label' => 4],
            ['name' => 'Quality Team', 'label' => 5],
            ['name' => 'Quality Manager', 'label' => 6],
            ['name' => 'Operation Manager', 'label' => 7],
            ['name' => 'Admin', 'label' => 8],
            ['name' => 'Super Admin', 'label' => 9],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
