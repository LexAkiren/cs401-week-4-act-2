<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::insert([
            ['role_name' => 'A', 'description' => 'Admin'],
            ['role_name' => 'C', 'description' => 'Contributor'],
            ['role_name' => 'S', 'description' => 'Subscriber'],
        ]);
    }
}
