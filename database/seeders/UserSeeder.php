<?php

namespace Database\Seeders;

use App\Models\Settings\UserSetup\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create();
    }
}
