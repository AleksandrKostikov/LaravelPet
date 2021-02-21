<?php

namespace Database\Seeders;

use App\Models\Step;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()
            ->count(5)
            ->create([
                'owner_id' => \App\Models\User::first()
            ])->each(function (\App\Models\Task $task) {
                $task->steps()->saveMany(Step::factory()->count(rand(1, 5))->create());
            });
    }
}
