<?php

namespace Database\Seeders;

use App\Models\Task;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Task::create([
                'title' => Factory::create()->sentence(),
                'description' => Factory::create()->paragraph(),
                'due_date' => Factory::create()->date(),
                'priority' => Factory::create()->randomElement(['low', 'medium', 'high']),
                'note' => Factory::create()->sentence(),
                'status' => Factory::create()->randomElement(['pending', 'in_progress', 'completed']),
                'user_id' => 1
            ]);
        }
    }
}
