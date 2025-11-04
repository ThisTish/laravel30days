<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // User::factory(10)->create();

    User::factory()->create([
        'first_name' => 'First',
        'last_name' => 'User',
        'email' => 'first@example.com',
    ]);


    User::factory()->createMany([
        [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ],
        [
            'first_name' => 'Tish',
            'last_name' => 'sir',
            'email' => 'tish@example.com',
        ],
        [
            'first_name' => 'Wes',
            'last_name' => 'Gage',
            'email' => 'west@example.com',
        ],
    ]);
        $this->call(JobSeeder::class);
    }
}
