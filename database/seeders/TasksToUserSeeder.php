<?php

namespace Database\Seeders;

use App\Models\Step;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TasksToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create(['email' => 'Alex@example.com', 'password' => Hash::make('qwerty123')]);

        Task::factory()
            ->count(5)
            ->create(['owner_id' => $user])->each(function (Task $task) {
                $task->steps()->saveMany(Step::factory()->count(rand(1, 5))->make(['task_id' => '']));
            });
    }
}
