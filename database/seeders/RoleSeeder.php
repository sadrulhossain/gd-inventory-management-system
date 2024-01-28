<?php

namespace Database\Seeders;

use App\Models\Settings\UserSetup\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()->insert([
            ['title' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Manager', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Store Manager', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Outlet Manager', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Top Authority', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);


    }
}
