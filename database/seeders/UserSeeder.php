<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Muh Ghazali Akbar',
             'email' => 'ghali@blog.com',
         ]);

         User::factory()->create([
             'name' => 'Irvan',
             'email' => 'irvan@blog.com',
         ]);
    }
}
