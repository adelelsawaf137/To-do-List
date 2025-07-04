<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\TaskFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProjectSeeder::class);
        $this->call(ProjectMembershipSeeder::class);
        $this->call(TaskSeeder::class);
    }
}